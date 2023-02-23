<div class="mt-3">
    <form action="<?= base_url('siswa/editsiswa') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="alamat">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" id="exampleFormControlInput1" placeholder="jenis_kelamin">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Agama</label>
            <input type="text" name="agama" class="form-control" id="exampleFormControlInput1" placeholder="agama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="asal_sekolah">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
</div>