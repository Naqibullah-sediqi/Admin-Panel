@extends('layouts/CMS_master')





@section('backendFile_css')


	<link rel="stylesheet" type="text/css"
        href="{{asset('public/backend_assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
   
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend_assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">



@endsection


 
 @section('content_cms')
                                            
 <div class="row">

     <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <!--  <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->

                                <div class="text-right">

                                    <a href="{{url('register')}}" class="btn text-light font-weight-bold" style="background-color:rgb(1,192,200);"> New User</a>

                                </div>

                                <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>LASTNAME</th>
                                                <th>NIC</th>
                                                <th>EMAIL</th>
                                                <th>ROLE</th>
                                               
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                            @foreach($all_user as $user)
                                             <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->lastname}}</td>
                                                <td>{{$user->nic}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->role_name}}</td>
                                               
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                       
                        <!-- table responsive -->
                       
     </div>
 </div>






  @endsection

  @section('backendFile_js')


	<script src="{{asset('public/backend_assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/backend_assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>


    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

    </script>



  @endsection