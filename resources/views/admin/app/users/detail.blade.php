@extends('admin.index')
@section('title', 'Detail Users')
@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-12 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">


                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Foto</th>
                                <td><img src="{{ Storage::url($data['foto']) }}" alt="Foto" width="250px"
                                        height="250px"></td>
                            </tr>
                            <tr>
                                <th>Background</th>
                                <td><img src="{{ Storage::url($data['background']) }}" alt="Background" width="250px"
                                        height="250px"></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>

                                <th>Email</th>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{ $data->username }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Regristasi</th>
                                <td>{{ $data->created_at }}</td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
