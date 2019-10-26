<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewHomeController extends Controller {
    // ホームページを表示する処理
    public function index() {
        return view('home', ['user' => 'ゲスト様']);
    }
}
