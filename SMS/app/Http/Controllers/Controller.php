<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function Form(){
        return view("Home");
    }
}
