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
      <td>
          <a href="" id="edtprak" data-toggle="modal" data-target="#editData" data-kode="<?= $data->kode_mk; ?>" data-nama="<?= $data->nama_mk; ?>" data-jumlah="<?= $data->jumlah_praktikan; ?>" class="btn btn-outline-warning">Edit</a>
          <a href="" data-kode="<?= $data->kode_mk; ?>" class="btn btn-outline-danger swalconf">Hapus</a>
        </td>
    </tr> <?php
  }
?>