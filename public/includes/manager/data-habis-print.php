 	<style>
 		@media print {
 			.btn {
 				display: none !important;
 			}

 			.header-wrap2 {
 				display: none !important;
 			}

 			aside {
 				display: none !important;
 			}

 			a,
 			hr,
 			br {
 				display: none !important;
 			}

 			.naon {
 				display: none !important;
 			}

 			.hd {
 				display: none;
 			}
 		}
 	</style>
 	<div class="col-sm-12" style="background: white; padding: 50px;">
 		<h3>Data Barang Habis</h3>
 		<?php
			include "../config/config.php";
			$qb = new lsp();
			$dataB = $qb->edit("detailbarang", "stok_barang", 0);
			$dateNow = date("Y-m-d");
			header("Content-type:application/vnd-ms-excel");
			header("Content-Disposition:attachment;filename='$dateNow'-databaranghabis.xls");
			?>
 		<table border="1" cellspacing="0" width="100%;" cellpadding="20">
 			<thead>
 				<tr>
 					<th>Kode barang</th>
 					<th>Nama barang</th>
 					<th>Lokasi</th>
 					<th>Supplier</th>
 					<th>Tanggal Masuk</th>
 					<th>Harga</th>
 					<th>Stok</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php
					$no = 1;
					foreach ($dataB as $ds) { ?>
 					<tr>
 						<td><?= $ds['kd_barang'] ?></td>
 						<td><?= $ds['nama_barang'] ?></td>
 						<td><?= $ds['lokasi'] ?></td>
 						<td><?= $ds['nama_supplier'] ?></td>
 						<td><?= $ds['tanggal_masuk'] ?></td>
 						<td><?= $ds['harga_barang'] ?></td>
 						<td><?= $ds['stok_barang'] ?></td>
 					<?php $no++;
					} ?>
 			</tbody>
 		</table>

 	</div>