<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu_Child extends Model
{
    protected $table = 'menu_child';
    protected $fillable = ['name', 'menu_id', 'link'];

    public function menu(){
        return $this->belongsTo('App\Models\Menu');
    }
}
