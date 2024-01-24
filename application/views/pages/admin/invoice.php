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
                <h6 class="m-0 font-weight-bold text-primary">Payment Data</h6>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Gross Amount</th>
                            <th scope="col">Payment type</th>
                            <th scope="col">Bank</th>
                            <th scope="col">Va Number</th>
                            <th scope="col">Transaction Time</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($midtrans as $d) { ?>
                            <tr>
                                <td><?php echo $d->order_id; ?></td>
                                <td><?php echo $d->gross_amount; ?></td>
                                <td><?php echo $d->payment_type; ?></td>
                                <td><?php echo $d->bank; ?></td>
                                <td><?php echo $d->va_number; ?></td>
                                <td><?php echo $d->transaction_time; ?></td>
								<td>
									<?php
									if($d->status_code == "200"){
									?>
									<span class="badge bg-success">Success</span>
									<?php
									} else {
										?>
										<span class="badge bg-warning">Pending</span>
										<?php
									}
									?>
								</td>
                                <td>
                                    <a href="<?php echo $d->pdf_url; ?>" target="_blank" class="btn btn-success btn-sm">Download</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
