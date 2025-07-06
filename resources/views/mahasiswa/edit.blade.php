@extends('layout')

@section('konten')

<h4>Edit Data Mahasiswa
 </h4>

 <form action="{{ route ('mahasiswa.update', $mahasiswa->id)}}" method="post">
    @csrf
    <label> NIM</label>
    <input type="number" name="nim" value="{{$mahasiswa -> nim}}" class="form-control mb-2" required>
    <label> Nama</label>
    <input type="text" name="nama" value="{{$mahasiswa -> nama}}"class="form-control mb-2" required>  
    <label> Prodi</label>   
    <input type="text" name="prodi" value="{{$mahasiswa -> prodi}}" class="form-control mb-2" required>
    <label> Angkatan</label>
    <input type="integer" name="angkatan" value="{{$mahasiswa -> angkatan}}" class="form-control mb-2" required>
    <label> Jenis kelamin</label>
    <select name="jenis_kelamin" value="{{$mahasiswa -> jenis_kelamin}}" class="form-control mb-2" required>
        <option value ="pilih jenis kelamin ">Pilih Jenis Kelamin</option>
        <option value ="Laki-laki">Laki-laki</option>
        <option value ="Perempuan">Perempuan</option>
    </select>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{url('mahasiswa')}}" class="btn btn-secondary">Kembali</a>
    @csrf
 </form>


 

@endsection 