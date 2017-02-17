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
                <form action="{{ route('tao-moi-van-ban')}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <div class="modal-body">

                      <div class="form-group">
                        <label>Số / Kí hiệu văn bản</label>
                        <input type="text" class="form-control" name="sovb" placeholder="Nhập Số / Kí hiệu văn bản" required="" autofocus="" />
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
                        <select name="loaivb" class="form-control" >
                          <option value="1" selected >Quyết định</option>
                          <option value="2" >Tờ trình</option>
                          <option value="3" >Công văn</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Người kí</label>
                        <select name="nguoiki" class="form-control" >
                          <option value="1" selected >Nguyễn Văn A</option>
                          <option value="2" >Trần Văn B</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Chức vụ</label>
                        <input type="text" class="form-control" disabled="" />
                      </div>

                      <div class="form-group">
                        <label>Trích yếu Văn bản</label>
                        <textarea class="form-control" name="trichyeuvb" rows="3" placeholder="Trích yếu Văn bản"></textarea>
                      </div>

                      <div class="form-group">
                          <label>File Văn bản</label>
                          <input type="file" name="filevanban" required="" />
                      </div>

                      <div class="form-group">
                        <label>Gửi đến</label>

                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#example-example-enableFiltering-optgroups').multiselect({
                                    enableFiltering: true,
                                    numberDisplayed: 12,


                                });
                            });


                        </script>
                        <div class="btn-group">
                            <select id="example-example-enableFiltering-optgroups" name="guiden[]" multiple="multiple">
                                <optgroup class="group-1" label="Group 1">
                                    <option value="1-1">Option 1.1</option>
                                    <option value="1-2">Option 1.2</option>
                                    <option value="1-3">Option 1.3</option>
                                </optgroup>

                                <optgroup class="group-2" label="Group 2">
                                    <option value="2-1">Option 2.1</option>
                                    <option value="2-2">Option 2.2</option>
                                    <option value="2-3">Option 2.3</option>
                                </optgroup>

                                <optgroup class="group-3" label="Group 3">
                                    <option value="3-1">Option 3.1</option>
                                    <option value="3-2">Option 3.2</option>
                                    <option value="3-3">Option 3.3</option>
                                </optgroup>

                                <optgroup class="group-4" label="Group 4">
                                    <option value="4-1">Option 4.1</option>
                                    <option value="4-2">Option 4.2</option>
                                    <option value="4-3">Option 4.3</option>
                                </optgroup>
                                <optgroup class="group-5" label="Group 5">
                                    <option value="5-1">Option 5.1</option>
                                    <option value="5-2">Option 5.2</option>
                                    <option value="5-3">Option 5.3</option>
                                </optgroup>
                            </select>
                        </div>



                      </div>

                      <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" name="ghichu" rows="3" placeholder="Ghi chú (nếu có)"></textarea>
                      </div>

                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Xử Lý</button>
                    </div>

                    <script type="text/javascript">
                      $(function() {
                          $('#chkveg').multiselect({
                              includeSelectAllOption: true
                          });
                      });
                    </script>
              </form>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
