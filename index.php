<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Tabel Absen Data Mahasiswa API</title>
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