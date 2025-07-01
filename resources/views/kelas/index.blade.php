<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kelas</title>
</head>
<body>

<x-navbar></x-navbar>

<div>
	<form action="{{ route('kelas.index') }}" method="GET">
		@csrf
		<input type="text" name="search" placeholder="Cari...">
		<input type="submit" value="CARI">
	</form>
</div>

<form action="{{ route('kelas.store') }}" method="POST" enctype="application/json">
	@csrf
	<ol style="display: flex; max-width: 900px; list-style-type: none; justify-content: space-between;">
		<li>
			<label>Nama Kelas</label>
			<input type="text" name="nama_kelas">
		</li>
		<li>
			<label>Nama Mata Kuliah</label>
			<input type="text" name="nama_matkul">
		</li>
		<li>
			<label>Nama Dosen</label>
			<input type="text" name="nama_dosen">
		</li>
		<li>
			<button type="submit">Simpan</button>
		</li>
	</ol>
</form>


<table style="width: 100%;">
	<tr style="text-align: left;">
		<th>Nama Kelas</th>
		<th>Nama Mata Kuliah</th>
		<th>Nama Dosen</th>
		<th></th>
	</tr>
	@forelse ($kelass as $kelas)
		<tr>
			<td> {!! $kelas->nama_kelas !!} </td>
			<td> {!! $kelas->nama_matkul !!} </td>
			<td> {!! $kelas->nama_dosen !!} </td>
			<td style="display: flex;">
				<!-- <button onClick="edit({!!$kelas->id!!})">edit</button> -->
				<a href="{{ route('kelas.edit', $kelas->id) }}"><button>edit</button></a>
				<form action="{{ route('kelas.destroy', $kelas->id) }}" method="POST" enctype="application/json">
					@csrf
					@method('DELETE')
					<button type="submit">delete</button>
				</form>
			</td>
		</tr>
	@empty
		<p>Data kosong</p>
	@endforelse
</table>

</body>
</html>