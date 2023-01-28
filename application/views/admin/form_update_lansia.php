<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Lansia</h1>
        </div>

            <div class="card">
                <div class="card-body">

                <?php foreach ($lansia as $ln) : ?>

                    <form method="POST" action="<?php echo base_url('admin/data_lansia/update_lansia_aksi')?>">

                    <div class="row">
                    <div class="col-md-6">

                    <div class="form-group">
                    <label>ID Lansia</label>
                    <input type="text" name="id_lansia" class="form-control" value = "<?php echo $ln->id_lansia ?>">
                    <?php echo form_error('id_lansia','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group">
                    <label>Nama Lansia</label>
                    <input type="text" name="nama_lansia" class="form-control" value = "<?php echo $ln->nama_lansia ?>">
                    <?php echo form_error('nama_lansia','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group">
                    <label>Umur</label>
                    <input type="text" name="umur" class="form-control" value = "<?php echo $ln->umur ?>">
                    <?php echo form_error('umur','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    </div>

                    <div class="col-md-6">

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                        <option <?php if($ln->jenis_kelamin == "Perempuan"){echo "selected='selected'";}
                            echo $ln ->jenis_kelamin; ?> value="Perempuan">Perempuan</option>
                            <option <?php if($ln->jenis_kelamin == "Laki-laki"){echo "selected='selected'";}
                            echo $ln ->jenis_kelamin; ?> value="Laki-laki">Laki-laki</option>
                            </select>
                        <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                        </div>

                    <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value = "<?php echo $ln->alamat ?>">
                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                        <option <?php if($ln->status == "1"){echo "selected='selected'";}
                            echo $ln ->status; ?> value="1">Lansia Aktif</option>
                            <option <?php if($ln->status == "0"){echo "selected='selected'";}
                            echo $ln ->status; ?> value="0">Lansia Tidak Aktif</option>
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