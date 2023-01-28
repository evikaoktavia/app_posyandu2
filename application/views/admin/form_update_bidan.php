<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Bidan</h1>
        </div>

            <div class="card">
                <div class="card-body">

                <?php foreach ($bidan as $bdn) : ?>

                    <form method="POST" action="<?php echo base_url('admin/data_kader/update_bidan_aksi')?>">

                    <div class="row">
                        <div class="col-md-6">
            
                            <div class="form-group">
                            <label>ID Bidan</label>
                            <input type ="hidden" nama="id_bidan" value="<?php echo $bdn->id_bidan ?>">
                            <input type="text" name="id_bidan" class="form-control" value ="<?php echo $bdn->id_bidan ?>">
                            <?php echo form_error('id_kader','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Nama Bidan</label>
                            <input type="text" name="nama_bidan" class="form-control" value ="<?php echo $bdn->nama_bidan ?>">
                            <?php echo form_error('nama_bidan','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            
                            <div class="col-md-6">
                            <div class="form-group">
                            <label>No. Telp</label>
                            <input type="text" name="no_telp" class="form-control" value ="<?php echo $bdn->no_telp ?>">
                            <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value ="<?php echo $bdn->alamat ?>">
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