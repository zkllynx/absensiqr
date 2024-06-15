@extends('layout.template')

@section('content')
<div id="app">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- Page Title -->
                    <div class="col-sm-6">
                        <!-- <h1 class="m-0 text-dark">Role}</h1> -->
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
                                Master Role
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><span>Tambah</span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="table-siswa">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Role</th>   
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </head>
                                        <tbody>
                                        <?php
                                            $no=1;
                                            foreach($role as $data) : 
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++ ?></td>
                                                <td class="text-center" ><?php echo $data->role_name ?></td>
                                                <td>
                                                <a data-toggle="modal" href="#formModalHapus<?=$data->role_id?>" class="btn btn-icon btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
                                                </td>
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

<!-- Modal Hapus-->
<?php
      foreach($role as $data) { ?>
<div class="modal fade" id="formModalHapus<?=$data->role_id?>" tabindex="-1" role="dialog" aria-labelledby="formModalEditLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="formModalEditLabel"><font color="red">Delete</font> <?= $data->id_master_preventive ?>!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h5>Anda yakin akan menghapus data ini?</h5>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnCloseIt" data-dismiss="modal">Close</button>
                <a href="/hapus_master_preventive/{{ $data->id_master_preventive }}" class="btn btn-danger">Hapus</a>
            </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Role</h4>
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
                                <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control" name="identity" placeholder="Nomor Induk Pengajar(10 digit angka)">
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
