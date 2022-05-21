<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $user = 'ali';
        $id = 15;
        // return route('posts',[$user,$id]);# code...
        return view('Welcome');

    }


    public function about()
    {
    //     return 'about page';  # code...
    return view('about');
     }


    public function team()
    {
        return 'team page'; # code...
    }
    public function searvices()
    {
        return 'searvices page'; # code...
    }

    public function contact()
    {
        return 'contact page'; # code...
    }


    public function user($name)
    {
       return 'Welcime ' .$name; # code...
    }


    public function posts($name,$id)
    {
       return 'User Name'.$name .',Comment Number'.$id;# code...
    }



    
};
