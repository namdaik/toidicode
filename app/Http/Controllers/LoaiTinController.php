<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;
class LoaiTinController extends Controller
{
    public function getdanhsach()
    {	
    	$loaitin = LoaiTin::all();    	
    	return view('admin.LoaiTin.hienthi',['loaitin'=>$loaitin]);
    }
    public function getthem()
    {
    	$theloai = TheLoai::all();
    	$loaitin = LoaiTin::all();    	
    	return view('admin.LoaiTin.them',['loaitin'=>$loaitin,'theloai'=>$theloai]);
    }
    public function getsua($id)
    {
    	$theloai = TheLoai::all();
    	$loaitin = LoaiTin::find($id);    	
    	return view('admin.LoaiTin.sua',['loaitin'=>$loaitin,'theloai'=>$theloai]);
    }
    public function getxoa($id)
    {
    	$loaitin=LoaiTin::find($id);
    	$loaitin->delete();
    	return redirect('admin/loaitin/danhsach')->with('thongbao','xóa thành công');
    }
    public function postthem(Request $req)
    {
    	$this->validate($req,
    		[
    			'ten'=>'required|min:3|max:100|unique:Loai_Tins,ten',
    			'idtheloai'=>'required'
    		],
    		[
    			'ten.required'=>'Tên loại tin là bắt buộc',
    			'ten.min'=>'Tên loại tin cần lớn hơn 3 ký tự',
    			'ten.max'=>'Tên loại tin cần nhỏ hơn 100 ký tự',
    			'ten.unique'=>'Tên loại tin đã trùng',
    			'idtheloai'=>'Chưa chọn thể loại'
    		]
    		);
    	$loaitin= new LoaiTin;
    	$loaitin->ten=$req->ten;
    	$loaitin->idtheloai=$req->idtheloai;
    	$loaitin->tenkhongdau=changeTitle($req->ten);
    	$loaitin->save();
		return redirect('admin/loaitin/danhsach')->with('thongbao','Thêm loại tin thành công');
    }
    public function postsua(Request $req,$id)
    {
    	$this->validate($req,
    		[
    			'ten'=>'required|min:3|max:100',
    			'idtheloai'=>'required'
    		],
    		[
    			'ten.required'=>'Tên loại tin là bắt buộc',
    			'ten.min'=>'Tên loại tin cần lớn hơn 3 ký tự',
    			'ten.max'=>'Tên loại tin cần nhỏ hơn 100 ký tự',    			
    			'idtheloai'=>'Chưa chọn thể loại'
    		]
    		);
    	$loaitin= LoaiTin::find($id);
    	$loaitin->ten=$req->ten;
    	$loaitin->idtheloai=$req->idtheloai;
    	$loaitin->tenkhongdau=changeTitle($req->ten);
    	$loaitin->save();
		return redirect('admin/loaitin/danhsach')->with('thongbao','Sửa loại tin thành công');
    } 
}
