<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
	</div>
	<div class="row">
		<div class="col-12">
			<form action="<?php echo site_url('Categories/edit') ?>" method="POST">
				<input type="hidden" name="id" value="<?php echo $kategori->idkat; ?>">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-primary">Data Category</h6>
					</div>
					<div class="card-body">
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kategori</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="inputEmail3" name="namaKategori" placeholder="Nama Kategori" value="<?php echo $kategori->namakat; ?>" required>
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
