@extends('admin.index')
@section('title', 'Ubah Project')
@section('content')

    <div class="col-md-9 col-12">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('projects.update', $data->id) }}" method="POST" class="form form-vertical"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="judul_project">Judul Project</label>
                                        <input type="text" id="judul_project" class="form-control" name="judul_project"
                                            placeholder="Judul Project" value="{{ $data->judul }}" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="cover">Cover</label>
                                        <input type="file" id="cover" class="form-control" name="cover"
                                            placeholder="Cover">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <input type="file" id="gambar" class="form-control" name="gambar[]"
                                            placeholder="Gambar" multiple>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="jenis_project">Jenis Project</label>
                                        <select name="jenis_project" id="jenis_project" class="form-select" required>
                                            <option value="{{ $data->jenis_project }}">Jangan Diubah -
                                                {{ $data->jenis_project }}</option>
                                            <option value="web">WEB</option>
                                            <option value="android">ANDROID</option>
                                            <option value="desktop">DESKTOP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="development">Development</label>
                                        <input type="text" id="development" class="form-control" name="development"
                                            placeholder="" value="{{ $data->dibuat_dengan }}" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="project_url">Project URL</label>
                                            <input type="text" id="project_url" class="form-control" name="project_url"
                                                placeholder="URL" value="{{ $data->project_url }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea name="keterangan" id="keterangan" cols="50" rows="10" class="form-control">{{ $data->keterangan }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="status">Status Project</label>
                                            <select name="status" id="status" class="form-select" required>
                                                <option value="{{ $data->status }}" selected>Jangan diubah -
                                                    {{ $data->status }}</option>
                                                <option value="PERSONAL">PERSONAL</option>
                                                <option value="FREELANCE">FREELANCE</option>
                                                <option value="COURSE">COURSE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="nama_client">Nama Client</label>
                                            <input type="text" id="nama_client" class="form-control" name="nama_client"
                                                placeholder="Nama Client" value="{{ $data->nama_client }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>

                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
