<div class="col-md-3">

  <div class="list-group">
    <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#quantriUsers">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Danh sách Quyền hạn
    </a>
    <div id="quantriUsers" class="panel-collapse collapse">

      <div class="list-group">
        <a  class="list-group-item active main-color-bg" href="{{ route('so-tay') }}">
          <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Sổ tay ghi chú
        </a>
      </div>

      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <tr>
              <th>#</th>
              <th>Quyền hạn</th>

            </tr>
            @foreach ($quyenhan as $qh)
            <tr>
              <td>{{ $qh->id }}</td>
              <td>{{ $qh->quyenhan }}</td>
            </tr>
            @endforeach

          </table>
        </div>
      </div>




    </div>
  </div>




</div>
