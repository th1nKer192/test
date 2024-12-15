<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function dangNhap()
    {
        return view('dang_nhap.sign_in');
    }
    public function dangKy()
    {
        return view('dang_ky.sign_up');
    }
    public function mainMenu()
    {
        return view('main_menu.master');
    }
    public function homePage()
    {

    }
    public function detailPost()
    {

    }
    public function cartPage()
    {
        return view('cart_page.cart');
    }
    public function customPage()
    {
        return view('custom_page.custom_page');
    }
    public function bookList()
    {
        return view('book_list.book');
    }
}
