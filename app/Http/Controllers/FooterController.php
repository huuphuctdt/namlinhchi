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

    public function getAllFooter(){
        $footer = $this->footer->getFooterAdmin();
        return $footer;
    }

    public function edit($id){
        $footer = $this->footer->getId($id);
        $data['footer'] = $footer;
        return view('admin.footer-detail', $data);
    }

    public function save_edit(Request $request){
        $flag = $this->footer->updateFooter($request);
        if($flag){
            return redirect('admin/footer')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/footer')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
