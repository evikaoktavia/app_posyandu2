<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Lansia</h1>
          </div>
        
          <form class="form-inline mr-auto mb-3">
            <ul class="navbar-nav mr-3">
                <li><a href="<?php echo base_url('admin/data_lansia/tambah_lansia') ?>" class = "btn btn-primary">Tambah Data</a></li>
            </ul></form>

            <div class="navbar-form navbar-right mb-3 ">
                <?php echo form_open('admin/data_lansia/search') ?>
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
                <th>ID Lansia</th>
                <th>Nama Lansia</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($lansia as $ln) : ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $ln->id_lansia ?></td>
                    <td><?php echo $ln->nama_lansia ?></td>
                    <td><?php echo $ln->umur ?></td>
                    <td><?php echo $ln->jenis_kelamin ?></td>
                    <td><?php echo $ln->alamat ?></td>
                    <td><?php 
                        if ($ln->status == "0"){
                            echo "<span class='badge badge-danger'> Lansia Tidak Aktif</span>";
                        } else {
                            echo "<span class='badge badge-success'> Lansia Aktif</span>";
                        }
                    ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/data_lansia/delete_lansia/').$ln->id_lansia ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/data_lansia/update_lansia/').$ln->id_lansia ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                    </tr>
                <?php endforeach;?>    
                
            </tbody>
        </table>

</section>
</div>