@extends('Layout.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12 p-5">
    <table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">NO</th>
          <th class="th-sm">IP</th>
          <th class="th-sm">Date & Time</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($VisitorData as $VisitorData)
            <tr>
                <th class="th-sm">{{$VisitorData->id}}</th>
                <th class="th-sm">{{$VisitorData->ip_address}}</th>
                <th class="th-sm">{{$VisitorData->visit_time}}</th>
            </tr>
        @endforeach
      </tbody>
    </table>
    
    </div>
    </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        // Visitor table
        $(document).ready(function() {
            $('#VisitorDt').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection