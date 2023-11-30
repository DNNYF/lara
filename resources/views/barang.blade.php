
@extends('layouts.main')
@section('content')
<body>
    <h1>Daftar Barang</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection