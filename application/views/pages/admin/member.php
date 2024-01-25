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
				<h6 class="m-0 font-weight-bold text-primary">Data Member</h6>
			</div>

			<div class="table-responsive">
                <table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Pengguna</th>
						<th scope="col">Email</th>
						<th scope="col">Image</th>
						<th scope="col">Role</th>
						<th scope="col">Status</th>
						<th scope="col">Date</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						$no = 1;
						foreach ($user as $item) { ?>
					</tr>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $item->name; ?></td>
						<td><?php echo $item->email; ?></td>
						<td><?php echo $item->image; ?></td>
						<td>
							<?php
							if ($item->role_id == 2) {
							?>Member<?php
								} else {
									?>Admin<?php
										}
											?>
						</td>
						<td>
							<?php
							if ($item->active == 1) {
							?>
								<a href="<?php echo site_url('member/aktif/' . $item->id); ?>" class="badge badge-success">Aktif</a>

							<?php
							} else {
							?>
								<a href="<?php echo site_url('member/non_aktif/' . $item->id); ?>" class="badge badge-danger">Non Aktif</a>
							<?php
							}
							?>
						</td>
						<td><?php echo $item->date_created; ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>

<br><br>
<br>
<br>
<br>
<br>


