<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Balita</h1>
          </div>

          <form class="form-inline mr-auto mb-3">
            <ul class="navbar-nav mr-3">
                <li><a href="<?php echo base_url('admin/data_balita/tambah_balita') ?>" class = "btn btn-primary">Tambah Data</a></li>
            </ul></form>

            <div class="navbar-form navbar-right mb-3 ">
                <?php echo form_open('admin/data_balita/search') ?>
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
                <th>ID Balita</th>
                <th>Nama Balita</th>
                <th>Anak Ke</th>
                <th>BB Lahir</th>
                <th>Panjang Lahir</th>
                <th>Nama Ortu</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>RT</th>
                <th>RW</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($balita as $blt) : ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $blt->id_balita ?></td>
                    <td><?php echo $blt->nama_balita ?></td>
                    <td><?php echo $blt->anak_ke ?></td>
                    <td><?php echo $blt->bb_lahir ?></td>
                    <td><?php echo $blt->panjang_lahir ?></td>
                    <td><?php echo $blt->nama_ortu ?></td>
                    <td><?php echo $blt->tgl_lahir ?></td>
                    <td><?php echo $blt->jenis_kelamin ?></td>
                    <td><?php echo $blt->rt ?></td>
                    <td><?php echo $blt->rw ?></td>
                    <td><?php 
                        if ($blt->status == "0"){
                            echo "<span class='badge badge-danger'> Tidak Aktif</span>";
                        } else {
                            echo "<span class='badge badge-success'> Balita Aktif</span>";
                        }
                    ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/data_balita/detail_balita/').$blt->id_balita ?>" class="btn btn-sm btn-success"><i class="fa fa-search-plus"></i></a>
                        <a href="<?php echo base_url('admin/data_balita/delete_balita/').$blt->id_balita ?>" class="btn btn-sm btn-danger" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/data_balita/update_balita/').$blt->id_balita ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                    </tr>
                <?php endforeach;?>    
                
            </tbody>
        </table>

</section>
</div>