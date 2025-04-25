<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <title>Document</title>
</head>
</head>
<body>
    <h2>List Mahasiswa Kelas ik {{$kelas}} </h2>
    <ol>
        @foreach ($data as $nama)
            <li>{{$nama}}</li>
        @endforeach
    </ol>

    {{-- <ol>
       <li>nabila</li>
       <li>nabila</li>
       <li>nabila</li>
    </ol> --}}
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>
