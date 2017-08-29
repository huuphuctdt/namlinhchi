<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['name','link'];

    public function menu_child(){
        return $this->hasMany('App\Models\Menu_Child');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($menu) {
            $menu->menu_child()->delete();
        });
    }

    public function getMenu(){
        $menus = Menu::all();
        return $menus;
    }
    public function getMenuAdmin(){
        $menus = Menu::all();
        $admin_show = Admin_Show::where('menu_eng','like','%header%')->first();
        if($admin_show->is_show == 1) {
            return $menus;
        }
        return;
    }

    public function getId($id){
        $menu = Menu::find($id);
        return $menu;
    }

    public function createMenu($request){
        try{
            DB::beginTransaction();
            $menu = Menu::create(['name' => trim($request->menu_name), 'link' => str_slug(trim($request->menu_name)).".html"]);
            if(isset($menu->id)){
                if(count(array_filter($request->menu_child_name)) > 0){
                    foreach (array_filter($request->menu_child_name) as $item){
                        Menu_Child::create(['name' => trim($item), 'menu_id' => $menu->id, 'link' => str_slug(trim($item)).".html"]);
                    }
                }
            }
            DB::commit();
            return true;
        }catch (\Exception $exception){
            DB::rollBack();
            return false;
        }
    }

    public function updateMenu($request){
        try{
            DB::beginTransaction();
            Menu::where('id', $request->po_menu_id)->update(['name' => $request->menu_name]);
//            if(count(array_filter($request->menu_child_name)) > 0){
                Menu_Child::where('menu_id', $request->po_menu_id)->delete();
                foreach (array_filter($request->menu_child_name) as $item){
                    Menu_Child::create(['name' => trim($item), 'menu_id' => $request->po_menu_id, 'link' => str_slug(trim($item)).".html"]);
                }
//            }
            DB::commit();
            return true;
        }catch (\Exception $exception){
            DB::rollBack();
            return false;
        }
    }
}
