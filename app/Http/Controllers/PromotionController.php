<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    private $promotion;
    public function __construct()
    {
        $this->promotion = new Promotion();
    }

    public function index(){
        $promotions = $this->promotion->getPromotion();
        $data['promotions'] = $promotions;
        return view('admin.promotion',$data);
    }

    public function getAllPromotion(){
        $promotions = $this->promotion->getPromotion()->first();
        return $promotions;
    }

    public function edit($id){
        $promotion = $this->promotion->getId($id);
        $data['promotion'] = $promotion;
        return view('admin.promotion-detail',$data);
    }

    public function save_edit(Request $request){
        $flag = $this->promotion->updatePromotion($request);
        if($flag){
            return redirect('admin/promotion')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/promotion')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}

