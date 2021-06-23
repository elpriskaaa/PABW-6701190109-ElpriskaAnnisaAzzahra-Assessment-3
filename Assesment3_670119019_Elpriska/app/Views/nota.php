<?php
session_start();
include"koneksi.php";
?>
<?php include 'menu2.php';?>

<!--=================================-->
<section class="konten">
	<div class="container">
		<h2>Detail Pembelian</h2>
		<?php 

		$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON user.id_user=user.id_user WHERE transaksi.id_transaksi='$_GET[id]' ");
		$detail = $ambil->fetch_assoc();
		?>
		<div class="row">
			<div class="col-md-12" align="center">
				<div class="alert alert-info">
					
		
			<div class="col-md-4">
					<h3>Pelanggan</h3>
					<strong><?php echo $detail['nama_pelanggan'];?></strong><br>
			
						<?php echo $detail['email_pelanggan'];?><br>
						<?php echo $detail['telepon_pelanggan'];?>
					
			</div>
			<div class="col-md-4"> 
				<h3>Pembelian</h3>
				<strong>No Pembelian : <?php echo $detail['id_pembelian'];?></strong><br>
				Tanggal : <?php echo $detail['tanggal_pembelian'];?><br>
				Total   : Rp.<?php echo number_format($detail['total_pembelian']);?>

			</div>
			<div class="col-md-4">
				<h3>Pengiriman</h3>
				<strong><?php echo $detail['nama_kota'];?><br></strong>
				Ongkos Kirim  : Rp.<?php echo number_format($detail['tarif']);?><br>
				Alamat        : <?php echo $detail['alamat_pengiriman'];?>
			</div>
		</div>
	</div>
</div>

		<table class="table table-bordered">

			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1;?>
				<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'"); ?>
				<?php while ($pecah = $ambil->fetch_assoc()) {?> 
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $pecah['nama'];?></td>
						<td>Rp.<?php echo number_format($pecah['harga']);?></td>
					</tr>
			</tbody>

				</div>
			</div>
		</div>
	</div>
			
		<?php $no++;?>
				<?php }?>

		</table>
		<center><a href="cetak.php?id=<?php echo $detail['id_pembelian'];?>" class="btn btn-primary" target="_BLANK">Cetak Nota</a></center>

		<div class="row">
			<div class="col-md-12" align="center" >
				<div class="alert alert-info">
					<p>
						Silahkan Melakukan Pembayaran Rp.<?php echo number_format($detail['total_pembelian']);?>Ke Rahma Syukriani<br>
						<strong>
							Bank BCA    			=>   731 025 2527<br>

							Bank Mandiri 			=>   0700 000 899 992<br>

							Bank BSM    			=>   778 887 7708<br>

							Bank BNI  			 	=>   023 827 2088<br>

							Bank BRI   				=>   034 101 000 743 303

						</strong>
					</p>
				</div>
			</div>
		</div>
	</div>

</section>





<?php include 'footer.php'; ?>