<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class second extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('showsecond2');
        }
    public function showsecond(){

        return 'zero';
    }
    public function showsecond1(){

        return 'first';
    }
    public function showsecond2(){

        return 'second';
    }
    public function showsecond3(){

        return 'third';
    }

}
