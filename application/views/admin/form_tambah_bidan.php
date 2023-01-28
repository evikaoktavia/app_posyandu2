<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Data Bidan</h1>
          </div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/data_bidan/tambah_bidan_aksi')?>">

        <div class="row">
            <div class="col-md-6">
            
            <div class="form-group">
                <label>ID Bidan</label>
                <input type="text" name="id_bidan" class="form-control" >
                <?php echo form_error('id_bidan','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Nama Bidan</label>
                <input type="text" name="nama_bidan" class="form-control" >
                <?php echo form_error('nama_bidan','<div class="text-small text-danger">','</div>') ?>
            </div>

            </div>
            <div class="col-md-6">

            <div class="form-group">
                <label>No Telp</label>
                <input type="text" name="no_telp" class="form-control" >
                <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" >
                <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
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