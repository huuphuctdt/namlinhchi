<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMenuRequest;
use App\Http\Requests\EditMenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    private $menu;
    
    public function __construct()
    {
        $this->menu = new Menu();
    }

    public function getAllMenu(){
        $menus = $this->menu->getMenuAdmin();
        return $menus;
    }

    public function index(){
        $menus = $this->menu->getMenu();
        $data['menus'] = $menus;
        return view('admin.menu',$data);
    }

    public function update(Request $request){
        $menu = $this->menu->getId($request->po_menu_id);
        $flag = false;
        if(!empty($menu)){
            $flag = $menu->delete();
        }
        if($flag){
            return redirect('admin/menu')->with(['flash_level' => 'success', 'flash_messages' => 'Xoá thành công!']);
        }else{
            return redirect('admin/menu')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
        }
    }

    public function create(){
        return view('admin.menu-create');
    }

    public function create_menu(CreateMenuRequest $request){
        $flag = $this->menu->createMenu($request);
        if($flag){
            return redirect('admin/menu')->with(['flash_level' => 'success', 'flash_messages' => 'Tạo thành công!']);
        }else{
            return redirect('admin/menu')->with(['flash_level' => 'danger', 'flash_messages' => 'Tạo thất bại!']);
        }
    }

    public function edit($id){
        $menu = $this->menu->getId($id);
        $data['menu'] = $menu;
        return view('admin.menu-detail', $data);
    }

    public function save_edit(EditMenuRequest $request){
        $flag = $this->menu->updateMenu($request);
        if($flag){
            return redirect('admin/menu')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/menu')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
