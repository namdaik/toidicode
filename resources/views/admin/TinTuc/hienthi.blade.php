@extends('admin.layout.index')
@section('content')
<div class="content">
<div class="container-fluid">
  <div class="row">
    @if(session('thongbao'))
      <div class="alert alert success">{{session('thongbao')}}</div>
    @endif
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Simple Table</h4>
        </div>
        <div class="card-body">
          <div class="text-right">
                    <button type="button" class="btn btn-info">
                      <a href="admin/tintuc/them">Thêm</a>
                    </button>
          </div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                        <th>Tiêu đề</th>
                        {{-- <th>Tiêu đề không dấu</th> --}}
                        {{-- <th>Tóm tắt</th> --}}
                        <th>Nổi bật</th>
                        <th>Lượt xem</th>
                        <th>Thể loại</th>              
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                @foreach($tintuc as $tt)
                <tr>
                  <td class="text-center">{{$i++}}</td>
                        <td>{{$tt->tieude}}</td>
                        {{-- <td>{{$tt->tieudekhongdau}}</td> --}}
                        {{-- <td>{{$tt->tomtat}}</td> --}}
                       {{--  <td><img src="upload/tintuc/{{$tt->hinh}}"></td> --}}
                        <td>{{$tt->noibat}}</td>
                        <td>{{$tt->luotxem}}</td>
                        <td>{{$tt->loaitin->theloai->ten}} - {{$tt->loaitin->ten}}</td>
                   <td class="td-actions text-right">
                    <div class="row">
                    <button type="button" style="margin: 0 2px" rel="tooltip" class="btn btn-success">
                      <a href="sua/{{$tt->id}}"><i class="material-icons">edit</i></a>
                    </button>  
                    <button type="button" onclick="fdelete({{$tt->id}});" rel="tooltip" class="btn btn-danger">
                      <i class="material-icons">close</i>
                    </button> 
                    </div>
                    

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $tintuc->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('js')
<script type="text/javascript">
  function fdelete($id) {
    var txt;
    var r = confirm("Bạn có chắc chắn muốn xóa item này");
    if (r == true) {
        window.location="xoa/"+$id;
    }
}
</script>
</script>
@endsection