<div class="container">
	<div class="mt-3">
		<h3>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
				<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
				<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
			</svg>
			Edit Layanan Grooming
		</h3>
	</div>

	<?php foreach ($layanan as $ly) : ?>
		<div style="max-width: 700px">
		<form method="post" action="<?php echo base_url().'admin/layanan_grooming/edit/'.$ly->id_grooming?>" enctype="multipart/form-data">
			<div class="form-group mt-3">
				<label for="">Nama Grooming</label>
				<input type="text" class="form-control" name="name" value="<?php echo $ly->name ?>">
			</div>
			<div class="form-group mt-3">
    			<label for="notes">Deskripsi</label>
    			<textarea class="form-control" id="notes" name="description" style="overflow: hidden; resize: none;"><?= htmlspecialchars($ly->description); ?></textarea>
			</div>
			<div class="form-group mt-3">
				<label for="">Harga</label>
				<input type="text" class="form-control" name="price" value="<?php echo $ly->price ?>">
			</div>
			<div class="form-group">
				<label for="image">Gambar</label>
				<input type="file" class="form-control" name="image" >
			</div>
			<div class="mb-5">
				<button type="submit" class="btn btn-primary">Update</button>
				<a href="<?php echo site_url('admin/layanan_grooming/layanan_grooming')?>" class="btn btn-danger ms-2">Batal</a>
			</div>
			
		<form>
		</div>
	<?php endforeach; ?>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const textarea = document.getElementById("notes");
        textarea.style.height = "auto"; // Reset height to auto
        textarea.style.height = textarea.scrollHeight + "px"; // Adjust height to fit content
    });
</script>
