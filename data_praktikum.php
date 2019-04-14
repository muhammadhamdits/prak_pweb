<?php 
  require_once("config.php");
  $i=1;
  $datas = $db->query("SELECT * FROM matakuliah");  
  while($data = $datas->fetch_object()){
    if($data['id']!='ownerPangkalan'){ ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $data->kode_mk; ?></td>
        <td><?= $data->nama_mk; ?></td>
        <td><?= $data->jumlah_praktikan; ?></td>
        <!-- <td align="center">
          <a href="" id="edtpel" data-toggle="modal" data-target="#editPelanggan" data-id="<?= $data['id']; ?>" data-nama="<?= $data['nama']; ?>" data-jenis="<?= $data['jenis']; ?>" data-alamat="<?= $data['alamat']; ?>" data-keperluan="<?= $data['keperluan']; ?>" class="btn btn-outline-warning"><i class="fa fa-pencil-square-o"></i></a>
          <a href="" data-id="<?= $data['id']; ?>" class="btn btn-outline-danger swalconf"><i class="fa fa-trash"></i></a>
        </td> -->
      </tr> <?php
    }
  }
?>