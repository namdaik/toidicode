<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function getdanhsach()
    {	
    	$user = User::all();    	
    	return view('admin.User.hienthi',['user'=>$user]);
    }
    public function getthem()
    {  	
    	return view('admin.User.them');
    }
    public function getsua($id)
    {
       	$user = User::find($id);    	
    	return view('admin.User.sua',['user'=>$user]);
    }
    public function getxoa($id)
    {
    	$user=User::find($id);
    	$user->delete();
    	return redirect('admin/user/danhsach')->with('thongbao','xóa thành công');
    }
    public function postthem(Request $req)
    {
    	$this->validate($req,
    		[
    			'name'=>'required|min:3|max:100',
    			'password'=>'required|min:6|max:100|',
    			'email'=>'unique:Users,name|required|email',
    			'repassword'=>'required|same:password'
    		],
    		[
    			'name.required'=>'Tên loại tin là bắt buộc',
    			'name.min'=>'Tên loại tin cần lớn hơn 3 ký tự',
    			'name.max'=>'Tên loại tin cần nhỏ hơn 100 ký tự',
    			'name.unique'=>'Tên loại tin đã trùng'
    		]
    		);
    	$user= new User;
    	$user->name=$req->name;
    	$user->email=$req->email;
    	$user->level=0;
    	if($req->level=='on')
    	$user->level=1;
    	$user->password=bcrypt($req->password);
    	$user->save();
		return redirect('admin/user/danhsach')->with('thongbao','Thêm thành công');
    }
    public function postsua(Request $req,$id)
    {
    	$this->validate($req,
    		[
    			'name'=>'required|min:3|max:100',
    			'email'=>'unique:Users,name|required|email',
    		],
    		[
    			'name.required'=>'Tên loại tin là bắt buộc',
    			'name.min'=>'Tên loại tin cần lớn hơn 3 ký tự',
    			'name.max'=>'Tên loại tin cần nhỏ hơn 100 ký tự',
    			'name.unique'=>'Tên loại tin đã trùng',
    		]
    		);
    	$user= User::find($id);
    	$user->name=$req->name;
    	$user->email=$req->email;
    	$user->level=0;
    	if($req->level=='on')
    	$user->level=1;
    	if($req->sua=='on')
    	{
    		$this->validate($req,
    		[
    			'password'=>'required|min:6|max:100|',    			
    			'repassword'=>'required|same:password'
    		],
    		[    			
    		]
    		);
    		    	$user->password=bcrypt($req->password);
    	}

    	$user->save();
		return redirect('admin/user/danhsach')->with('thongbao','Sửa thành công');
    } 
}
