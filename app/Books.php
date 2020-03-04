<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table='books';    // กำหนดชื่อตารางให้กับฐานข้อมูล
    protected $fillable=['title','price','typebooks_id'];   //กำหนดให้สามารถเพิ่มข้อมูลได้ในคำสั่ง Mass  Assignment
public function typebooks(){
    return $this->belongsTo(TypeBooks::class,'typebooks_id');  // FK key

}
}
