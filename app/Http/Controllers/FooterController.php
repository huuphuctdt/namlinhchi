<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    private $footer;
    public function __construct()
    {
        $this->footer = new Footer();
    }

    public function index(){
        $footer = $this->footer->getFooter();
        $data['footer'] = $footer;
        return view('admin.footer',$data);
    }

    public function edit($id){
        $footer = $this->footer->getId($id);
        $data['footer'] = $footer;
        return view('admin.footer-detail', $data);
    }
}
