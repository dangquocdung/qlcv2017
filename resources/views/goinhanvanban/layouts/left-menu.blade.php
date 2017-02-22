<div class="col-md-3">

  <div class="list-group">
    <a  class="list-group-item active main-color-bg" href="{{ route('tao-moi-van-ban') }}">
      <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Tạo mới văn bản
    </a>
  </div>

  <div class="list-group">
    <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#vanBanDi">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Văn Bản Đi
    </a>
    <div id="vanBanDi" class="panel-collapse collapse in">
      <a class="bg-info list-group-item" href=" {{ route('van-ban-cho-goi') }}">
        <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Văn bản đi chờ gửi <span class="badge">0</span>
      </a>

      <a class="bg-danger list-group-item" href="/van-ban-di-da-gui">
        <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Văn bản đi đã gửi <span class="badge">0</span>
      </a>

      <a class="bg-warning list-group-item" href="/van-ban-di-trong-ngay">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Văn bản đi trong ngày <span class="badge">0</span>
      </a>

      <a class="bg-warning list-group-item" href="/van-ban-di-trong-thang">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Văn bản đi trong tháng <span class="badge">0</span>
      </a>

      <a class="bg-warning list-group-item" href="/tat-ca-van-ban-di">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Tất cả Văn bản đi <span class="badge">0</span>
      </a>

    </div>
  </div>

  <div class="list-group">
    <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#vanBanDen">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Văn Bản Đến
    </a>
    <div id="vanBanDen" class="panel-collapse collapse in">
      <a class="bg-info list-group-item" href="/van-ban-den-cho-gui">
        <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Văn bản đến chưa đọc <span class="badge">0</span>
      </a>

      <a class="bg-danger list-group-item" href="/van-ban-den-da-gui">
        <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Văn bản đến đã đọc <span class="badge">0</span>
      </a>

      <a class="bg-warning list-group-item" href="/van-ban-den-trong-ngay">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Văn bản đến trong ngày <span class="badge">0</span>
      </a>

      <a class="bg-warning list-group-item" href="/van-ban-den-trong-thang">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Văn bản đến trong tháng <span class="badge">0</span>
      </a>

      <a class="bg-warning list-group-item" href="/tat-ca-van-ban-den">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Tất cả Văn bản đến <span class="badge">0</span>
      </a>

    </div>
  </div>



</div>
