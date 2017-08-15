<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHeaderRequets;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    private $header;
    public function __construct()
    {
        $this->header = new Header();
    }

    public function index(){
        $header = $this->header->getHeader();
        $data['header'] = $header;
        return view('admin.logo',$data);
    }

    public function getAllHeader() {
        $header = $this->header->getHeader();
        return $header;
    }

    public function update(UpdateHeaderRequets $request){
        $flag = $this->header->updateHeader($request);
        if($flag){
            return redirect('admin/logo')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/logo')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
