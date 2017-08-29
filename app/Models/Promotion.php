<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotion';
    protected $fillable = ['name','note','read_more'];

    public function getPromotion(){
        $promotions = Promotion::all();
        return $promotions;
    }

    public function getPromotionAdmin(){
        $promotions = Promotion::all();
        $admin_show = Admin_Show::where('menu_eng','like','%promosection%')->first();
        if($admin_show->is_show == 1) {
            return $promotions->first();
        }
        return;
    }

    public function getId($id){
        $promotion = Promotion::find($id);
        return $promotion;
    }

    public function updatePromotion($request){
        $flag = Promotion::query()->update(['name' => $request->name, 'note' => $request->note, 'read_more' => $request->read_more]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }
}
