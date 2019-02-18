@extends('admin.layout.index')
@section('content')
<div class="content">
<div class="container-fluid">
  <div class="row">
    @if(count(($errors)))
        @foreach($errors->all() as $er)
          <div class="alert alert-danger">{{$er}}</div>
        @endforeach
    @endif
 <div class="col-md-12">
      <form id="TypeValidation" class="form-horizontal" action="" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">Thêm user</h4>
            </div>
          </div>
          <div class="card-body ">
            <div class="row">
              <label class="col-sm-2 col-form-label">Tên tài khoản</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control" type="text" name="name" required="true" />
                </div>
              </div>
              <label class="col-sm-3 label-on-right">
                <code>required</code>
              </label>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control" type="email" name="email" required="true" />
                </div>
              </div>
              <label class="col-sm-3 label-on-right">
                <code>required</code>
              </label>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control" type="text" name="password" required="true" />
                </div>
              </div>
              <label class="col-sm-3 label-on-right">
                <code>required</code>
              </label>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Re-Password</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control" type="text" name="repassword" required="true" />
                </div>
              </div>
              <label class="col-sm-3 label-on-right">
                <code>required</code>
              </label>
            </div>

            <div class="row">
            <div class="col-md-3 col-sm-3 col-form-label">
              <h4 class="title">Quyền admin</h4>
              <div class="togglebutton">
                <label>
                  <input name='quyen' type="checkbox" checked="">
                  <span class="toggle"></span>
                  là admin
                </label>
              </div>              
          </div>
          </div>
        </div>
          
          <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-rose">Thêm</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection