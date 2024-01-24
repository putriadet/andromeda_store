hhhhhhhhhhhhhhhhhhhhhhhhhhhh
<main id="main">
	<section id="breadcrumbs" class="breadcrumbs">
		<div class="container">

			<div class="d-flex justify-content-between align-items-center">
				<h2>Product Details</h2>
				<ol>
					<li><a href="<?php site_url('User'); ?>">Home</a></li>
					<li>Product Details</li>
				</ol>
			</div>
			<section id="portfolio-details" class="portfolio-details">
				<div class="container">
					<div class="row gy-4">
						<div class="col-lg-6">
							<div class="portfolio-details-slider swiper">
								<div class="swiper-wrapper align-items-center">
									<input type="hidden" name="idProduk" value="<?= $dproduk->idProduk; ?>">
									<div class=" swiper-slide">
										<img src="<?php echo base_url('upload_produk/' . $produk->foto); ?>">
									</div>

									<div class="swiper-slide">
										<img src="<?php echo base_url('upload_produk/' . $produk->foto); ?>">
									</div>

									<div class="swiper-slide">
										<img src="<?php echo base_url('upload_produk/' . $produk->foto); ?>">
									</div>

								</div>
								<div class="swiper-pagination"></div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="portfolio-info">
								<h3><?php echo $produk->namaProduk; ?></h3>
								<ul>
									<li><strong>Harga</strong>: Rp<?php echo number_format($produk->harga); ?></li>
									<li><strong>Stok</strong>: <?php echo $produk->stok; ?></li>
									<li><strong>Berat</strong>: <?php echo $produk->berat; ?> gram</li>
									<li><strong>Deskripsi</strong>: <?php echo $produk->deskripsiProduk; ?></li>
								</ul>
								<a href="<?php echo site_url('Transaksi/tambah_ke_keranjang/' . $produk->idProduk); ?>" class="btn btn-dark">Buy</a>
							</div>
						</div>
					</div>
				</div>
			</section>

</main><!-- End #main -->
