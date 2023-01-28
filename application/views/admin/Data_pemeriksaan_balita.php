<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Pemeriksaan Balita</h1>
          </div>

          <form class="form-inline mr-auto mb-3">
            <ul class="navbar-nav mr-3">
                <li><a href="<?php echo base_url('admin/data_pemeriksaan_balita/tambah_pemeriksaanb') ?>" class = "btn btn-primary">Tambah Data</a></li>
            </ul></form>

            <div class="navbar-form navbar-right mb-3 ">
                <?php echo form_open('admin/data_pemeriksaan_balita/search') ?>
                <input type = "text" name ="keyword" class="form-control" placeholder = "Search">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
            </div>

        
        <?php echo $this->session->flashdata('pesan') ?>
      </nav>


          <!--<a href="" class = "btn btn-primary mb-3 float-left">Tambah Data</a>

          <div class="input-group rounded mb-4 ">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
            </span>
        </div>-->
        
        <table class = "table table-hover table-striped table boarded">
            <thead>
                <tr>
                <th>No</th>
                <th>ID Pemeriksaan Balita</th>
                <th>ID Balita</th>
                <th>Nama Balita</th>
                <th>Tanggal Pemeriksaan</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Imunisasi</th>
                <th>Vitamin A</th>
                <th>Asi Eksklusif</th>
                <th>Nama Bidan</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($pemeriksaanb as $pb) : ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pb->id_periksab ?></td>
                    <td><?php echo $pb->id_balita ?></td>
                    <td><?php echo $pb->nama_balita ?></td>
                    <td><?php echo $pb->tanggal_pemeriksaan ?></td>
                    <td><?php echo $pb->berat_badan ?></td>
                    <td><?php echo $pb->tinggi_badan ?></td>
                    <td><?php echo $pb->imunisasi ?></td>
                    <td><?php echo $pb->vit_a ?></td>
                    <td><?php echo $pb->asi_eksklusif ?></td>
                    <td><?php echo $pb->nama_bidan ?></td>
                    
                    <td>
                        <a href="<?php echo base_url('admin/data_balita/detail_pemeriksaan_balita/').$pb->id_periksab ?>" class="btn btn-sm btn-success"><i class="fa fa-search-plus"></i></a>
                        <a href="<?php echo base_url('admin/data_balita/delete_pemeriksaan_balita/').$pb->id_periksab ?>" class="btn btn-sm btn-danger" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/data_balita/update_pemeriksaan_balita/').$pb->id_periksab?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                    </tr>
                <?php endforeach;?>    
                
            </tbody>
        </table>

</section>
</div>