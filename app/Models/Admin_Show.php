<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin_Show extends Model
{
    protected $table = 'admin_show';
    protected $fillable = ['menu', 'is_show', 'menu_eng'];

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

    public function getMapShow(){
        $admin_show = Admin_Show::where('menu_eng','like','%ourclients%')->first();
        if($admin_show->is_show == 1) {
            return $admin_show;
        }
        return;
    }
}
