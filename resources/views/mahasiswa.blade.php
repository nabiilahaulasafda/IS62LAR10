<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="text-center mt-3 pt-3 bg-white">
        <h1 class="bg-primary-subtle text-white p-3 d-inline-block border border-primary-subtle rounded-3"> {{$nama}} </h1>
        <h1 class="bg-secondary text-white p-3 d-inline-block border border-black-subtle rounded-3"> {{$nilai}} </h1>
        @if(($nilai >= 85) and ($nilai <=100))
            <h2 class="alert alert-success d-inline block"> A </h2>
        @elseif (($nilai >= 70) and ($nilai <=84))
            <h2 class="alert alert-success d-inline block"> B </h2>
        @elseif (($nilai >= 55) and ($nilai <=69))
            <h2 class="alert alert-warning d-inline block"> C </h2>
        @elseif (($nilai >= 40) and ($nilai <=54))
            <h2 class="alert alert-danger d-inline block"> D </h2>
        @elseif (($nilai >= 0) and ($nilai <=39))
            <h2 class="alert alert-danger d-inline block"> E </h2>
        @else
            <h2 class="alert alert-secondary d-inline block"> Nilai Tidak Terdata </h2>
        @endif
        <br>
        <br>
        @if(($nilai >= 0) and ($nilai <=50))
            <div class="alert alert-danger d-inline block"> Tidak Lulus </div>
        @elseif (($nilai >= 50) and ($nilai <=100))
            <div class="alert alert-success d-inline block"> Lulus </div>
        @else
            <div class="alert alert-secondary d-inline block"> Nilai Tidak Valid </div>
        @endif

        <br>
        <br>

        {{-- @foreach ($nilai2 as $val)
            <div class="alert alert-danger d-inline-block">{{$val}}</div>
        @endforeach --}}

        {{--cara erix--}}
        @forelse ($nilai2 as $value)
            @if(($value >=0) and ($value <=49))
                <div class="alert alert-danger d-inline-block">{{$value}}</div>
            @elseif(($value >=50) and ($value <=100))
                <div class="alert alert-success d-inline-block">{{$value}}</div>
            @endif
            @empty
            <div class="alert alert-secondary d-inline-block">Data Tidak Ada</div>
        @endforelse

        {{-- cara AI !!
        @forelse ($nilai2 as $value)
            @if(($value >=0) and ($value <=49))
                <div class="alert alert-danger d-inline-block">{{$value}}</div>
            @elseif(($value >=50) and ($value <=100))
                <div class="alert alert-success d-inline-block">{{$value}}</div>
            @endif
            @empty
            <div class="alert alert-secondary d-inline-block">Data Tidak Ada</div>
        @endforelse
        --}}

        <hr>

        {{-- break continue --}}
         @forelse ($nilai2 as $val2)
         @if ($val2 <= 50)
            @continue
         @endif
            <div class="alert alert-success d-inline-block">
                {{$val2}}
            </div>   
            @empty
                <div class="alert alert-secondary d-inline-block"> data takde </div>       
        @endforelse

    </div>

    <hr>
    <div class="text-center">
    @for ($i=1;$i<=16;$i++)
        <div class="alert alert-danger d-inline-block">{{$i}}</div>
    @endfor
    </div>


    <script src="{{ asset('/js/bootstrap.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
