@extends('admin.index')
@section('title', 'Ubah Skill')
@section('content')

    <div class="col-md-9 col-12">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('skills.update', $data->id) }}" method="POST" class="form form-vertical"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="skill">Nama SKill</label>
                                        <input type="text" id="skill" class="form-control" name="skill"
                                            placeholder="Skill" value="{{ $data->skills }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="persen">Persen</label>
                                        <input type="number" min="0" max="100" id="persen"
                                            class="form-control" name="persen" placeholder="Input Number"
                                            value="{{ $data->persen }}">
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
