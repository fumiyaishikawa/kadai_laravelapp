<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewLoginController extends Controller {
    // ログインページに対する処理
    public function index() {
        return view('login');
    }
}
