<?php
session_start();
include "koneksi.php";
?>
<?php include 'menu2.php';?>
<style> 
	.button {
      background-color:pink;
      border-color:red;
      color:white;
      }
     </style>
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(data/images/pp.jpg);">
	<h2 class="l-text2 t-center">
		Shop
	</h2>
</section>
<section class="instagram p-t-20">
	<div class="sec-title p-b-52 p-l-15 p-r-15">
		<h3 class="m-text5 t-center">
			Design Catalog !!!
		</h3><br>
		<div class="row">
			<?php $ambil = $koneksi->query("SELECT * FROM produk  ORDER BY RAND()");?>
			<?php while ($produk = $ambil->fetch_assoc()){ ?>
				<div class="col-xs-3 col-md-3">
					<div class="thumbnail">
						<div class="hov-img-zoom">
						<a href="detail.php?id=<?php echo $produk['id_produk'];?>"><img width="400"  class="img-responsive" src="foto_produk/<?php echo $produk['gambar'];?>" alt=""></a>
						</div>
						<div class="caption" align="center">
							<a href="detail.php?id=<?php echo $produk['id_produk'];?>" style="color: black;"><h3><?php echo $produk['judul_desain'];?></h3></a>
							<h4><b>Rp.<?php echo number_format($produk['harga']);?></b></h4>
							<a href="beli.php?id=<?php echo $produk['id_produk'];?>" class="button">Beli</a>
							<a href="detail.php?id=<?php echo $produk['id_produk'];?>" class="btn btn-default">Detail</a>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</section>


<?php include 'footer.php'; ?>