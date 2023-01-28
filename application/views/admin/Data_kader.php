<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Kader</h1>
          </div>

          <form class="form-inline mr-auto mb-3">
            <ul class="navbar-nav mr-3">
                <li><a href="<?php echo base_url('admin/data_kader/tambah_kader') ?>" class = "btn btn-primary">Tambah Data</a></li>
            </ul></form>

            <div class="navbar-form navbar-right mb-3 ">
                <?php echo form_open('admin/data_kader/search') ?>
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
                <th>ID Kader</th>
                <th>Nama Kader</th>
                <th>Usia</th>
                <th>No. Telp</th>
                <th>Alamat</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($kader as $kd) : ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $kd->id_kader ?></td>
                    <td><?php echo $kd->nama_kader ?></td>
                    <td><?php echo $kd->usia ?></td>
                    <td><?php echo $kd->no_telp ?></td>
                    <td><?php echo $kd->alamat ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/data_kader/detail_kader/').$kd->id_kader ?>" class="btn btn-sm btn-success"><i class="fa fa-search-plus"></i></a>
                        <a href="<?php echo base_url('admin/data_kader/delete_kader/').$kd->id_kader?>" class="btn btn-sm btn-danger" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/data_kader/update_kader/').$kd->id_kader?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                    </tr>
                <?php endforeach;?>    
                
            </tbody>
        </table>

</section>
</div>