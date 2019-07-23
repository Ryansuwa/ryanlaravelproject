<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    protected $backendPath='backend.';
    protected $pagepath=null;
    public function __construct()
    {
        $this->data('title',$this->makeTitle('Admin'));
        $this->pagepath=$this->backendPath.'pages.';
    }
}
