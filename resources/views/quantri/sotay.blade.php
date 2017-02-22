@extends('quantri.layouts.app')



@section('content')
<div class="container">
    <div class="row">
      <div class="list-group">

              <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#themGhiChu">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Thêm ghi chú
              </a>

              <div id="themGhiChu" class="panel-collapse collapse">
                <div class="panel-body">

                  <form action="{{ route('them-ghi-chu') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <div class="form-group">
                      <label>Tiêu đề</label>
                      <input type="text" class="form-control" name="tieude" placeholder="Tiêu đề ghi chú" required="" autofocus="" />
                    </div>

                    <div class="form-group">
                      <label>Địa điểm</label>
                      <input type="text" class="form-control" name="diadiem" placeholder="Địa điểm"/>
                    </div>

                    <div class="form-group">
                      <label>Nội dung</label>
                      <textarea class="form-control" name="noidung" rows="5"required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Tệp đính kèm</label>
                        <input type="file" name="tepdinhkem"/>
                    </div>

                    <div class="modal-footer">
                      <button type="reset" class="btn btn-default" data-dismiss="modal">Hủy</button>
                      <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                  </form>
                </div>
              </div>

      </div>









        <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Danh sách ghi chú</h3>
          </div>

          <!-- Latest Users -->

          <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <tr>
                  <th>Người tạo</th>
                  <th>Tiêu đề</th>
                  <th>Địa điểm</th>
                  <th><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></th>
                  <th>Thời gian tạo</th>
                  <th>Thời gian sửa</th>
                  <th></th>
                </tr>

                @foreach ($ghichu as $gc)
                  <tr>
                    <td>{{ $gc->user->name }}</td>
                    <td data-toggle="collapse" data-parent="#accordion" href="#noiDung{{$gc->id}}"><span class="caret"></span> <strong>{{$gc->tieude}}</strong></td>
                    <td>{{$gc->diadiem}}</td>

                    <td>
                      @if (strlen(trim($gc->tepdinhkem)) > 4)
                      <a href="/upload/sotay/{{$gc->tepdinhkem}}"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></a>

                      @endif
                    </td>

                    <td>{{$gc->created_at}}</td>
                    <td>{{$gc->updated_at}}</td>
                    <td>
                      <form action="{{ route('delete-ghi-chu', ['id' => $gc->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                          <!-- <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ghichu{{$gc->id}}">Edit</button> -->
                          <button onclick="return confirm('Bạn muốn xóa ghi chú này?')" type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>

                  <tr id="noiDung{{$gc->id}}" class="info panel-collapse collapse">
                      <td colspan="6">{!! $gc->noidung !!}</td>
                  </tr>


                  <div class="modal fade" id="ghichu{{$gc->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form action="adminstrap/so-tay-ca-nhan/sua-ghi-chu/{{$gc->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Sửa Ghi chú</h4>
                            </div>
                            <div class="modal-body">

                              <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text" class="form-control" name="tieude" value="{{ $gc->tieude }}"required="" />
                              </div>

                              <div class="form-group">
                                <label>Địa điểm</label>
                                <input type="text" class="form-control" name="diadiem" value="{{ $gc->diadiem }}" />
                              </div>

                              <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" name="noidungedit" rows="5" required autofocus="">{!! $gc->noidung !!}</textarea>
                              </div>

                              <div class="form-group">
                                  <label>Tệp đính kèm</label>
                                  <input type="file" name="tepdinhkem"/>
                                  <br>
                                  <span class="glyphicon glyphicon-paperclip"></span><a href="/upload/sotay/{{$gc->tepdinhkem}}">  {{$gc->tepdinhkem}}</a>
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


                @endforeach



            </table>
          </div>

        </div>
      </div>




    </div>
</div>

<script>
   CKEDITOR.replace( 'noidung' );
   CKEDITOR.replace( 'noidungedit' );
</script>
@endsection
