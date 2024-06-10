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
                                Dashboard Siswa
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablel-striped table-bordered" id="table-siswa">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                            </tr>
                                        </head>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Resna</td>
                                                <td>7A</td>
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
    </div>
</div>@endsection
