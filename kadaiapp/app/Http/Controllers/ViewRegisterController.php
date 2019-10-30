<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Request;
use App\Http\Requests\RegisterRequest;
// use Validator;

class ViewRegisterController extends Controller {
    // 新規登録ページを表示するための処理
    public function index(Request $request) {
        return view('register', ['user' => 'フォームを入力しましょう！']);
    }

    // フォームのバリデーション機能を実装
    public function post(RegisterRequest $request) {
        // validateクラスで必要なリダイレクト機能はいらない

        // バリデーションが問題なければホーム画面に遷移する。
        // フォームの名前をユーザー名としてビューに渡す
        return view('home', ['user' => $request->name. '様']);
    }
}
