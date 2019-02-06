<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MetaTag;

class PagesController extends Controller
{
    public function home(){
        MetaTag::set('title', 'Home');
        MetaTag::set('description', 'Welcome to Elselink');

        return view('pages.home');
    }
}
