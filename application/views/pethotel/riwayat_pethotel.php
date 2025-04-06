<div class="container d-flex flex-column" style="min-height: 80vh;">
    <div class="text-center mb-4">
        <h1>Riwayat Penitipan</h1>
        <p class="text-muted">Daftar riwayat penitipan kucing Anda</p>
    </div>

    <div class="flex-grow-1">
        <div class="">
            <table class="table table-bordered table-hover table-striped text-center mb-0">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Pet</th>
                        <th>Tanggal Checkin</th>
                        <th>Tanggal Checkout</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($riwayat)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px;">
                                    <i class="fas fa-paw mb-3" style="font-size: 3rem; color: #6c757d;"></i>
                                    <h5 class="text-muted">Belum ada riwayat penitipan</h5>
                                    <p class="text-muted">Anda belum pernah menitipkan kucing</p>
                                </div>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php $no = 1; ?>
                        <?php foreach ($riwayat as $tr) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tr->cat_name ?></td>
                                <td><?php echo $tr->date_checkin ?></td>
                                <td><?php echo $tr->date_checkout ?></td>
                                <td>
                                <?php if ($tr->status == 'Selesai'): ?>
                                    <span class="badge bg-success">Selesai</span>
                                <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
