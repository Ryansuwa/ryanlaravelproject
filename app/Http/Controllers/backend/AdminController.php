<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends BackendController
{
    public function index(){
        return view($this->backendPath.'login.index');
    }
}
