
<!DOCTYPE html>
<html>
<head>
    <title> Matkul </title>
</head>
<body>
    <h1>Edit Mata Kuliah</h1>
    <div class="mt-4">
        <form method="POST" action="{{route('matkul.update',$matkul->kode_matkul)}}">
            @csrf
            @method('PUT')
            <div>
                <label for="kode_matkul">Kode Matkul : </label><br>
                <input id="kode_matkul" class="block mt-1 w-full" type="text" name="kode_matkul" value="{{$matkul->kode_matkul}}"
                    required/>


            </div>
            <div>
                <label for="">Nama Matkul : </label><br>
                <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$matkul->name}}"
                    required/>

            </div>
            <div>
                <label for="sks">Jumlah SKS : </label><br>
                <input id="sks" class="block mt-1 w-full" type="text" name="sks" value="{{$matkul->sks}}"
                    required/>


            </div>
             @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif


            <button>submit</button>
        </form>
    </div>
    @include('matkul.partials.delete')

</body>
</html>


