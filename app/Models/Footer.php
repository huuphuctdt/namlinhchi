<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footer';
    protected $fillable = ['introduction','address','phone','email','facebook','twitter','linkedin','google-plus','copy-right'];

    public function getFooter(){
        $footer = Footer::all();
        return $footer->first();
    }

    public function getFooterAdmin(){
        $footer = Footer::all();
        $admin_show = Admin_Show::where('menu_eng','like','%footer-wrapper%')->first();
        if($admin_show->is_show == 1) {
            return $footer->first();
        }
        return;
    }


    public function getId($id){
        $footer = Footer::find($id);
        return $footer;
    }

    public function updateFooter($request){
        $flag = Footer::query()->update([
            'introduction' => $request->introduction,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'google-plus' => $request->all()['google-plus'],
            'copy-right' => $request->all()['copy-right']
        ]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }
}
