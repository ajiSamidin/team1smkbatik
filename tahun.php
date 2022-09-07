
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="width: 35%">
              <div class="card-header">Klik Disini Untuk Menambahkan Tahun Pemilihan</div>
              <div class="card-footer mb-2">
                 <?php
                        if ($tambah ==  1) { ?>
                         <a href="<?=base_url('admin/create_tahun')?>"> 
                            <button type="button" class="btn btn-success btn-sm" disabled="">
                              <i class="fa fa-plus-square" aria-hidden="true" style="margin-right: 10px"></i>Tambah Tahun
                            </button>
                          </a>
                  <?php }else{ ?>
                           <a href="<?=base_url('admin/create_tahun')?>">
                             <button type="button" class="btn btn-success btn-sm" >Tambah Tahun</button>
                           </a>
                  <?php  } ?>


                 
              </div>
            </div>
            <div class="card mt-3">
              <div class="card-header bg-info">
                <h5>Data Tahun Pemilihan</h5>
              </div>
              <div class="card-body pad table-responsive">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Tahun</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            $no = 0;
                            $data_1 = 0; 
                            foreach ($list as $value) {  ?>
                              <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $value['tahun_pemilu']; ?></td>
                                <td>
                                  <?php 
                                    if ($value['status'] ==  0) {
                                        echo "Sudah Selesai";
                                    }if ($value['status'] ==  1) {
                                        echo "Berlangsung";
                                        $data_1++;
                                    }if($value['status'] ==  2){
                                      echo "Belum Di Mulai";

                                    }
                                    ?>                                           
                                </td>
                                <td>
                                  <?php 
                                    if ($value['status'] ==  0) {
                                  ?>
                                      <a href="#">
                                        <span class="btn btn-success btn-sm">Lihat Data</span>
                                      </a>
                                  <?php
                                    }if ($value['status'] ==  1) {
                                      if ($selesai == 1) { ?>
                                        <a href="<?=base_url('admin/status_tahun')?>">
                                          <button class="btn btn-primary btn-sm" >Ganti Status</button>
                                        </a>
                                      <?php }else{ ?>
                                          <a href="<?=base_url('admin/status_tahun')?>">
                                          <button class="btn btn-primary btn-sm" disabled="">Ganti Status</button>
                                        </a>
                                  <?php }
                                    }if($value['status'] ==  2){
                                      if ($data_1) {
                                  ?>
                                        <a href="<?=base_url('admin/status_tahun')?>">
                                          <button class="btn btn-warning btn-sm" disabled="">Aktifkan Pemilihan</button>
                                        </a>
                                  <?php 
                                      } else{?>

                                        <a href="<?=base_url('admin/aktif_pemilu')?>">
                                          <button class="btn btn-warning btn-sm">Aktifkan Pemilihan</button>
                                        </a>
                                  <?php }
                                  
                                    }
                                  ?>
                                </td>
                              </tr>
                            <?php } ?>
                      </tbody>
                    </table>
                  </div>
 <!--                  <div class="col-md-3">                    
                   
                  </div> -->
                </div>

              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
    </section>
  </div>
