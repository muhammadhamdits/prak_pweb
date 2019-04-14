<?php 
  require_once("config.php");
  $i=1;
  $datas = $db->query("SELECT * FROM matakuliah");  
  while($data = $datas->fetch_object()){?>
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $data->kode_mk; ?></td>
      <td><?= $data->nama_mk; ?></td>
      <td><?= $data->jumlah_praktikan; ?></td>
      <td></td>
    </tr> <?php
  }
?>