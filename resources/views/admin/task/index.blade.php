@extends('template.main')
@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h6>Data Tugas</h6>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-success mt-2 mb-2"><i class="fas fa-plus-circle"></i> Tambah</a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Deadline</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Belajar Laravel</td>
                                        <td>Belajar membuat aplikasi web dengan laravel</td>
                                        <td>2020-12-12</td>
                                        <td>
                                            <a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection