<table class="table table-responsive table-striped table-bordered" id="sms-table" width="100%">
    <thead>
     <tr>
        <th>Cell No</th>
        <th>Message</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($sms as $sms)
        <tr>
            <td>{!! $sms->cell_no !!}</td>
            <td>{!! $sms->message !!}</td>
            <td>
                 <a href="{{ route('admin.sms.show', collect($sms)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view sms"></i>
                 </a>
                 <a href="{{ route('admin.sms.edit', collect($sms)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit sms"></i>
                 </a>
                 <a href="{{ route('admin.sms.confirm-delete', collect($sms)->first() ) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete sms"></i>
                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@section('footer_scripts')

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>

    <script>
        $('#sms-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#sms-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );

       </script>

@stop