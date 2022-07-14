@extends('admin.master')

@section('css')
      <link rel="stylesheet" href="{{ asset('adminAssets/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
      <div class="row">

            <div class="col-md-12">
                  <div class="card">
                        <div class="card-header">
                              <strong class="card-title">Data Table</strong>
                              <a href="{{ route('payment.create') }}" class="btn btn-primary">Create</a>
                        </div>
                        <div class="card-body">
                              <div id="bootstrap-data-table_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                          <div class="col-sm-12">
                                                <table id="bootstrap-data-table"
                                                      class="table table-striped table-bordered dataTable no-footer"
                                                      role="grid" aria-describedby="bootstrap-data-table_info">
                                                      <thead>
                                                            <tr role="row">
                                                                  <th class="sorting_asc" tabindex="0"
                                                                        aria-controls="bootstrap-data-table" rowspan="1"
                                                                        colspan="1" style="width: 205px;"
                                                                        aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        #</th>
                                                                  <th class="sorting_asc" tabindex="0"
                                                                        aria-controls="bootstrap-data-table" rowspan="1"
                                                                        colspan="1" style="width: 205px;"
                                                                        aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        student</th>
                                                                  <th class="sorting" tabindex="0"
                                                                        aria-controls="bootstrap-data-table" rowspan="1"
                                                                        colspan="1" style="width: 332px;"
                                                                        aria-label="Position: activate to sort column ascending">
                                                                        payed</th>
                                                                  <th class="sorting" tabindex="0"
                                                                        aria-controls="bootstrap-data-table" rowspan="1"
                                                                        colspan="1" style="width: 148px;"
                                                                        aria-label="Office: activate to sort column ascending">
                                                                        month</th>
                                                                  
                                                                  <th class="sorting" tabindex="0"
                                                                        aria-controls="bootstrap-data-table" rowspan="1"
                                                                        colspan="1" style="width: 122px;"
                                                                        aria-label="Salary: activate to sort column ascending">
                                                                        note</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            @foreach ($payments as $index => $payment)
                                                                  <tr role="row" class="odd">
                                                                        <td class="sorting_1">{{ ++$index }}</td>
                                                                        <td>{{ $payment->student_id }}</td>
                                                                        <td>{{ $payment->payed }}</td>
                                                                        <td>{{ $payment->month }}</td>
                                                                        
                                                                        <td>{{ $payment->note }}</td>
                                                                  </tr>
                                                            @endforeach
                                                      </tbody>
                                                </table>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>


      </div>
@endsection


@section('javascript')
      <script src="{{ asset('adminAssets/assets/js/lib/data-table/datatables.min.js') }}"></script>
      <script src="{{ asset('adminAssets/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
      <script src="{{ asset('adminAssets/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
      <script src="{{ asset('adminAssets/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
      <script src="{{ asset('adminAssets/assets/js/lib/data-table/jszip.min.js') }}"></script>
      <script src="{{ asset('adminAssets/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
      <script src="{{ asset('adminAssets/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
      <script src="{{ asset('adminAssets/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
      <script src="{{ asset('adminAssets/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
      <script src="{{ asset('adminAssets/assets/js/init/datatables-init.js') }}"></script>


      <script type="text/javascript">
            $(document).ready(function() {
                  $('#bootstrap-data-table-export').DataTable();
            });
      </script>
@endsection
