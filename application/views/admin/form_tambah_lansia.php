<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Data Lansia</h1>
          </div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/data_lansia/tambah_lansia_aksi')?>">

        <div class="row">
            <div class="col-md-6">
            
            <div class="form-group">
                <label>ID Lansia</label>
                <input type="text" name="id_lansia" class="form-control" >
                <?php echo form_error('id_lansia','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Nama Lansia</label>
                <input type="text" name="nama_lansia" class="form-control" >
                <?php echo form_error('nama_lansia','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Umur</label>
                <input type="text" name="umur" class="form-control" >
                <?php echo form_error('umur','<div class="text-small text-danger">','</div>') ?>
            </div>
            </div>

            <div class="col-md-6">

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value ="">--Pilih Jenis Kelamin--</option>
                    <option value ="Perempuan">Perempuan</option>
                    <option value ="Laki-laki">Laki-laki</option>
                </select>
                <?php echo form_error('jenis_kelamin','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" >
                <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value ="">--Pilih Status--</option>
                    <option value ="1">Lansia Aktif </option>
                    <option value ="0">Lansia Tidak Aktif</option>
                </select>
                <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
            </div>

            <button type="submit" class="btn btn-primary mt-4" >Simpan</button>
            <button type="reset" class="btn btn-danger mt-4 " >Reset</button>
            </form>
            </div>
        </div>
        </form>
    </div>
</div>

</section>
</div>