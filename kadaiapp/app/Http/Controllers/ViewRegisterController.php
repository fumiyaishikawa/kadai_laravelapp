<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewRegisterController extends Controller {
    // 新規登録ページに対する処理
    public function index() {
        return view('register');
    }
}
