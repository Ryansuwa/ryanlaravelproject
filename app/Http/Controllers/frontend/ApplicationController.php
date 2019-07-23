<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends FrontendController
{
    public function index()
    {
        $this->data('title',$this->makeTitle('Home'));
        return view($this->pagepath.'home.home',$this->data);

    }
    public function about()
    {
        $this->data('title',$this->makeTitle('About'));
        return view($this->pagepath.'about.about',$this->data);
    }
}
