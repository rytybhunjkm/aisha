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
                              <a href="{{ route('teacher.create') }}" class="btn btn-primary">Create</a>
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
                                                                        Name</th>
                                                                  <th class="sorting" tabindex="0"
                                                                        aria-controls="bootstrap-data-table" rowspan="1"
                                                                        colspan="1" style="width: 332px;"
                                                                        aria-label="Position: activate to sort column ascending">
                                                                        Position</th>
                                                                  <th class="sorting" tabindex="0"
                                                                        aria-controls="bootstrap-data-table" rowspan="1"
                                                                        colspan="1" style="width: 148px;"
                                                                        aria-label="Office: activate to sort column ascending">
                                                                        Office</th>
                                                                  <th class="sorting" tabindex="0"
                                                                        aria-controls="bootstrap-data-table" rowspan="1"
                                                                        colspan="1" style="width: 122px;"
                                                                        aria-label="Salary: activate to sort column ascending">
                                                                        Salary</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            <tr role="row" class="odd">
                                                                  <td class="sorting_1">Airi Satou</td>
                                                                  <td>Accountant</td>
                                                                  <td>Tokyo</td>
                                                                  <td>$162,700</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Angelica Ramos</td>
                                                                  <td>Chief Executive Officer (CEO)</td>
                                                                  <td>London</td>
                                                                  <td>$1,200,000</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                  <td class="sorting_1">Ashton Cox</td>
                                                                  <td>Junior Technical Author</td>
                                                                  <td>San Francisco</td>
                                                                  <td>$86,000</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Bradley Greer</td>
                                                                  <td>Software Engineer</td>
                                                                  <td>London</td>
                                                                  <td>$132,000</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                  <td class="sorting_1">Brenden Wagner</td>
                                                                  <td>Software Engineer</td>
                                                                  <td>San Francisco</td>
                                                                  <td>$206,850</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Brielle Williamson</td>
                                                                  <td>Integration Specialist</td>
                                                                  <td>New York</td>
                                                                  <td>$372,000</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                  <td class="sorting_1">Bruno Nash</td>
                                                                  <td>Software Engineer</td>
                                                                  <td>London</td>
                                                                  <td>$163,500</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Caesar Vance</td>
                                                                  <td>Pre-Sales Support</td>
                                                                  <td>New York</td>
                                                                  <td>$106,450</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                  <td class="sorting_1">Cara Stevens</td>
                                                                  <td>Sales Assistant</td>
                                                                  <td>New York</td>
                                                                  <td>$145,600</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                  <td class="sorting_1">Cedric Kelly</td>
                                                                  <td>Senior Javascript Developer</td>
                                                                  <td>Edinburgh</td>
                                                                  <td>$433,060</td>
                                                            </tr>
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
