<div class="container">
    <div class="mt-3">
        <h3>
        <i class="fa-solid fa-cat"></i> TAMBAH DATA KUCING
        </h3>
    </div>

    <div style="max-width: 700px;">
        <form action="<?php echo site_url('cat/add_data_cat/'.$this->session->userdata('user_id')) ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mt-3">
                <label for="">Nama Kucing</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group mt-3">
                <label for="">Jenis/Ras Kucing</label>
                <input type="text" class="form-control" name="breed" required>
            </div>
            <div class="form-group mt-3">
                <label for="tgl_lhr">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_cat" id="tgl_lhr" required>
            </div>
            <div class="form-group mt-3">
                <label for="">Jenis Kelamin</label>
                <select name="gender" id="" class="form-control" required>
                    <option value="" disabled selected class="text-muted">--Pilih Jenis Kelamin--</option>
                    <option value="jantan">Jantan</option>
                    <option value="betina">Betina</option>
                </select>
            </div>
            <div class="form-group mt-3">
                <label for="">Sertifikat (opsional)</label>
                <input type="file" name="sertivikat" class="form-control">
                <small class="text-muted">Format: PDF (maks. 2MB)</small>
            </div>
            <div class="form-group mt-3">
                <label for="">Foto Kucing</label>
                <input type="file" name="image" class="form-control">
                <small class="text-muted">Format: <b>jpg|jpeg|png|gif</b>  (maks. 2MB)</small>
            </div>
            <button type="submit" class="btn btn-primary mt-3">
                <i class="fa-solid fa-plus"></i> Tambah Data Kucing
            </button>
        </form>
    </div>
</div>
