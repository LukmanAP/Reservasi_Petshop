<div class="container">
	<div class="text-center mt-5">
		<h1>Pembayaran</h1>
	</div>
	<br> <hr>


	<div class="row">
		<div class="col-6 text-end">
			<h4>Nama Pet :</h4>
			<h4>Berapa Hari :</h4>
			<h4>Harga :</h4>
			<h4>Bawa Makan sendiri (disk:10%) :</h4>
			<h4>Harga Grooming :</h4>
		</div>
		<div class="col-6">
			<h4><?php echo $cat_name; ?></h4>
			<h4><?php echo $days; ?> hari</h4>
			<h4>Rp.<?php echo number_format($stay_cost); ?></h4>
			<h4>
				<?php 
					if ($food_cost==0) {
						echo " - ";
					} else {
						echo "- Rp.". number_format($food_cost);
					}
				?>
			</h4>
			<h4>
				<?php 
				if ($grooming_cost==0) {
					echo " -";
				} else {
					echo "Rp.". number_format($grooming_cost);
				}
				?>
			</h4>
		</div>
		<?php if ($transaksi->bank == 'BCA'): ?>
				<div class="col-6 mt-5 text-center">
					<p>Bank</p>
					<h4>BCA (Bank Central Asia)</h4>
					<div class="mt-5 mb-5">
						<h4>Nama Penerima</h4>
					</div>
				</div>
				<div class="col-6 mt-5 text-center">
					<p>Rekeneing Tujuan</p>
					<h4>6567 546 4546</h4>
					<div class="mt-5 mb-5">
						<h4>Dava Petshop</h4>
					</div>
				</div>
			<?php elseif ($transaksi->bank == 'BRI'):?>
				<div class="col-6 mt-5 text-center">
					<p>Bank</p>
					<h4>BRI (Bank Rakyat Indonesai)</h4>
					<div class="mt-5 mb-5">
						<h4>Nama Penerima</h4>
					</div>
				</div>
				<div class="col-6 mt-5 text-center">
					<p>Rekeneing Tujuan</p>
					<h4>6567 546 4656</h4>
					<div class="mt-5 mb-5">
						<h4>Dava Petshop</h4>
					</div>
				</div>
			<?php elseif ($transaksi->bank == 'BNI'): ?>
				<div class="col-6 mt-5 text-center">
					<p>Bank</p>
					<h4>BNI (Bank Nasional Indonesai)</h4>
					<div class="mt-5 mb-5">
						<h4>Nama Penerima</h4>
					</div>
				</div>
				<div class="col-6 mt-5 text-center">
					<p>Rekeneing Tujuan</p>
					<h4>6567 546 5657</h4>
					<div class="mt-5 mb-5">
						<h4>Dava Petshop</h4>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	
	<div class="text-center mt-2">
			<p><i>Jumlah yang sudah Anda Bayar</i></p>
			<div class="btn btn-success">
				<h5>Rp. <?php echo number_format($total_cost);  ?></h5>
			</div> <br><br>
			<div class="btn btn-success">
				<h5>========== Sukses ===========</h5>
			</div>
	</div>

	<hr>
		<div class="container text-center mt-5">
			<p><i>silahkan cek di <b>Transaction > Grooming</b></i></p>
	</div>



</div></div>
