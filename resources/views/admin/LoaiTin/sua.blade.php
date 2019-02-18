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
              <h4 class="card-title">Sửa Loại tin: {{$loaitin->ten}}</h4>
            </div>
          </div>
          <div class="card-body ">
            <div class="row">
              <label class="col-sm-2 col-form-label">Tên loại tin</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control" type="text" value="{{$loaitin->ten}}" name="ten" required="true" />
                </div>
              </div>
              <label class="col-sm-3 label-on-right">
                <code>required</code>
              </label>
            </div>
             <div class="row">
              <label class="col-sm-2 col-form-label">Thể loại</label>
            <div class="col-lg-5 col-md-6 col-sm-3">
                  <select name="idTheloai" class="selectpicker" data-style="select-with-transition" multiple title="Chọn thể loại" data-size="7">
                    @foreach($theloai as $tl)
                    <option value="{{$tl->id}}">{{$tl->ten}} </option>
                    @endforeach                
                  </select>
                </div>
          </div>
          </div>
          <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-rose">Sửa</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection