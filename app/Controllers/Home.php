<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/dashboard', [
            'title' => 'Beranda'
        ]);
    }

    public function login()
    {
        return view('pages/auth/signin', [
            'title' => 'Login',
            'loginTitle'    => 'Masuk Aplikasi SATIR<br><small>Sistem Antrian Tiket Inovatif dan Responsif</small>'
        ]);
    }

    public function register()
    {
        return view('pages/auth/register', [
            'title' => 'Register',

        ]);
    }

    public function forgot()
    {
        return view('pages/auth/forgot', [
            'title' => 'Forgot'
        ]);
    }
}
