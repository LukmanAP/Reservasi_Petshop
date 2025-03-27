<div class="container">
	<div class="text-center mt-5">
		<h1>Pembayaran</h1>
	</div>
	<?php foreach ($transaksi as $tr): ?>
		<div class="text-center mt-5">
    <?php
    ?>
    <hr>
</div>

		<div class="row">

			<?php if ($tr->bank == 'BCA'): ?>
				<div class="col-6 text-center">
					<p>Bank</p>
					<h4>BCA (Bank Central Asia)</h4>
					<div class="mt-5 mb-5">
						<h4>Nama Penerima</h4>
					</div>
				</div>
				<div class="col-6  text-center">
					<p>Rekeneing Tujuan</p>
					<h4>6567 546 4546</h4>
					<div class="mt-5 mb-5">
						<h4>Dava Petshop</h4>
					</div>
				</div>
			<?php elseif ($tr->bank == 'BRI'):?>
				<div class="col-6  text-center">
					<p>Bank</p>
					<h4>BRI (Bank Rakyat Indonesai)</h4>
					<div class="mt-5 mb-5">
						<h4>Nama Penerima</h4>
					</div>
				</div>
				<div class="col-6  text-center">
					<p>Rekeneing Tujuan</p>
					<h4>6567 546 4656</h4>
					<div class="mt-5 mb-5">
						<h4>Dava Petshop</h4>
					</div>
				</div>
			<?php elseif ($tr->bank == 'BNI'): ?>
				<div class="col-6  text-center">
					<p>Bank</p>
					<h4>BNI (Bank Nasional Indonesai)</h4>
					<div class="mt-5 mb-5">
						<h4>Nama Penerima</h4>
					</div>
				</div>
				<div class="col-6  text-center">
					<p>Rekeneing Tujuan</p>
					<h4>6567 546 5657</h4>
					<div class="mt-5 mb-5">
						<h4>Dava Petshop</h4>
					</div>
				</div>
			<?php endif; ?>
		</div>

		<div class="text-center">
			<p><i>Jumlah yang sudah anda bayar</i></p>
			<div class="btn btn-success">
				<h5>Rp. <?php echo number_format($tr->price);  ?></h5>
			</div>
				<br><br>
			<div class="btn btn-success">
				<h5>=========Suksess============</h5>
			</div>
		</div>
		
		<?php endforeach; ?>

		<hr>
		<div class="container text-center mt-5">
			<p><i>untuk melihat status orderan anda, silahkan cek di <b>Transaction > Grooming</b></i></p>
		</div>



	
	
</div>
