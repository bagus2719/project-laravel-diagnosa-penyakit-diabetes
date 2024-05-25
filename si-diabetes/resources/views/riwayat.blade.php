<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GLUCOTEST | Diagnosa Diabetes</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('style/vendors/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/vendors/ti-icons/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/vendors/css/vendor.bundle.base.css') }}" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('style/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('style/js/select.dataTables.min.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('style/css/vertical-layout-light/style.css') }}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('style/images/icons-glucometer-24(-ldpi).png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- admin/navbar -->
        @include('admin/navbar')
        <div class="container-fluid page-body-wrapper">
            <!-- admin/settings-panel -->
            @include('admin/settings-panel')
            <!-- admin/sidebar -->
            @include('admin/sidebar')
            <!-- partial -->
            <div class="main-panel">
                <!-- admin/main -->

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">DATA RIWAYAT</h4>
                            <button type="button" class="btn btn-primary mt-3" data-toggle="modal"
                                data-target="#modal">Tambah</button>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Pasien</th>
                                            <th>ID Penyakit</th>
                                            <th>ID Hasil</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($riwayat as $riwayats)
                                        <tr>
                                            <td>{{ $riwayats->id_pasien }}</td>
                                            <td>{{ $riwayats->id_penyakit }}</td>
                                            <td>{{ $riwayats->id_hasil }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success m-sm-1 edit-riwayat-btn"
                                                    data-toggle="modal" data-target="#modal-edit"
                                                    data-id-riwayat="{{ $riwayats->id_riwayat }}">Edit</button>
                                                <form action="{{ route('hapus-riwayat', $riwayats->id_riwayat) }}"
                                                    method="POST" id="form-delete-{{ $riwayats->id_riwayat }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger m-sm-1 delete-riwayat-btn">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
                @include('admin/footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- Modal -->
    <!-- Modal for adding data -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-label">Tambah Data Riwayat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for adding data -->
                    <form class="forms-modal" action="{{ route('create-riwayat') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for=" id_pasien">ID Pasien</label>
                            <select class="form-control" id="id_pasien" name="id_pasien">
                                <option value="">Pilih</option>
                                @foreach($pasiens as $pasien)
                                <option value="{{ $pasien->id_pasien}}">{{ $pasien->id_pasien}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=" id_penyakit">ID Penyakit</label>
                            <select class="form-control" id="id_penyakit" name="id_penyakit">
                                <option value="">Pilih</option>
                                @foreach($penyakits as $penyakit)
                                <option value="{{ $penyakit->id_penyakit}}">{{ $penyakit->id_penyakit}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=" id_hasil">ID Hasil</label>
                            <select class="form-control" id="id_hasil" name="id_hasil">
                                <option value="">Pilih</option>
                                @foreach($hasils as $hasil)
                                <option value="{{ $hasil->id_hasil}}">{{ $hasil->id_hasil}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for editing data -->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-edit-label">Edit Data Rule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing data -->
                    @foreach ($riwayat as $riwayats)
                    <form id="edit-riwayat-form" action="{{route('update-riwayat', $riwayats->id_riwayat)}}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for=" id_pasien">ID Pasien</label>
                            <select class="form-control" id="id_pasien" name="id_pasien">
                                <option value="">Pilih</option>
                                @foreach($pasiens as $pasien)
                                <option value="{{ $pasien->id_pasien}}">{{ $pasien->id_pasien}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=" id_penyakit">ID Penyakit</label>
                            <select class="form-control" id="id_penyakit" name="id_penyakit">
                                <option value="">Pilih</option>
                                @foreach($penyakits as $penyakit)
                                <option value="{{ $penyakit->id_penyakit}}">{{ $penyakit->nama_penyakit}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=" id_penyakit">ID Hasil</label>
                            <select class="form-control" id="id_penyakit" name="id_penyakit">
                                <option value="">Pilih</option>
                                @foreach($hasils as $hasil)
                                <option value="{{ $hasil->id_hasil}}">{{ $hasil->hasil}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    <!-- endinject -->
    <script src="{{ asset('style/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- Plugin js for this page -->
    <script src="{{ asset('style/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('style/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('style/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('style/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('style/js/off-canvas.js') }}"></script>
    <script src="{{ asset('style/js/template.js') }}"></script>
    <script src="{{ asset('style/js/settings.js') }}"></script>
    <script src="{{ asset('style/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('style/js/Chart.roundedBarCharts.js') }}"></script>
    <script src="{{ asset('style/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    <script>
    $(document).ready(function() {
        $('.delete-riwayat-btn').click(function(event) {
            event.preventDefault();
            var form = $(this).closest('form');
            var id = form.attr('id').replace('form-delete-', '');
            // Confirm deletion and then submit the form
            if (confirm("Are you sure you want to delete this item?")) {
                form.submit();
            }
        });
    });
    </script>
</body>

</html>