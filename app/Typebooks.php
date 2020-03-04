<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBooks extends Model
{
    protected $table='typebooks';  //กำหนดชื่อตารางให้กับฐานข้อมูล
public function books(){
    return $this->hasMany(Books::class);  // กำหนด one to many ตาราง books
}
}
