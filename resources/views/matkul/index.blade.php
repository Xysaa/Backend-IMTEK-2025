<!DOCTYPE html>
<html>
<head>
    <title> Matkul </title>
</head>
<body>
    <h1>Daftar Mata Kuliah</h1>
    <div>
        <a href="{{route('matkul.create')}}">
        <button class="bg-gray-100 px-10 py-2 rounded-md font-semibold">Tambah</button>
        </a>
    </div>
    @include("matkul.partials.search")
    <table border="1" class="table-auto w-full">
        <thead>
            <tr>
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>
                <th>Jumlah SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matkuls as $matkul)
                <tr>
                <td>{{$matkul->kode_matkul}}</td>
                <td>{{$matkul->name}}</td>
                <td>{{$matkul->sks}}</td>
                <td> <a href = "{{route('matkul.edit',['matkul'=>$matkul->kode_matkul])}}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4"">
        {{$matkuls->links()}}
    </div>

</body>
</html>
