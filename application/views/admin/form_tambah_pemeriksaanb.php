<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Data Pemeriksaan Balita</h1>
          </div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/data_pemeriksaan_balita/tambah_pemeriksaanb_aksi')?>">

        <div class="row">
            <div class="col-md-6">
            
            <div class="form-group">
                <label>ID Pemeriksaan Balita</label>
                <input type="text" name="id_periksab" class="form-control" >
                <?php echo form_error('id_periksab','<div class="text-small text-danger">','</div>') ?>
            </div>


            <div class="form-group">
                <label>ID Balita</label>
                <input type="text" name="id_periksab" class="form-control" >
                <?php echo form_error('id_periksab','<div class="text-small text-danger">','</div>') ?>
            </div>


            <div class="form-group">
                <label>Nama Balita</label>
                <select name="nama_balita" class="form-control">
                    <option value="">--Pilih Balita--</option>
                    <?php foreach($balita as $blt): ?>
                        <option value="<?php echo $blt->nama_balita ?>">
                        <?php echo $blt->id_balita?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                 
            <div class="form-group">
                <label>Tanggal Pemeriksaan</label>
                <input type="text" name="bb_lahir" class="form-control" >
                <?php echo form_error('bb_lahir','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Berat Badan</label>
                <input type="text" name="panjang_lahir" class="form-control" >
                <?php echo form_error('panjang_lahir','<div class="text-small text-danger">','</div>') ?>
            </div>
            </div>
           
            <div class="col-md-6">
            <div class="form-group">
                <label>Tinggi Badan</label>
                <input type="text" name="nama_ortu" class="form-control" >
                <?php echo form_error('nama_ortu','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Imunisasi</label>
                <input type="text" name="nama_ortu" class="form-control" >
                <?php echo form_error('nama_ortu','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Vitamin A</label>
                <input type="text" name="nama_ortu" class="form-control" >
                <?php echo form_error('nama_ortu','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Asi Eksklusif</label>
                <input type="text" name="nama_ortu" class="form-control" >
                <?php echo form_error('nama_ortu','<div class="text-small text-danger">','</div>') ?>
            </div>

            <div class="form-group">
                <label>Nama Bidan</label>
                <input type="text" name="nama_ortu" class="form-control" >
                <?php echo form_error('nama_ortu','<div class="text-small text-danger">','</div>') ?>
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

