<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\RegisterRequest;
use Validator;

class ViewRegisterController extends Controller {
    // 新規登録ページを表示するための処理
    public function index(Request $request) {
        return view('register', ['user' => 'フォームを入力しましょう！']);
    }

    // フォームのバリデーション機能を実装
    public function post(Request $request) {
        $rules = [
            'name' => 'required',
            'mail' => 'required|email',
            'pass' => 'required|min:7',
            'conf_pass' => 'required|same:pass',
        ];

        $messages = [
            'name.required' => '名前は必ず入力してください。',
            'mail.required' => 'メールアドレスは必ず入力してください。',
            'mail.email' => 'メールアドレス形式で入力してください。',
            'pass.required' => 'パスワードは必ず入力してください。',
            'pass.min' => 'パスワードは7文字以上で入力してください。',
            'conf_pass.required' => '確認用のパスワードも入力してください。',
            'conf_pass.same' => 'パスワードが一致しませんでした。',
        ];

        // バリデーションに問題があれば新規登録ページにリダイレクトして、再登録してもらう
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // バリデーションが問題なければホーム画面に遷移する
        // 入力したnameをホーム画面でも出力する->laravelでの書き方に直すべき
        return view('home', ['user' => $_POST['name']. '様']);
    }
}
