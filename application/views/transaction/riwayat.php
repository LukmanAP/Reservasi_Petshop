<div class="container d-flex flex-column" style="min-height: 80vh;">
    <div class="text-center mb-4">
        <h1>Riwayat Grooming</h1>
    </div>

    <div class="flex-grow-1">
        <div class="">
            <table class="table table-bordered table-hover table-striped text-center mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pet</th>
                        <th>Layanan Grooming</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($riwayat)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px;">
                                    <i class="fas fa-history mb-3" style="font-size: 3rem; color: #6c757d;"></i>
                                    <h5 class="text-muted">Tidak ada riwayat transaksi</h5>
                                    <p class="text-muted">Belum ada riwayat grooming kucing Anda</p>
                                </div>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php $no = 1; ?>
                        <?php foreach ($riwayat as $tr) :?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tr->cat_name;?></td>
                                <td><?php echo $tr->name ?></td>
                                <td><?php echo $tr->date ?></td>
                                <td>
                                <?php if ($tr->status == 'Selesai'): ?>
                                    <div class="btn btn-secondary btn-sm">Selesai</div>
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
