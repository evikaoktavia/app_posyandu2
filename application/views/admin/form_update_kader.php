<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Kader</h1>
        </div>

            <div class="card">
                <div class="card-body">

                <?php foreach ($kader as $kd) : ?>

                    <form method="POST" action="<?php echo base_url('admin/data_kader/update_kader_aksi')?>">

                    <div class="row">
                        <div class="col-md-6">
            
                            <div class="form-group">
                            <label>ID Kader</label>
                            <input type ="hidden" nama="id_kader" value="<?php echo $kd->id_kader ?>">
                            <input type="text" name="id_kader" class="form-control" value ="<?php echo $kd->id_kader ?>">
                            <?php echo form_error('id_kader','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Nama Kader</label>
                            <input type="text" name="nama_kader" class="form-control" value ="<?php echo $kd->nama_kader ?>">
                            <?php echo form_error('nama_kader','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Usia</label>
                            <input type="text" name="usia" class="form-control" value ="<?php echo $kd->usia ?>">
                            <?php echo form_error('usia','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            
                            <div class="col-md-6">
                            <div class="form-group">
                            <label>No. Telp</label>
                            <input type="text" name="no_telp" class="form-control" value ="<?php echo $kd->no_telp ?>">
                            <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value ="<?php echo $kd->alamat ?>">
                            <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
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