<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
</head>
<body>

<h2>Data Penduduk Tanjung Sengkuang RT 003/RW 012</h2>

<table>
  <tr>
    <th>No</th>
    <th>Nama Lengkap</th>
    <th>Jenis Kelamin</th>
    <th>NIK</th>
    <th>No KK</th>
    <th>Pekerjaan</th>
    <th>Alamat Rumah</th>
    <th>RT / RW</th>
    <th>No HP</th>
  </tr>
  @php
  $id=1;
  @endphp
  @foreach ($data as $row)
                                  <tr>
                                    <th class="number" scope="row">{{ $id++ }}</th>
                                    <td>{{ $row -> nama_lengkap}}</td>
                                    <td>{{ $row -> jenis_kelamin}}</td>
                                    <td>{{ $row -> no_nik}}</td>
                                    <td>{{ $row -> no_kk}}</td>
                                    <td>{{ $row -> pekerjaan}}</td>
                                    <td>{{ $row -> alamat}}</td>
                                    <td>{{ $row -> rt}} / {{ $row -> rw}}</td>
                                    <td>{{ $row -> no_hp}}</td>
                                    @endforeach
  </tr>
</table>

</body>
</html>