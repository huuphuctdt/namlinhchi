<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIntroductionRequest;
use App\Http\Requests\EditIntroductionRequest;
use App\Models\Introduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IntroductionController extends Controller
{
    private $introduction;
    public function __construct()
    {
        $this->introduction = new Introduction();
    }

    public function getAllIntro(){
        $intros = $this->introduction->getIntroductionAdmin();
        return $intros;
    }

    public function getId($id){
        $intro = $this->introduction->getId($id);
        return $intro;
    }

    public function index(){
        $intros = $this->introduction->getIntroduction();
        $data['intros'] = $intros;
        return view('admin.intro',$data);
    }
    
    public function create(){
        return view('admin.intro-create');
    }

    public function create_introduce(CreateIntroductionRequest $request){
        $flag = $this->introduction->createIntroduction($request);
        if($flag){
            return redirect('admin/introduce')->with(['flash_level' => 'success', 'flash_messages' => 'Tạo thành công!']);
        }else{
            return redirect('admin/introduce')->with(['flash_level' => 'danger', 'flash_messages' => 'Tạo thất bại!']);
        }
    }

    public function delete(Request $request){
        $intro = $this->introduction->getId($request->po_intro_id);
        $flag = false;
        if(!empty($intro)){
            $flag_1 = File::delete(public_path('upload').'/'.$intro->image);
            $flag = $intro->delete();
        }
        if($flag && $flag_1){
            return redirect('admin/introduce')->with(['flash_level' => 'success', 'flash_messages' => 'Xoá thành công!']);
        }else{
            return redirect('admin/introduce')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
        }
    }

    public function edit($id){
        $intro = $this->introduction->getId($id);
        $data['intro'] = $intro;
        return view('admin.intro-detail', $data);
    }

    public function save_edit(EditIntroductionRequest $request){
        $flag = $this->introduction->updateIntroduction($request);
        if($flag){
            return redirect('admin/introduce')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/introduce')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
