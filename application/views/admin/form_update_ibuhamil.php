<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Ibu Hamil</h1>
        </div>

            <div class="card">
                <div class="card-body">

                <?php foreach ($ibuhamil as $ih) : ?>

                    <form method="POST" action="<?php echo base_url('admin/data_ibuhamil/update_ibuhamil_aksi')?>">

                    <div class="row">
                    <div class="col-md-6">
            
                        <div class="form-group">
                        <label>ID Ibu Hamil</label>
                        <input type="text" name="id_ibuhamil" class="form-control" value = "<?php echo $ih->id_ibuhamil ?>">
                        <?php echo form_error('id_ibuhamil','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                        <label>Nama Ibu Hamil</label>
                        <input type="text" name="nama_ibuhamil" class="form-control" value = "<?php echo $ih->nama_ibuhamil?>">
                        <?php echo form_error('nama_ibuhamil','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                        <label>HPHT</label>
                        <input type="date" name="hpht" class="form-control" value = "<?php echo $ih->hpht ?>">
                        <?php echo form_error('hpht','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                        <label>Golongan Darah</label>
                        <input type="text" name="gol_darah" class="form-control" value = "<?php echo $ih->gol_darah ?>">
                        <?php echo form_error('gol_darah','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>

                    <div class="col-md-6">
            
                        <div class="form-group">
                        <label>Pertama Datang</label>
                        <input type="date" name="pertama_datang" class="form-control" value = "<?php echo $ih->pertama_datang ?>">
                        <?php echo form_error('pertama_datang','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                        <label>Hamil Ke-</label>
                        <input type="text" name="hamil_ke" class="form-control" value = "<?php echo $ih->hamil_ke ?>">
                        <?php echo form_error('hamil_ke','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                        <option <?php if($ih->status == "1"){echo "selected='selected'";}
                            echo $ih ->status; ?> value="1">Belum Melahirkan</option>
                            <option <?php if($ih->status == "0"){echo "selected='selected'";}
                            echo $ih ->status; ?> value="0">Sudah Melahirkan</option>
                            </select>
                        <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
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