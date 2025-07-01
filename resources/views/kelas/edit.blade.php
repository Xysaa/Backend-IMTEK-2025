<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
</head>
<body>

<form action="{{ route('kelas.update', $kelas->id) }}" method="POST" enctype="application/json">
	@csrf
	@method('PUT')
	<ol style="list-style-type: none;">
		<li>
			<label>Nama Kelas</label>
			<input type="text" name="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas) }}">
		</li>
		<li>
			<label>Nama Mata Kuliah</label>
			<input type="text" name="nama_matkul" value="{{ old('nama_matkul', $kelas->nama_matkul) }}">
		</li>
		<li>
			<label>Nama Dosen</label>
			<input type="text" name="nama_dosen" value="{{ old('nama_dosen', $kelas->nama_dosen) }}">
		</li>
		<li>
			<button type="submit">Simpan</button>
		</li>
	</ol>
</form>


</body>
</html>