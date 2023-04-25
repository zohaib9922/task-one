<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function children()
    {
        return $this->hasMany('App\Menu', 'parent_id');
    }

    public function grandchildren()
    {
        return $this->belongsTo('App\Menu', 'parent_id');
    }

}
