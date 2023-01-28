<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Data Ibu Hamil</h1>
          </div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/data_ibuhamil/tambah_ibuhamil_aksi')?>">

        <div class="row">
            <div class="col-md-6">
            
            <div class="form-group">
                <label>ID Ibu Hamil</label>
                <input type="text" name="id_ibuhamil" class="form-control" >
                <?php echo form_error('id_ibuhamil','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Nama Ibu Hamil</label>
                <input type="text" name="nama_ibuhamil" class="form-control" >
                <?php echo form_error('nama_ibuhamil','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>HPHT</label>
                <input type="date" name="hpht" class="form-control" >
                <?php echo form_error('hpht','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Golongan Darah</label>
                <input type="text" name="gol_darah" class="form-control" >
                <?php echo form_error('gol_darah','<div class="text-small text-danger">','</div>') ?>
            </div>
            

            </div>
            <div class="col-md-6">
            

            <div class="form-group">
                <label>Pertama Datang</label>
                <input type="date" name="pertama_datang" class="form-control" >
                <?php echo form_error('pertama_datang','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Hamil Ke-</label>
                <input type="text" name="hamil_ke" class="form-control" >
                <?php echo form_error('hamil_ke','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value ="">--Pilih Status--</option>
                    <option value ="1">Belum Melahirkan</option>
                    <option value ="0">Sudah Melahirkan</option>
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