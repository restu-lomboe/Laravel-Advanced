<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function route_1()
    {
        return "ini adalah route 1, hanya bisa diakses SuperAdmin";
    }
    public function route_2()
    {
        return "ini adalah route 2, hanya bisa diakses SuperAdmin dan Admin";
    }
    public function route_3()
    {
        return "ini adalah route 3, bisa diakses SuperAdmin, Admin dan Users";
    }
}
