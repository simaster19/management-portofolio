@extends('admin.index')
@section('title', 'Data Message')
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
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Email</th>
                                <th>Pesan</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                                <tr>
                                    <td>{{ $data->user->name }} </td>
                                    <td><img src="{{ Storage::url($data->user->foto) }}" alt=""
                                            class="img-thumbnail">
                                    </td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->message }}</td>
                                    <td>
                                        <a href="{{ route('detail', $data->id) }}"> <button type="button"
                                                class="btn btn-warning rounded-pill" title="Detail"><i
                                                    class="bi bi-eye"></i></button></a>



                                        <form class="d-inline" action="{{ route('hapus', $data->id) }}" method="POST">
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