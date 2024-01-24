<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
	</div>
	<!-- Area Chart -->
	<div class="col-12">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Data Category</h6>
				<a href="<?php echo site_url('Categories/add'); ?>" class="btn btn-primary">Create</a>
			</div>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Kategori</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						$no = 1;
						foreach ($kategori as $item) { ?>
					</tr>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $item->namakat; ?></td>
						<td>
							<a href="<?php echo site_url('categories/getid/' . $item->idkat); ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo site_url('categories/hapus/' . $item->idkat); ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini');">Hapus</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div
