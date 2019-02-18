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
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                   <th>Id</th>
                  <th>Tên</th>
                  <th>Tên Không dấu</th>                 
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                @foreach($theloai as $tl)
                <tr>
                  <td class="text-center">{{$i++}}</td>
                  <td>{{$tl->id}}</td>
                  <td>{{$tl->ten}}</td>
                  <td>{{$tl->tenkhongdau}}</td>
                   <td class="td-actions text-right">
                    <button type="button" rel="tooltip" class="btn btn-info">
                      <a href="them"><i class="material-icons">add</i></a>
                    </button>
                    <button type="button" rel="tooltip" class="btn btn-success">
                      <a href="sua/{{$tl->id}}"><i class="material-icons">edit</i></a>
                    </button>
                    <button type="button" onclick="fdelete({{$tl->id}});" rel="tooltip" class="btn btn-danger">
                      <i class="material-icons">close</i>
                    </button>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
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