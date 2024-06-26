@extends('layout.template')

@section('content')
<div id="app">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- Page Title -->
                    <div class="col-sm-6">
                        <!-- <h1 class="m-0 text-dark">Siswa}</h1> -->
                    </div>
                        </div>
            </div>
        </div>          
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Master Siswa
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><span>Tambah</span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="table-siswa">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>NISN</th>   
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </head>
                                        <tbody>
                                        <?php
                                            $no=1;
                                            foreach($siswa as $data) : 
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $data->nisn ?></td>
                                                <td><?php echo $data->fullname ?></td>
                                                <td><?php echo $data->class ?></td>
                                                <td><?php echo $data->username ?></td>
                                                <td><?php echo $data->user_pass ?></td>
                                                <td>
                                                    <?php
                                                    switch ($data->role_id) {
                                                        case 1:
                                                            echo 'admin';
                                                            break;
                                                        case 2:
                                                            echo 'guru';
                                                            break;
                                                        case 3:
                                                            echo 'siswa';
                                                            break;
                                                        default:
                                                            echo 'unknown';
                                                            break;
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $data->status == 1 ? 'aktif' : 'tidak aktif'; ?></td>
                                                <td></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action=" "method="POST">
                @csrf
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <ul>

                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="class" placeholder="Kelas">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" class="form-control" name="nisn" placeholder="Nomor Induk Siswa Nasional">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="user_pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class=form-control" name="role">
                                    <option value="">Pilih Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Guru</option>
                                    <option value="3">Siswa</option>     
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>          
    </div> 
</div> 
@endsection
@push('scripts')
<script type="text/javascript">
    @if ($errors->any())
        $('#modal-lg').modal('show');
    @endif
</script>
@endpush
