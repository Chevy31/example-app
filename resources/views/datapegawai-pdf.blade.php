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
  padding: 8px;
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
        <th>Num</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Telephone</th>
        <th>Date</th>
    </tr>
    @php
    $no = 1; 
    @endphp
    @foreach($data as $row)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$row->Name}}</td>
        <td>{{$row->jenisKelamin}}</td>
        <td>0{{$row->telephone}}</td>
        <td>{{$row->created_at->format('d/m/Y')}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>


