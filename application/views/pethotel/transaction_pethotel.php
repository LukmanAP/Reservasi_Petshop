<div class="container d-flex flex-column" style="min-height: 80vh;">
    <div class="text-center mb-4">
        <h1>Proses Pembayaran Pethotel</h1>
    </div>
    
    <div class="d-flex flex-row-reverse bd-highlight mb-4">
        <a href="<?php echo site_url('pethotel/transaction_pethotel/riwayat_pethotel/'.$this->session->userdata('user_id')); ?>">
            <button class="btn btn-primary btn-sm">Riwayat Penitipan</button>
        </a>
    </div>

    <div class="flex-grow-1">
        <div class="">
            <table class="table table-bordered table-hover table-striped text-center mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pet</th>
                        <th>Tanggal Checkin</th>
                        <th>Tanggal Checkout</th>
                        <th>Status Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($transaksi)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px;">
                                    <i class="fas fa-hotel mb-3" style="font-size: 3rem; color: #6c757d;"></i>
                                    <h5 class="text-muted">Tidak ada transaksi pethotel</h5>
                                    <p class="text-muted">Belum ada riwayat penitipan kucing</p>
                                </div>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php $no = 1; ?>
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tr->cat_name; ?></td>
                                <td><?php echo $tr->date_checkin; ?></td>
                                <td><?php echo $tr->date_checkout; ?></td>
                                <td>
                                    <?php if ($tr->status == 'Belum Terbayar'): ?>
                                        <div class="d-flex flex-row justify-content-center">
                                            <p class="mb-0"><i>Belum terbayar</i></p>
                                            <a href="<?php echo site_url('pethotel/transaction_pethotel/pembayaran/'.$tr->transaction_id) ?>">
                                            <button type="button" class="btn btn-success ms-3">Bayar</button>
                                            </a>
                                        </div>
                                    <?php elseif ($tr->status == 'Proses'): ?>
                                        <div class="btn btn-warning btn-sm">Sedang di Proses</div>
                                    <?php elseif ($tr->status == 'Sudah Terbayar'): ?>
                                        <a href="<?php echo site_url('pethotel/transaction_pethotel/bukti_pembayaran/'.$tr->transaction_id) ?>">
                                        <div class="btn btn-primary btn-sm">Sudah Terbayar</div>
                                        </a>
                                    <?php elseif ($tr->status == 'Checkin'): ?>
                                        <div class="btn btn-light btn-sm">Sedang Menginap</div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
