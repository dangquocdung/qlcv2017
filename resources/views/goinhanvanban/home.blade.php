@extends('goinhanvanban.layouts.app')



@section('content')
<div class="container">
    <div class="row">
      @include('goinhanvanban.layouts.left-menu')
      <div class="col-md-9">
          <div class="panel panel-default">
              <div class="panel-heading">5 Văn bản đến mới nhất</div>

              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th><input type="checkbox" name="" value=""></th>
                      <th>#</th>
                      <th>Ngày ban hành</th>
                      <th>Ngày nhận</th>
                      <th>Số / Kí hiệu</th>
                      <th>Nơi phát hành</th>
                      <th>Trích yếu</th>
                      <th>#</th>
                    </tr>

                  </table>
                </div>
              </div>
          </div>

          <div class="panel panel-default">
              <div class="panel-heading">5 Văn bản đi mới nhất</div>

              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th><input type="checkbox" name="" value=""></th>
                      <th>#</th>
                      <th>Ngày kí</th>
                      <th>Ngày gởi</th>
                      <th>Số / Kí hiệu</th>
                      <th>Người kí</th>
                      <th>Trích yếu</th>
                      <th>#</th>
                    </tr>

                  </table>
                </div>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
