@extends('admin.layout.index')
@section('content')
<div class="content">
<div class="container-fluid">
  <div class="row">
     @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
    @endif
 <div class="col-md-12">
      <form id="TypeValidation" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">Thêm Tin tức</h4>
            </div>
          </div>
          <div class="card-body ">
            <div class="row">
              <label class="col-sm-2 col-form-label">Tiêu đề</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control" type="text" name="tieude" required="true" />
                </div>
              </div>
              <label class="col-sm-3 label-on-right">
                <code>required</code>
              </label>
            </div>
             <div class="row">
              <label class="col-sm-2 col-form-label">Thể loại</label>
            <div class="col-lg-5 col-md-6 col-sm-3">
                  <select   onchange="getloaitin()" id="theloai" name="idtheloai" class="selectpicker" data-style="select-with-transition" title="Chọn thể loại" data-size="7">
                    @foreach($theloai as $tl)
                    <option value="{{$tl->id}}">{{$tl->ten}} </option>
                    @endforeach                
                  </select>
                </div>
          </div>
           <div class="row">
              <label class="col-sm-2 col-form-label">Loại tin</label>
            <div class="col-lg-5 col-md-6 col-sm-3">
                  <select id='loaitin' name="idloaitin" class="form-control"  title="Chọn Loại tin" data-size="7">
                    @foreach($loaitin as $lt)
                    <option value="{{$lt->id}}">{{$lt->ten}} </option>
                    @endforeach                
                  </select>
                </div>
          </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Tóm tắt</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <textarea name="tomtat" rows="4"  class="form-control">
                    
                  </textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Nội dung</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <textarea  name="noidung" rows="6"  class="form-control">
                    
                  </textarea>
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-2 col-sm-2 col-form-label">
              <h4 class="title">Hình ảnh</h4>
            </div>
            <div class="col-md-8 col-sm-8">
              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail">
                  <img src="https://demos.creative-tim.com/material-dashboard-pro/assets/img/image_placeholder.jpg" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                <div>
                  <span class="btn btn-rose btn-round btn-file">
                    <span class="fileinput-new">Chọn Hình</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="hinh" />
                  </span>
                  <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-3 col-form-label">
              <h4 class="title">Nổi bật</h4>
              <div class="togglebutton">
                <label>
                  <input name='noibat' type="checkbox" checked="">
                  <span class="toggle"></span>
                  Có nổi bật
                </label>
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

@section('js')
<script type="text/javascript">

    function getloaitin()
    {
    var idtheloai=$('#theloai').val();
    $.get('admin/ajax/loaitin/'+idtheloai,function(data)
    {
      $('#loaitin').html(data);
    });
  }
</script>
@endsection