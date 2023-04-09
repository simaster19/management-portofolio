@extends('admin.index')
@section('title', 'Detail Project')
@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-12 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
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
                                <th>Nama</th>
                                <td>{{ $data->user->name }}</td>
                            </tr>
                            <tr>

                                <th>Judul</th>
                                <td>{{ $data->judul }}</td>
                            </tr>
                            <tr>
                                <th>Development</th>
                                <td>{{ $data->dibuat_dengan }}</td>
                            </tr>
                            <tr>
                                <th>Project URL</th>
                                <td>{{ $data->project_url }}</td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td>{{ $data->keterangan }}</td>
                            </tr>
                            <tr>
                                <th>Images</th>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                @foreach ($data->image as $gambar)
                                                    <img width="100px" height="100px" class="inline"
                                                        src="{{ Storage::url($gambar['gambar']) }}" alt="">
                                                @endforeach
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
