<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Ibu Hamil</h1>
          </div>
        
          <form class="form-inline mr-auto mb-3">
            <ul class="navbar-nav mr-3">
                <li><a href="<?php echo base_url('admin/data_ibuhamil/tambah_ibuhamil') ?>" class = "btn btn-primary">Tambah Data</a></li>
            </ul></form>

            <div class="navbar-form navbar-right mb-3 ">
                <?php echo form_open('admin/data_ibuhamil/search') ?>
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
                <th>ID Ibu Hamil</th>
                <th>Nama Ibu Hamil</th>
                <th>HPHT</th>
                <th>Gol. Darah</th>
                <th>Pertama Datang</th>
                <th>Hamil Ke-</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($ibuhamil as $ih) : ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $ih->id_ibuhamil ?></td>
                    <td><?php echo $ih->nama_ibuhamil ?></td>
                    <td><?php echo $ih->hpht ?></td>
                    <td><?php echo $ih->gol_darah ?></td>
                    <td><?php echo $ih->pertama_datang ?></td>
                    <td><?php echo $ih->hamil_ke ?></td>
                    <td><?php 
                        if ($ih->status == "0"){
                            echo "<span class='badge badge-danger'> Sudah Melahirkan</span>";
                        } else {
                            echo "<span class='badge badge-success'> Belum Melahirkan</span>";
                        }
                    ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/data_ibuhamil/delete_ibuhamil/').$ih->id_ibuhamil ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/data_ibuhamil/update_ibuhamil/').$ih->id_ibuhamil ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                    </tr>
                <?php endforeach;?>    
                
            </tbody>
        </table>

        

</section>
</div>