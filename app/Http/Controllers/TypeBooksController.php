<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBooks;   // นำโมเดล typeBooks เข้ามาใช้งาน

class TypeBooksController extends Controller
{
public function index(){
    $typebooks =TypeBooks::all();
    $typebooks = TypeBooks::orderBy('id','desc')->get();
    $count =TypeBooks::count();  //นับจำนวนแถวทั้งหมด
    //$typebooks=TypeBooks::simplepaginate(5);
    $typebooks=TypeBooks::paginate(5); // การแบ่งจำหน้าในการแสดงผล

    return view('Typebooks.index',['typebooks'=>$typebooks,
    'count'=>$count]);

}
public function destroy($id){
    //Typebooks::find(@id)->delete();
    TypeBooks::destroy($id);
    return back();
}


}
