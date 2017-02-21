@extends('goinhanvanban.layouts.app')



@section('content')
<div class="container">
    <div class="row">
      @include('goinhanvanban.layouts.left-menu')
      <div class="col-md-9">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h4>Tạo mới Văn Bản</h4>
              </div>

              <div class="panel-body">
                <form action="{{ route('post-tao-moi-van-ban') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <div class="modal-body">

                      <div class="form-group">
                        <label>Số / Kí hiệu văn bản</label>
                        <input type="text" class="form-control" name="kihieu" placeholder="Nhập Số / Kí hiệu văn bản" required="" autofocus="" />
                      </div>

                      <div class="form-group">
                        <label>Ngày ban hành</label>
                        <input type="date" class="form-control" name="ngaybanhanh" value="<?php echo date('Y-m-d'); ?>" required="" />
                      </div>

                      <div class="form-group">
                        <label>Ngày kí</label>
                        <input type="date" class="form-control" name="ngayki" value="<?php echo date('Y-m-d'); ?>" required="" />
                      </div>

                      <div class="form-group">
                        <label>Loại văn bản</label>
                        <select name="loaivb_id" required class="form-control" >
                          @foreach ($loaivb as $lvb)
                          <option value="{{ $lvb->id }}">{{ $lvb->loaivb}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Người kí</label>
                        <select name="nguoiki_id" required class="form-control" >
                          @foreach ($nguoiki as $nk)
                          <option value="{{ $nk->id }}">{{ $nk->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Chức vụ</label>
                        <input type="text" class="form-control" disabled="" />
                      </div>

                      <div class="form-group">
                        <label>Trích yếu Văn bản</label>
                        <textarea class="form-control" name="trichyeu" required rows="3" placeholder="Trích yếu Văn bản"></textarea>
                      </div>

                      <div class="form-group">
                          <label>File Văn bản</label>
                          <input type="file" name="filevb[]" required multiple />
                      </div>


                      <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" name="ghichu" rows="3" placeholder="Ghi chú (nếu có)"></textarea>
                      </div>

                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Xử Lý</button>
                    </div>


              </form>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
