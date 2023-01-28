<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Data Balita</h1>
          </div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/data_balita/tambah_balita_aksi')?>">

        <div class="row">
            <div class="col-md-6">
            
            <div class="form-group">
                <label>ID Balita</label>
                <input type="text" name="id_balita" class="form-control" >
                <?php echo form_error('id_balita','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Nama Balita</label>
                <input type="text" name="nama_balita" class="form-control" >
                <?php echo form_error('nama_balita','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Anak Ke</label>
                <input type="text" name="anak_ke" class="form-control" >
                <?php echo form_error('anak_ke','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>BB Lahir</label>
                <input type="text" name="bb_lahir" class="form-control" >
                <?php echo form_error('bb_lahir','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Panjang Lahir</label>
                <input type="text" name="panjang_lahir" class="form-control" >
                <?php echo form_error('panjang_lahir','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Nama Ortu</label>
                <input type="text" name="nama_ortu" class="form-control" >
                <?php echo form_error('nama_ortu','<div class="text-small text-danger">','</div>') ?>
            </div>
            

            </div>
            <div class="col-md-6">
            
            

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" >
                <?php echo form_error('tgl_lahir','<div class="text-small text-danger">','</div>') ?>
            </div>

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
                <label>RT</label>
                <input type="text" name="rt" class="form-control" >
                <?php echo form_error('rt','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>RW</label>
                <input type="text" name="rw" class="form-control" >
                <?php echo form_error('rw','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value ="">--Pilih Status--</option>
                    <option value ="1">Balita Aktif</option>
                    <option value ="0">Tidak Aktif</option>
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