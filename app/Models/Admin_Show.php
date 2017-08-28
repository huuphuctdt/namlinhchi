<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin_Show extends Model
{
    protected $table = 'admin_show';
    protected $fillable = ['menu', 'is_show'];

    public function getAdminShow(){
        $admin = Admin_Show::all();
        return $admin;
    }

    public function getId($id){
        $admin = Admin_Show::find($id);
        return $admin;
    }

    public function change_isShow($request){
        $admin = Admin_Show::find($request->id);
        $is_show = $admin->is_show;
        $flag = Admin_Show::where('id',$request->id)->update(['is_show' => !$is_show]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }
}
