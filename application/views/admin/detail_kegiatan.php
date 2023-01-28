<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Kegiatan</h1>
          </div>

          <div class="card">
          <div class="card-body">
              <th> Gambar PMT</th>
              <div class="row">
                <img width = "600px" src="<?php echo base_url('assets/upload/'.$detail->gambar_pmt) ?>">

            <table class="table">
            <tr>
                <th>ID Kegiatan</th>
                <td><?php echo $detail->id_kegiatan?></td>
            </tr>

            <tr>
                <th>Tanggal Kegiatan</th>
                <td><?php echo $detail->tanggal_kegiatan?></td>
            </tr>

            <tr>
                <th>Nama Bidan</th>
                <td><?php echo $detail->nama_bidan?></td>
            </tr>
            </table>

          
            </div>
          
            </div>

</section>
</div>
        