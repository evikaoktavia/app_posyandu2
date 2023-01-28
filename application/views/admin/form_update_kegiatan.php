<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Kegiatan</h1>
        </div>

            <div class="card">
                <div class="card-body">

                <?php foreach ($kegiatan as $kg) : ?>

                    <form method="POST" action="<?php echo base_url('admin/data_kegiatan/update_kegiatan_aksi')?>">

                    <div class="row">
                        <div class="col-md-6">
            
                            <div class="form-group">
                            <label>ID Kegiatan</label>
                            <input type ="hidden" nama="id_kegiatan" value="<?php echo $kg->id_kegiatan ?>">
                            <input type="text" name="id_kegiatan" class="form-control" value ="<?php echo $kg->id_kegiatan ?>">
                            <?php echo form_error('id_kegiatan','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" name="tanggal_kegiatan" class="form-control" value ="<?php echo $kg->tanggal_kegiatan ?>">
                            <?php echo form_error('tanggal_kegiatan','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            
                            <div class="col-md-6">
                            <div class="form-group">
                            <label>Gambar PMT</label>
                            <input type="file" name="gambar_pmt" class="form-control" value ="<?php echo $kg->gambar_pmt ?>">
                            <?php echo form_error('gambar_pmt','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Nama Bidan</label>
                            <input type="text" name="nama_bidan" class="form-control" value ="<?php echo $kg->nama_bidan ?>">
                            <?php echo form_error('nama_bidan','<div class="text-small text-danger">','</div>') ?>
                            </div>

                    <button type="submit" class="btn btn-primary mt-4" >Simpan</button>
                    <button type="reset" class="btn btn-danger mt-4 " >Reset</button>
                        </div>

                    </div>
                </form>
                
            <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>