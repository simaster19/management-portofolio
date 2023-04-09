@extends('admin.index')
@section('title', 'Tambah Project')
@section('content')

    <div class="col-md-9 col-12">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('projects.store') }}" method="POST" class="form form-vertical"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="judul_project">Judul Project</label>
                                        <input type="text" id="judul_project" class="form-control" name="judul_project"
                                            placeholder="Judul Project">
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
                                        <select name="jenis_project" id="jenis_project" class="form-select">
                                            <option value="web">WEB</option>
                                            <option value="android">ANDROID</option>
                                            <option value="desktop">DESKTOP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="development">Development</label>

                                        <select name="development[]" id="development" class="choices form-select"
                                            multiple="multiple">
                                            <option value="HTML" selected>HTML</option>
                                            <option value="CSS" selected>CSS</option>
                                            <option value="PHP" selected>PHP</option>
                                            <option value="JAVASCRIPT" selected>JAVASCRIPT</option>
                                            <option value="JAVA">JAVA</option>
                                            <option value="GITHUB" selected>GITHUB</option>
                                            <option value="LINUX">LINUX</option>
                                            <option value="FLUTTER">FLUTTER</option>
                                            <option value="MYSQL">MYSQL</option>
                                            <option value="LARAVEL">LARAVEL</option>
                                            <option value="CODEIGNITER">CODEIGNITER</option>
                                            <option value="NODEJS">NODEJS</option>
                                            <option value="REACTJS">REACTJS</option>
                                            <option value="BOOTSTRAP">BOOTSTRAP</option>
                                            <option value="TAILWIND">TAILWIND</option>
                                            <option value="JQUERY(AJAX)" selected>JQUERY</option>
                                            <option value="VUEJS">VUEJS</option>
                                            <option value="NUXTJS">NUXTJS</option>
                                            <option value="NEXTJS">NEXTJS</option>
                                        </select>

                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="project_url">Project URL</label>
                                            <input type="text" id="project_url" class="form-control" name="project_url"
                                                placeholder="URL">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea name="keterangan" id="keterangan" cols="50" rows="10" class="form-control"></textarea>
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
