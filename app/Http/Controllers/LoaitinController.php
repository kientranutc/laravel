<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaitin;
class LoaitinController extends Controller
{

	public function  danhsach()
	{
		$data=Loaitin::all();
		 return view('admin.loaitin.danhsach',
     [ 'data'=>$data]
      );
	}
  // them
	public function getthem()
	{
		return view('admin.loaitin.them');
	}
   public function postthem(Request $request)
   {

   
   	$loaitin=new Loaitin();
   	$loaitin->Tentl=$request->loaitin;
    $loaitin->Trangthai=$request->trangthai;
     $loaitin->save();
   return redirect('admin/loaitin/danhsach')->with(['thongbao'=>'thêm thành công']);
   }

   // sửa

   // xóa
   public function getxoa($id)
   {
    $data=Loaitin::find($id);
    $data->delete();
    return redirect('admin/loaitin/danhsach')->with(['thongbao'=>'xóa thành công']);
   }

}
