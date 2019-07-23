<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    protected $frontendPath='frontend.';
    protected $pagepath=null;
    public function __construct()
    {
        $this->data('title',$this->makeTitle('welcome'));
        $this->pagepath=$this->frontendPath.'pages.';
    }
}
