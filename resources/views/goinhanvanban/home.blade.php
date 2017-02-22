@extends('goinhanvanban.layouts.app')



@section('content')
<div class="container">
    <div class="row">
      @include('goinhanvanban.layouts.left-menu')
      <div class="col-md-9">

        <div class="panel panel-default">
            <div class="panel-heading">5 Văn bản mới đăng</div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>#</th>
                    <th>Số / Kí hiệu</th>
                    <th>Ngày kí</th>
                    <th>Người kí</th>
                    <th>Ngày ban hành</th>
                    <th>Trích yếu</th>
                    <th>Files</th>

                  </tr>
                  @php $i=1 @endphp
                  @foreach ($vanban as $vb)
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $vb->kihieu }}</td>
                    <td>{{ $vb->ngayki }}</td>
                    <td>{{ $vb->nguoiki->name }}</td>
                    <td>{{ $vb->ngaybanhanh }}</td>
                    <td>{{ $vb->trichyeu }}</td>
                    <td data-toggle="collapse" data-parent="#accordion" href="#vanban{{$vb->id}}">
                      <span class="glyphicon glyphicon-paperclip" aria-hidden="true">
                    </td>
                    
                  </tr>

                  <tr id="vanban{{$vb->id}}" class="panel-collapse collapse">
                    <td></td>
                    <td colspan="7">
                      @foreach ($filevb as $fvb)
                        @if ($fvb->vanban_id == $vb->id )
                          <a href="/upload/filevb/{{ $fvb->filevb }}">{{ substr($fvb->filevb,5,strlen($fvb->filevb)-5) }}</a><br>
                        @endif
                      @endforeach
                    </td>
                  </tr>

                  @php $i++ @endphp
                  @endforeach
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
