
<!DOCTYPE html>
<html>
<head>
    <title> Matkul </title>
</head>
<body>
    <h1>Tambah Mata Kuliah</h1>
    <div class="mt-4">
        <form method="POST" action="{{route('matkul.store')}}">
            @csrf

            <div>
                <label for="kode_matkul">Kode Matkul : </label><br>
                <input id="kode_matkul" class="block mt-1 w-full" type="text" name="kode_matkul" :value="old('kode_matkul')"
                    required/>


            </div>
            <div>
                <label for="">Nama Matkul : </label><br>
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required/>

            </div>
            <div>
                <label for="sks">Jumlah SKS : </label><br>
                <input id="sks" class="block mt-1 w-full" type="text" name="sks" :value="old('sks')"
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
</body>
</html>
