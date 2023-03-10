<!DOCTYPE html>
<html>
<head>
	<title>Export Laporan Excel Pada Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center>
			<h4>Export Laporan Excel Pada Laravel</h4>
			<h5><a target="_blank" href="https://www.malasngoding.com/">www.malasngoding.com</a></h5>
		</center>

		<a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Deskripsi</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($siswa as $s)
				@foreach ($books as $row)
                <tr>
                <td>{{$index ++}}</td>
                <td>{{$row->judul}}</td>
                <td>{{$row->penulis}}</td>
                <td>{{$row->penerbit}}</td>
                <td>{{$row->tahunterbit}}</td>
                <td>{{$row->deskripsi}}</td>

                </tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>
