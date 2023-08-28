<html>
<head>
<style>
#tabeldata {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tabeldata td, #tabeldata th {
  border: 1px solid #ddd;
  padding: 2px;
}

#tabeldata tr:nth-child(even){background-color: #f2f2f2;}

#tabeldata tr:hover {background-color: #ddd;}

#tabeldata th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
    <h1>Tabel Data</h1>
<table id="tabeldata">
<tr>
                        <th scope="col">NIK</th>
                        <th scope="col">Name</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Status Perkawinan</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Telephone</th>
                      </tr>
    @php
    $no = 1; 
    @endphp
    @foreach($data as $row)                      
    <tr>
    <td>{{$row->nik}}</td>
    <td>{{$row->nama}}</td>
    <td>{{ Carbon\Carbon::parse($row->tl)->format('d-m-Y') }}</td>
    <td>{{$row->jenisKelamin}}</td>
    <td>{{$row->alamat}}</td>
    <td>{{$row->statusperkawinan}}</td>
    <td>{{$row->pekerjaan}}</td>
    <td>0{{$row->telephone}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>


