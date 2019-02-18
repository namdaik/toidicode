<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\TheLoai;
use App\LoaiTin;

class TinTucController extends Controller
{
   public function getdanhsach()
    {	
    	$tintuc = TinTuc::paginate(20);  
    	return view('admin.TinTuc.hienthi',['tintuc'=>$tintuc]);
    }
    public function getthem()
    {	 
    	$theloai = TheLoai::all();
    	$loaitin = LoaiTin::all();    	
    	return view('admin.TinTuc.them',['loaitin'=>$loaitin,'theloai'=>$theloai]);
    }
    public function getsua($id)
    {
    	$tintuc = TinTuc::find($id);  
    	$theloai = TheLoai::all();
    	$loaitin = LoaiTin::all();    	
    	return view('admin.TinTuc.sua',['tintuc'=>$tintuc,'loaitin'=>$loaitin,'theloai'=>$theloai]);
    }
    public function getxoa($id)
    {
    	$tintuc=TinTuc::find($id);
    	$tintuc->delete();
    	return redirect('admin/TinTuc/danhsach')->with('thongbao','xóa thành công');
    }
    public function postthem(Request $req)
    {
    	$this->validate($req,
    		[
    			'tieude'=>'required|min:3|max:1000',
    			'tomtat'=>'required',
    			'idtheloai'=>'required',
    			'idloaitin'=>'required',
    			'noidung'=>'required'
    		],
    		[
    			'tieude.required'=>'Tên loại tin là bắt buộc',
    			'tieude.min'=>'Tên loại tin cần lớn hơn 3 ký tự',
    			'tieude.max'=>'Tên loại tin cần nhỏ hơn 1000 ký tự',    			
    			'idtheloai'=>'Chưa chọn thể loại',
    			'tomtat'=>'Thiếu tóm tắt',
    			'idloaitin'=>'Thiếu loại tin',
    			'noidung'=>'Chưa nhập nội dung'
    		]
    		);
    	$tintuc=new TinTuc;
    	$tintuc->TieuDe=$req->tieude;
    	$tintuc->idtheloai=$req->idtheloai;
    	$tintuc->idLoaiTin=$req->idloaitin;
    	$tintuc->tieudekhongdau=changeTitle($req->tieude);
    	$tintuc->NoiBat=0;
    	if($req->noibat=='on')
    	$tintuc->NoiBat=1;
    	
    	$tintuc->TomTat=$req->tomtat;
    	$tintuc->NoiDung=$req->noidung;
    	$tintuc->LuotXem=0;
    	if($req->hasFile('hinh'))
    	{
    		$tintuc->Hinh='';
    		$file=$req->file('hinh');
    		$duoi=$file->getClientOriginalExtension();
    		if($duoi!='jpg'&&$duoi!='png'&&$duoi!='jpeg')
    		{
    			return redirect('admin/tintuc/them')->with('errors','lỗi định dạng ảnh');
    		}
    		$name=$file->getClientOriginalName();
    		$hinh=str_random(4)."_".$name;
    		while(file_exists("upload/tintuc/".$hinh))
    		{
    			$hinh=str_random(4)."_".$name;
    		}
    		$file->move("upload/tintuc",$hinh);
    		//unlink("upload/tintuc/".$req->hinh);
    		$tintuc->Hinh=$hinh;
    	}
    	$tintuc->save();
		return redirect('admin/tintuc/danhsach')->with('thongbao','Thêm loại tin thành công');
    }
    public function postsua(Request $req,$id)
    {
    	$this->validate($req,
    		[
    			'tieude'=>'required|min:3|max:1000',
    			'tomtat'=>'required',
    			'idtheloai'=>'required',
    			'idloaitin'=>'required',
    			'noidung'=>'required'
    		],
    		[
    			'tieude.required'=>'Tên loại tin là bắt buộc',
    			'tieude.min'=>'Tên loại tin cần lớn hơn 3 ký tự',
    			'tieude.max'=>'Tên loại tin cần nhỏ hơn 1000 ký tự',    			
    			'idtheloai'=>'Chưa chọn thể loại',
    			'tomtat'=>'Thiếu tóm tắt',
    			'idloaitin'=>'Thiếu loại tin',
    			'noidung'=>'Chưa nhập nội dung'
    		]
    		);
    	$tintuc= TinTuc::find($id);
    	$tintuc->TieuDe=$req->tieude;
    	$tintuc->idtheloai=$req->idtheloai;
    	$tintuc->idLoaiTin=$req->idloaitin;
    	$tintuc->tieudekhongdau=changeTitle($req->tieude);
    	if($req->noibat=='on')
    	$tintuc->NoiBat=1;
    	$tintuc->NoiBat=0;
    	$tintuc->NoiDung=$req->noidung;
    	$tintuc->TomTat=$req->tomtat;
    	if($req->hasFile('hinh'))
    	{
    		
    		$file=$req->file('hinh');
    		$duoi=$file->getClientOriginalExtension();
    		if($duoi!='jpg'&&$duoi!='png'&&$duoi!='jpeg')
    		{
    			return redirect('admin/tintuc/them')->with('errors','lỗi định dạng ảnh');
    		}
    		$name=$file->getClientOriginalName();
    		$hinh=str_random(4)."_".$name;
    		while(file_exists("upload/tintuc/".$hinh))
    		{
    			$hinh=str_random(4)."_".$name;
    		}
    		$file->move("upload/tintuc",$hinh);
    		unlink("upload/tintuc/".$tintuc->Hinh);
    		$tintuc->Hinh=$hinh;
    	}
    	$tintuc->save();
		return redirect('admin/tintuc/danhsach')->with('thongbao','Sửa loại tin thành công');
    } 
    public function getloaitin($id)
    {
    	$loaitin=LoaiTin::where('idtheloai','=',$id)->get();
    	foreach ($loaitin as $lt) {

           echo "<option value='".$lt->id."'>".$lt->Ten."</option>";
        }
    }
}
