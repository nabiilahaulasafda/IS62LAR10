@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    {{ session('success') }}<i class="fa-solid fa-check"></i>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
                <div class="card-header bg-dark-subtle">
                    <h3 class="float-start fw-bold">{{ __('DATA DOSEN') }}</h3>
                    <span class="float-end btn btn-primary">
                        <a class="text-light" href="dosen/add"> <i class="fa-solid fa-user-plus"></i> Add </a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ( $dosen as $data)
                          <tr>
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{ $data->nidn }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></a>
                                <a href="/dosen/edit/{{ $data->id }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a></td>
                          </tr>
                          @empty
                          <tr>
                            <th colspan="5" scope="row">Data Tidak Ada</th>
                          </tr>
                          @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
    });
</script>



@endsection
