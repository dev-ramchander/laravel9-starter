<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSidebarMenu extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','status','parent_menu_id','is_dropdown_menu','permission_value'];

    public function toArray(){
        $data=[];
        $data['id'] = $this->id;
        $data['name'] = $this->name;
        $data['slug'] = $this->slug;
        $data['status'] = $this->status;
        $data['parent_menu_id'] = $this->parent_menu_id;
        $data['is_dropdown_menu'] = $this->is_dropdown_menu;
        $data['permission_value'] = $this->permission_value;
        return $data;
    }
}
