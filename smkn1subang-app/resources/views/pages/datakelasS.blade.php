@extends('layout')

@section('title', 'Data Kelas page')

@section('content')
        <table cellpadding=10 cellspacing=0 border=1>
                <tr>
                        <th>id</th>
                        <th>namakelas</th>
                        <th>jurusan</th>
                        <th>namawalikelas</th>
                        <th>jumlahsiswa</th>
                </tr>   
        @foreach($data as $person)
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->namakelas }}</td>  
                <td>{{ $person->jurusan }}</td>
                <td>{{ $person->namawalikelas }}</td>
                <td>{{ $person->jumlahsiswa }}</td>
        </tr>   
@endforeach
</table>
@endsection
