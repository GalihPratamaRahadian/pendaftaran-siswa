<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Calon Siswa</title>
  </head>
  <body>
<div class="row mt-2">
	<div class="col-3">
	<a href="<?=base_url('siswa');?>" class="btn btn-success">Tambah</button></a>
	</div>
</div>
<table class="table mt-2">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Asal Sekolah</th>
    </tr>
  </thead>
  <tbody>
	  <?php
		foreach($allsiswa as $no=>$siswa){
	  ?>
	<tr>
		<th scope="row"><?=$no+1 ?></th>
		<td><?=$siswa['nama'];?></td>
		<td><?=$siswa['alamat'];?></td>
		<td><?=$siswa['jenis_kelamin'];?></td>
		<td><?=$siswa['agama'];?></td>
		<td><?=$siswa['asal_sekolah'];?></td>
    </tr>
<?php
}
?>
  </tbody>
</table>
  </body>
</html>