<!DOCTYPE html>
<html>
<head>
<style>
#books {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#books td, #books th {
  border: 1px solid #ddd;
  padding: 8px;
}

#books tr:nth-child(even){background-color: #f2f2f2;}

#books tr:hover {background-color: #ddd;}

#books th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0e1613;
  color: white;
}
</style>

</head>
<body>

<h1>List Data Buku Perpustakaan Leebrary</h1>

<table id="books">
  <tr>
    <th>No</th>
    <th>Judul Buku</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun Terbit</th>
    <th>Deskripsi</th>
  </tr>
  @php
    $index = 1;
  @endphp

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
</table>

</body>
</html>


