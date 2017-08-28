<?php

namespace App\Http\Controllers;

use App\Models\Admin_Show;
use Illuminate\Http\Request;

class AdminShowController extends Controller
{
    private $admin_show;
    public function __construct()
    {
        $this->admin_show = new Admin_Show();
    }

    public function index(){
        $data["admins"] = $this->admin_show->getAdminShow();
        return view("admin.admin-show",$data);
    }

    public function change_isShow(Request $request){
        $flag = $this->admin_show->change_isShow($request);
        return response()->json(['result' => $flag]);
    }
}
