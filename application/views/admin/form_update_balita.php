<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Balita</h1>
        </div>

            <div class="card">
                <div class="card-body">

                <?php foreach ($balita as $blt) : ?>

                    <form method="POST" action="<?php echo base_url('admin/data_balita/update_balita_aksi')?>">

                    <div class="row">
                        <div class="col-md-6">
            
                            <div class="form-group">
                            <label>ID Balita</label>
                            <input type ="hidden" nama="id_balita" value="<?php echo $blt->id_balita ?>">
                            <input type="text" name="id_balita" class="form-control" value ="<?php echo $blt->id_balita ?>">
                            <?php echo form_error('id_balita','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Nama Balita</label>
                            <input type="text" name="nama_balita" class="form-control" value ="<?php echo $blt->nama_balita ?>">
                            <?php echo form_error('nama_balita','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Anak Ke</label>
                            <input type="text" name="anak_ke" class="form-control" value ="<?php echo $blt->anak_ke ?>">
                            <?php echo form_error('anak_ke','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>BB Lahir</label>
                            <input type="text" name="bb_lahir" class="form-control" value ="<?php echo $blt->bb_lahir ?>">
                            <?php echo form_error('bb_lahir','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Panjang Lahir</label>
                            <input type="text" name="panjang_lahir" class="form-control" value ="<?php echo $blt->panjang_lahir ?>">
                            <?php echo form_error('panjang_lahir','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Nama Ortu</label>
                            <input type="text" name="nama_ortu" class="form-control" value ="<?php echo $blt->nama_ortu ?>">
                            <?php echo form_error('nama_ortu','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value ="<?php echo $blt->tgl_lahir ?>">
                            <?php echo form_error('tgl_lahir','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                            <option <?php if($blt->jenis_kelamin == "Perempuan"){echo "selected='selected'";}
                            echo $blt ->jenis_kelamin; ?> value="Perempuan">Perempuan</option>

                            <option <?php if($blt->jenis_kelamin == "Laki-laki"){echo "selected='selected'";}
                            echo $blt ->jenis_kelamin; ?> value="Laki-laki">Laki-laki</option>
                            </select>
                            <?php echo form_error('jenis_kelamin','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>RT</label>
                            <input type="text" name="rt" class="form-control" value ="<?php echo $blt->rt ?>">
                            <?php echo form_error('rt','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>RW</label>
                            <input type="text" name="rw" class="form-control" value ="<?php echo $blt->rw ?>">
                            <?php echo form_error('rw','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                            <option <?php if($blt->status == "1"){echo "selected='selected'";}
                            echo $blt ->status; ?> value="1">Balita Aktif</option>
                            <option <?php if($blt->status == "0"){echo "selected='selected'";}
                                echo $blt ->status; ?> value="0">Tidak Aktif</option>
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