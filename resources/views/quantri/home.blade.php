@extends('quantri.layouts.app')



@section('content')
<div class="container">
    <div class="row">
      @include('quantri.layouts.left-menu')
      <div class="col-md-9">
        <div class="list-group">
          <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#quantriQuyenHan">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Quản trị Users
          </a>
          <div id="quantriQuyenHan" class="panel-collapse collapse in">

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Quyền hạn</th>
                    <th>Ngày tạo</th>
                    <th></th>
                  </tr>
                  @foreach ($nguoidung as $nd)
                  <tr>
                    <td>{{ $nd->id }}</td>
                    <td>{{ $nd->name }}</td>
                    <td>{{ $nd->email }}</td>
                    <td>{{ $nd->quyenhan->quyenhan }}</td>
                    <td>{{ $nd->created_at }}</td>
                    <td>
                      <form action="{{ route('delete-nguoi-dung', ['id' => $nd->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                          <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#user{{$nd->id}}">Edit</button>
                          <button onclick="return confirm('Bạn muốn xóa người dùng này?')" type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  <!-- Edit User -->
                  <div class="modal fade" id="user{{$nd->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form action="{{ route('cap-nhat-thong-tin-nguoi-dung', ['id' => $nd->id]) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Thông tin người dùng</h4>
                            </div>
                            <div class="modal-body">

                              <div class="form-group">
                                <label>Họ và Tên:</label>
                                <input type="text" class="form-control" name="hovaten" value="{{$nd->name}}" required>
                              </div>

                              <div class="form-group">
                                <label>Email:</label>
                                <input type="text" class="form-control" name="email" value="{{$nd->email}}" disabled="">
                              </div>

                              <div class="form-group">
                                <label>Quyền hạn:</label>
                                <select name="quyenhan_id" class="form-control">
                                  @foreach ($quyenhan as $qh)
                                    @if ($nd->quyenhan_id==$qh->id)
                                      <option value="{{$qh->id}}" selected="">{{$qh->quyenhan}}</option>
                                    @else
                                      <option value="{{$qh->id}}">{{$qh->quyenhan}}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div>

                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                              <button type="submit" class="btn btn-primary">Cập nhật</button>

                            </div>
                      </form>
                      </div>
                    </div>
                  </div>

                  <!-- End Edit User -->


                  @endforeach

                </table>
              </div>
            </div>




          </div>
        </div>


      </div>
    </div>
</div>
@endsection
