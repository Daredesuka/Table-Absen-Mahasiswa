<!DOCTYPE html>
<html>
<head>
  <title>Tabel Absen Data Mahasiswa API</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }
    
    th, td {
      border: 1px solid #ddd;
      padding: 8px 20px; 
      text-align: left;
    }
    
    th {
      background-color: #3d85c6;
      color: white;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
      text-align: center;
      line-height: 1.5;
      margin: 0;
      padding: 20px;
      background-color: #f7f7f7;
    }
    
    h1 {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    
    p {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>Tabel Absen Data Mahasiswa API</h1>

<?php

$json_url = 'https://api.steinhq.com/v1/storages/64224443d27cdd09f0eb1eac/21a3';

$data = json_decode(file_get_contents($json_url), true);

if ($data === null) {
  die('Error: Tidak bisa mengambil data dari API');
}

echo '<table>';
echo '<thead>
    <tr>
        <th>No</th>    
        <th>Nama</th>
        <th>NIM</th>
        <th>Pert 1</th>
        <th>Pert 2</th>
        <th>Pert 3</th>
        </tr>
        </thead>';
echo '<tbody>';

foreach ($data as $mahasiswa) {
  echo '<tr>';
  echo '<td>' . $mahasiswa['NO'] . '</td>';
  echo '<td>' . $mahasiswa['NaMa'] . '</td>';
  echo '<td>' . $mahasiswa['NIM'] . '</td>';
  echo '<td>' . $mahasiswa['1'] . '</td>';
  echo '<td>' . $mahasiswa['2'] . '</td>';
  echo '<td>' . $mahasiswa['3'] . '</td>';
  echo '</tr>';
}

echo '</tbody></table>';

?>

</body>
</html>