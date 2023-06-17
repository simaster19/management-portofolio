@extends('admin.index')
@section('title', 'Tambah Skill')
@section('content')

    <div class="col-md-9 col-12">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('skills.store') }}" method="POST" class="form form-vertical"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="skill">Nama SKill</label>
                                        <input type="text" id="skill" class="form-control" name="skill"
                                            placeholder="Skill" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="level">Level</label>
                                        <select name="level" id="level" class="form-select" required>
                                            <option value="" selected disabled>--Pilih Level--</option>
                                            <option value="BEGINNER">BEGINNER</option>
                                            <option value="MIDDLE">MIDDLE</option>
                                            <option value="PRO">PRO</option>
                                            <option value="EXPERT">EXPERT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="link_sertifikat">Link Sertifikat</label>
                                        <input type="text" id="link_sertifikat" class="form-control"
                                            name="link_sertifikat" placeholder="Link Sertifikat" required>
                                    </div>
                                </div>
                                <div class="col-12">

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
