<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\TheLoai;
use App\LoaiTin;
use App\Comment;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    public function gettrangchu()
    {
    	$tintuc=TinTuc::where('id','>',-1)->paginate(12);
    	return view('pages.trangchu',['tintuc'=>$tintuc]);
    }
    public function __construct()
    {
    	$theloai=TheLoai::all();
    	$loaitin=LoaiTin::all();
        $tintucnew= TinTuc::take(10)->get();
    	 view()->share(['theloai'=>$theloai,'loaitin'=>$loaitin,'tintucnew'=>$tintucnew]);
    }
    public function getloaitin($id)
    {
    	$loaitin= LoaiTin::find($id);
    	$tintuc=TinTuc::where('idloaitin','=',$id)->paginate(2);
    	return view('pages.loaitin',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }
    public function gettheloai($id)
    {
        $loaitin= LoaiTin::where('idtheloai','=',$id)->get();
        $theloai1= TheLoai::find($id);
       // $tintuc=TinTuc::where('idloaitin','=',$id)->paginate(2);
        
        return view('pages.theloai',['loaitin'=>$loaitin,'theloai1'=>$theloai1]);
    }
    public function gettin($tieude,$id)
    {
        $tintuc =TinTuc::find($id);
        return view('pages.tin',['tintuc'=>$tintuc]);
    }
    public function getdangnhap()
    {
        return view('pages.dangnhap');
    }
    public function postdangnhap(Request $request)
    {
        $this->validate($request,
        [
            'email'=>'required',
            'password'=>'required|min:3|max:32',
        ],
        [
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải lớn hơn 3 ký tự',
            'password.max'=>'Mật khẩu phải ít hơn 32 ký tự'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('/');
        }
        else
        {
            return redirect('dangnhap')->with('thongbao','đăng nhập không thành công');
        }
    }

    public function getdangxuat()
    {
        Auth::logout();
        return redirect('/');
    }
    public function getdangky()
    {
       // return view('pages.dangky');
    }
    public function postdangky()
    {

    }
    public function postbinhluan(Request $request,$id)
    {
        if(Auth::user())
        {
            $comment= new Comment;
            $comment->noidung=$request->noidung;
            $comment->iduser= Auth::user()->id;
            $comment->idtintuc=$id;
            $comment->save();
            $tintuc=TinTuc::find($id);
            return redirect("$tintuc->tieudekhongdau/$tintuc->id");
        }
    }
}
