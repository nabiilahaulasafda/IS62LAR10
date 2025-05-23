@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header bg-dark-subtle">
                    <h3 class="fw-bold text-center">{{ __('FORM EDIT') }}</h3>
                </div>
                <div class="card-body">
                    <form action="/dosen/{{ $dosen->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> NIDN </label>
                            <input type="text" value="{{ $dosen->nidn }}" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Nama Lengkap </label>
                            <input type="text" value="{{ $dosen->nama }}" name="nama" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Email </label>
                            <input type="email" value="{{ $dosen->email }}" name="email" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Rumpun </label>
                            <select class="form-control" name="rumpun" id="">
                                <option value="{{$dosen->rumpun }}">{{ $dosen->rumpun }}</option>
                                <option value="Komputer"> Komputer </option>
                                <option value="Bisnis"> Bisnis </option>
                                <option value="Sekretaris"> Sekretaris </option>
                                <option value="Akuntasi"> Akuntansi </option>
                                <option value="Manajemen"> Manajemen </option>
                                <option value="Wirausaha"> Wirausaha </option>
                                <option value="Marketing"> Marketing </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> No Handphone </label>
                            <input type="text" value="{{ $dosen->nohp }}" name="nohp" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
