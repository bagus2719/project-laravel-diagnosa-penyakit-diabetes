<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GLUCOTEST | Diagnosa Diabetes</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('style/vendors/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/vendors/ti-icons/css/themify-icons.cs') }}s" />
    <link rel="stylesheet" href="{{asset(' style/vendors/css/vendor.bundle.base.css') }}" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('style/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}/">
    <link rel="stylesheet" href="{{ asset('style/vendors/ti-icons/css/themify-icons.css') }}" />
    <link rel="stylesheet" type="{{ asset('style/text/css" href="js/select.dataTables.min.css') }}" />
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
            <!-- admmin/settings-panel -->
            @include('admin/settings-panel')
            <!-- admin/sidebar -->
            @include('admin/sidebar')
            <!-- partial -->
            <div class="main-panel">
                <!-- admin/main -->
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">DATA PASIEN</h4>
                            <button type="button" class="btn btn-primary mt-3" data-toggle="modal"
                                data-target="#modal">Tambah</button>
                            <a href="pasien/cetak-pasien"><button class="btn btn-info btn-icon-text mt-3">Cetak
                                    <i class="ti-printer btn-icon-append"></i></button></a>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pasien as $p)
                                        <tr>
                                            <td>{{ $p->id_user }}</td>
                                            <td>{{ $p->nama_pasien }}</td>
                                            <td>{{ $p->jenis_kelamin }}</td>
                                            <td>{{ $p->tanggal_lahir }}</td>
                                            <td>{{ $p->alamat }}</td>
                                            <td>{{ $p->no_telp }}</td>
                                            <td>{{ $p->keterangan }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success m-sm-1 edit-pasiens-btn"
                                                    data-toggle="modal" data-target="#modal-edit"
                                                    data-id="{{ $p->id }}">Edit</button>
                                                <form action="{{ route('hapus-pasien', $p->id_pasien) }}" method="POST"
                                                    id="form-delete-{{ $p->id_pasien }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger m-sm-1 delete-pasiens-btn">Hapus</button>
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
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-label">Tambah pasien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form goes here -->
                    <form class="forms-modal" method="POST" action="{{ route('create-pasien')}}">
                        @csrf
                        <div class="form-group">
                            <label for=" id_user">ID User</label>
                            <select class="form-control" id="id_user" name="id_user">
                                <option value="">Pilih</option>
                                @foreach($users as $user)
                                <option value="{{ $user->id_user}}">{{ $user->id_user}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama_pasien" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="Laki-Laki">
                                    Pilih
                                </option>
                                <option value="Laki-Laki">
                                    Laki-laki
                                </option>
                                <option value="Perempuan">
                                    Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No. Telp</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telp">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                placeholder="Keterangan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-label">Edit Pasien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach($pasien as $p)
                    <form class="forms-modal" method="POST" action="{{ route('update-pasien', $p->id_pasien) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_user">ID User</label>
                            <select class="form-control" id="id_user" name="id_user">
                                <option value="">Pilih</option>
                                @foreach($users as $user)
                                <option value="{{ $user->id_user }}"
                                    {{ $user->id_user == $p->id_user ? 'selected' : '' }}>
                                    {{ $user->id_user }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama_pasien" placeholder="Nama"
                                value="{{ $p->nama_pasien }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="Laki-Laki" {{ $p->jenis_kelamin === 'Laki-Laki' ? 'selected' : '' }}>
                                    Laki-Laki
                                </option>
                                <option value="Perempuan" {{ $p->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                placeholder="Tanggal Lahir" value="{{ $p->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"
                                value="{{ $p->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No. Telp</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telp"
                                value="{{ $p->no_telp }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                placeholder="Keterangan" value="{{ $p->keterangan }}">
                        </div>
                        <input type="hidden" name="pasien_id" value="{{ $p->id }}">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    <!-- endinject -->
    <script src="{{ asset('style/vendors/js/vendor.bundle.base.js')}} "></script>
    <!-- Plugin js for this page -->
    <script src="{{ asset('style/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('style/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}">
    </script>
    <script src="{{ asset('style/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('style/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('style/js/off-canvas.js') }}"></script>
    <script src="{{ asset('style/js/template.js') }}"></script>
    <script src="{{ asset('style/js/settings.js') }}"></script>
    <script src="{{ asset('style/as/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('style/js/Chart.roundedBarCharts.js') }}"></script>
    <script src="{{ asset('style/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    <script>
    $(document).ready(function() {
        $('.delete-pasiens-btn').click(function(event) {
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