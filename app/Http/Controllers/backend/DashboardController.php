<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends BackendController
{
    public function index()
    {

        return view($this->pagepath.'dashboard.dashboard',$this->data);

    }

}
