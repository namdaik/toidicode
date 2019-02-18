<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
class TheLoaiController extends Controller
{
    public function getdanhsach()
    {
    	$theloai = Theloai::all();
    	return view('admin.Theloai.hienthi',['theloai'=>$theloai]);
    }
    public function getthem()
    {
    	return view('admin.Theloai.them');
    }
    public function getsua($id)
    {
    	$theloai=TheLoai::find($id);
    	return view('admin.Theloai.sua',['theloai'=>$theloai]);
    }
    public function getxoa($id)
    {
    	$theloai=TheLoai::find($id);
    	$theloai->delete();
    	return redirect('admin/theloai/danhsach')->with('thongbao','xóa thành công');
    }
    public function postthem(Request $req)
    {
    	$this->validate($req,
    		[
    			'Ten'=>'required|min:3|max:100|unique:The_loais,Ten'
    		],
    		[
    			'Ten.required'=>'Tên thể loại là bắt buộc',
    			'Ten.min'=>'Tên thể loại cần lớn hơn 3 ký tự',
    			'Ten.max'=>'Tên thể loại cần nhỏ hơn 100 ký tự',
    			'Ten.unique'=>'Tên thể loại đã trùng'
    		]
    		);
    	$theloai= new Theloai;
    	$theloai->Ten=$req->Ten;
    	$theloai->TenKhongDau=changeTitle($req->Ten);
    	$theloai->save();
		return redirect('admin/theloai/danhsach')->with('thongbao','Thêm thể loại thành công');
    }
    public function postsua(Request $req,$id)
    {
    	$this->validate($req,
    		[
    			'Ten'=>'required|min:3|max:100|unique:The_loais,Ten'
    		],
    		[
    			'Ten.required'=>'Tên thể loại là bắt buộc',
    			'Ten.min'=>'Tên thể loại cần lớn hơn 3 ký tự',
    			'Ten.max'=>'Tên thể loại cần nhỏ hơn 100 ký tự',
    			'Ten.unique'=>'Tên thể loại đã trùng'
    		]
    		);
    	$theloai= Theloai::find($id);
    	$theloai->Ten=$req->Ten;
    	$theloai->TenKhongDau=changeTitle($req->Ten);
    	$theloai->save();
		return redirect('admin/theloai/danhsach')->with('thongbao','Sửa thể loại thành công');
    } 
}
