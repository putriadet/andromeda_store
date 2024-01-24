<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
	</div>
	<div class="row">
		<div class="col-12">
			<form id="setting-form" enctype="multipart/form-data" action="<?php echo site_url('product/save') ?>" method="POST">
				<div class="card shadow mb-4">

					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
					</div>
					<div class="card-body">
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="inputEmail3" name="namaProduk" placeholder="Nama Produk" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
							<div class="col-sm-7">
								<select class="form-control" name="namaKategori">
									<?php foreach ($data['kategori'] as $item) { ?>
										<option value="<?php echo $item->idkat ?>"><?php echo $item->namakat ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Foto Produk</label>
							<div class="col-sm-7">
								<div class="custom-file">
									<input type="file" name="foto_produk" class="custom-file-input" id="site-logo">
									<label class="custom-file-label">Choose File</label>
								</div>
								<div class="form-text text-muted">The image must have a maximum size of 1MB</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Harga Produk</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="inputEmail3" name="harga" placeholder="Harga Produk" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Stok Produk</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="inputEmail3" name="stok" placeholder="Stok Produk" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Berat Produk</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="inputEmail3" name="berat" placeholder="Berat Produk" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Produk</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="inputEmail3" name="deskripsiProduk" placeholder="Deskripsi Produk" required>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
