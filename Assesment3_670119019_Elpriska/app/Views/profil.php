<?php 
session_start();
include 'koneksi.php'; ?>

<?php include 'menu2.php';?>
<?php
$id_pelanggan = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM user WHERE id_user = '$id_pelanggan'");
$pecah = $ambil ->fetch_assoc();
?>

<!--=================================-->


<section class="konten">
	<div class="container">
		<h2>Detail Profil : 
		</h2>
		<span class="linedivide1"></span>
		<div class="row">
			<div class="col-md-6 p-b-30">
				<div class="hov-img-zoom">
				<img src="foto/<?php echo $pecah["foto"];?>"alt="IMG-ABOUT">
			</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
						<?php if ($_SESSION['pelanggan']['level']=='pelapak'): ?>
							<a class="btn btn-success"  href="lapak.php?id=<?php echo $pecah['id_user']; ?>" >Jual Barang <?php echo $pecah['nama_pelanggan']; ?></a>
						<a class="btn btn-warning"  href="daftarjual.php?id=<?php echo $pecah['id_user']; ?>" >Barang Yang Dijual</a>
						<?php else: ?>
							<a class="btn btn-warning"  href="sewalapak.php" >Sewa Lapak</a>
						<?php endif ?>
						<a class="btn btn-danger"  href="editprofil.php?id=<?php echo $pecah['id_user']; ?>" >Edit Profil</a>


					</div>
					<div class="form-group">
						<label>Nama :</label>
						<input type="text" class="form-control"  readonly value="<?php echo $pecah['nama_user'];?>">
					</div>
					<div class="form-group">
						<label>Email :</label>
						<input type="text" class="form-control"  readonly value="<?php echo $pecah['email'];?>">
					</div>

					<div class="form-group">
						<label>Password :</label>
						<input type="text" class="form-control"  readonly value="<?php echo $pecah['password'];?>">
					</div>

					<div class="form-group">
						<label>Alamat :</label>
						<input type="text" class="form-control"  readonly value="<?php echo $pecah['alamat_pelanggan'];?>">
					</div>

					<div class="form-group">
						<label>Telpon :</label>
						<input type="text" class="form-control"  readonly value="<?php echo $pecah['no_tlp'];?>">
					</div>

					<div class="form-group">
						<label>Level :</label>
						<input type="text" class="form-control"  readonly value="<?php echo $pecah['level'];?>">
					</div>
				</div>

			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>