<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 新規登録ページで利用する
     * @return bool
     */
    public function authorize() {
        if($this->path() === 'register') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required',
            'mail' => 'required|email',
            'pass' => 'required|min:7',
            'conf_pass' => 'required|same:pass',
        ];
    }

    public function messages() {
        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.required' => 'メールアドレスは必ず入力してください。',
            'mail.email' => 'メールアドレス形式で入力してください。',
            'pass.required' => 'パスワードは必ず入力してください。',
            'pass.min' => 'パスワードは7文字以上で入力してください。',
            'conf_pass.required' => '確認用のパスワードも入力してください。',
            'conf_pass.same' => 'パスワードが一致しませんでした。',
        ];
    }
}
