
@extends('layouts.main')


@section('content')
<body class="bg-gray-100 p-8">
    <h1 class="text-lg">Nama1 : {{ $Nama }}</h1>
    <h1 class="text-lg">NIM : <?= $NIM ?></h1>
    <h1 class="text-lg">Kelas : <?= $Kelas ?></h1>
    <img class="gambar" src="data:image/jpeg;base64,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" alt="">
</body>
@endsection