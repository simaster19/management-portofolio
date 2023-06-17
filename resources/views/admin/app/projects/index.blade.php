@extends('admin.index')
@section('title', 'Data Project')
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
                <div class="card-header">
                    <a href="{{ route('projects.create') }}"><button type="button" class="btn btn-success rounded-pill"
                            title="Add"><i class="bi bi-plus"></i></button></a>
                    @if (session()->has('success'))
                        <div class="alert alert-{{ session('style') }} alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama User</th>
                                <th>Cover</th>
                                <th>Judul</th>
                                <th>Dibuat Dengan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                                <tr>
                                    <td>{{ $data->user->name }} </td>
                                    <td><img src="{{ Storage::url($data->cover) }}" alt="" class="img-thumbnail">
                                    </td>

                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->dibuat_dengan }}</td>
                                    <td>
                                        <a href="{{ route('projects.show', $data->id) }}"> <button type="button"
                                                class="btn btn-warning rounded-pill" title="Detail"><i
                                                    class="bi bi-eye"></i></button></a>

                                        <a href="{{ route('projects.edit', $data->id) }}"><button type="button"
                                                class="btn btn-primary rounded-pill" title="Ubah"><i
                                                    class="bi bi-pencil"></i></button></a>

                                        <form class="d-inline" action="{{ route('projects.destroy', $data->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Hapus data ini?')"
                                                class="btn btn-danger rounded-pill" title="Hapus"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>


                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse



                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
