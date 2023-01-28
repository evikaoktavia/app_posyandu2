<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Data Kegiatan</h1>
          </div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/data_kegiatan/tambah_kegiatan_aksi')?>" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-6">
            
            <div class="form-group">
                <label>ID Kegiatan</label>
                <input type="text" name="id_kegiatan" class="form-control" >
                <?php echo form_error('id_kegiatan','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Tanggal Kegiatan</label>
                <input type="date" name="tanggal_kegiatan" class="form-control" >
                <?php echo form_error('tanggal_kegiatan','<div class="text-small text-danger">','</div>') ?>
            </div>

            </div>
            <div class="col-md-6">

            <div class="form-group">
                <label>Gambar PMT</label>
                <input type="file" name="gambar_pmt" class="form-control" >
                
            </div>

            <div class="form-group">
                <label>Nama Bidan</label>
                <input type="text" name="nama_bidan" class="form-control" >
                <?php echo form_error('nama_bidan','<div class="text-small text-danger">','</div>') ?>
            </div>

            <button type="submit" class="btn btn-primary mt-4" >Simpan</button>
            <button type="reset" class="btn btn-danger mt-4 " >Reset</button>
            
            </div>
        </div>
        </form>
    </div>
</div>

</section>
</div>