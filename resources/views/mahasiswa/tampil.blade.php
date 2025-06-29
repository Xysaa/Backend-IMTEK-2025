@extends('layout')

@section('konten')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Data Mahasiswa</h4>
    <a class= "btn btn-succes" href="{{url('mahasiswa/tambah')}}" class="btn btn-primary">Tambah Data</a>

</div>

<table class="table">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Prodi</th>
    <th>Angkatan</th>
    <th>Jenis Kelamin</th>
    <
</tr>

@foreach ($mahasiswa as $no=> $data)
<tr>
    <td>{{ $no+1 }}</td>
    <td>{{ $data->nim}}</td>
    <td>{{ $data->nama}}</td>
    <td>{{ $data->prodi}}</td>
    <td>{{ $data->angkatan}}</td>
    <td>{{ $data->jenis_kelamin}}</td>
    <td>
        <a href="{{route ('mahasiswa.edit', $data->id)}}" class="btn btn-sm btn-warning"> Edit</a>
        <form action="{{route ('mahasiswa.delete', $data->id)}}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
        </form>
    </td> 
</tr>
    
@endforeach

</table>
 

@endsection 