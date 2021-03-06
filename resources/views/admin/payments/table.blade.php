<table class="table table-responsive table-striped table-bordered" id="payments-table" width="100%">
    <thead>
     <tr>
        <th>Booking Id</th>
        <th>Booking Code</th>
        <th>Payment</th>
        <th>Payment Date</th>
        <th>Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($payments as $payment)
        <tr>
            <td>{!! $payment->booking_id !!}</td>
            <td>{!! $payment->booking_code !!}</td>
            <td>{!! $payment->payment !!}</td>
            <td>{!! $payment->payment_date !!}</td>
            <td>
                 <a href="{{ route('admin.payments.show', collect($payment)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view payment"></i>
                 </a>
                 <a href="{{ route('admin.payments.edit', collect($payment)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit payment"></i>
                 </a>
                 <a href="{{ route('admin.payments.confirm-delete', collect($payment)->first() ) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete payment"></i>
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
    {{--Export buttons of the dataTables Start--}}
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" ></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" ></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" ></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js" ></script>
    {{--Export buttons of the dataTables End--}}

    <script>
        $('#payments-table').DataTable({
                      responsive: true,
                      pageLength: 10,
            // export buttons start
            {{--dom: 'Bfrtip',--}}
            {{--buttons: [--}}
                {{--'copy', 'csv', 'excel', 'pdf', 'print'--}}
            {{--]// export buttons end--}}
                  });
                  $('#payments-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
       </script>


@stop