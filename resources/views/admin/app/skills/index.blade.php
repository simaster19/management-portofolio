@extends('admin.index')
@section('title', 'Data Skill')
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
                    <a href="{{ route('skills.create') }}"><button type="button" class="btn btn-success rounded-pill"
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
                                <th>Skill</th>
                                <th>Level</th>
                                <th>Link Sertifikat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                                <tr>
                                    <td>{{ $data->user->name }} </td>
                                    <td>{{ $data->skill }}</td>

                                    <td>{{ $data->level }}</td>
                                    <td>
                                        {{ $data->link_sertifikat }}
                                    </td>
                                    <td>
                                        <a href="{{ route('skills.edit', $data->id) }}">
                                            <button type="button" class="btn btn-primary rounded-pill" title="Ubah"><i
                                                    class="bi bi-pencil"></i></button></a>

                                        <form class="d-inline" action="{{ route('skills.destroy', $data->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger rounded-pill" title="Hapus"><i
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
