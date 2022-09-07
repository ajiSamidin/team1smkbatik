<?php  
?>
<div class="content-wrapper">
	<section class="content mt-3" >
      <div class="card" >
        <form action="<?=base_url('calon/proses_update')?>" method="post" >
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Admin </a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Anggota</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Calon</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    
							<div class="table-responsive ">
						 		<table class="table mt-1">
								  <thead class="bg-info">
								    <tr class="table-active">
								      <th scope="col">No</th>
								      <th scope="col">Nama</th>
								      <th scope="col">Status</th>
								    </tr>
								  </thead>
									<?php 
									  	$hitung = 0;
									  	$jumlah = 0;
									  	foreach ($admin as $a ) {
									  		$jumlah +=1;
								  	?>
								  	<tbody >
								  		 <tr class = 'table-active'>
								  		 	<td><?php echo ++$hitung?></td>
								  			 <td><?php echo $a['name'] ?></td>
								  			 <td>Aktif</td>
								  		 </tr>
								  	</tbody>	 
							  	<?php } ?>
								</table>
								<i><?php echo "<h5> Jumlah Admin : " .$jumlah . "</h5>" ?></i>
							</div>

						
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">                    
                      <div class="table-responsive ">
					 		<table class="table mt-1" >
							  <thead class="bg-info">
							    <tr class="table-active">
							      <th scope="col">No</th>
							      <th scope="col">Nama</th>
							      <th scope="col">Status</th>
							      <th scope="col">Putusan</th>				      
							    </tr>
							  </thead>

							  	<?php 
								  	$hitung = 0;
								  	$jumlah = 0;
								  	foreach ($anggota as $a ){
								  		$jumlah +=1; 
							  	?>
								  	<tbody>
								  		 <tr class = 'table-active'>
								  		 	<td><?php echo ++$hitung?></td>
								  			 <td><?php echo $a['name'] ?></td>
								  			 <td>Aktif</td>
								  			 <td><a href="#"><div class="btn btn-warning">Edit Status</div></a></td>
								  		 </tr>
								  	</tbody>	 
							  	<?php } ?>
							</table>
							<i><?php echo "<h5> Jumlah Anggota : " .$jumlah . "</h5>" ?></i>
						</div>
                  </div>
                  <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                 
						<div class="table-responsive ">
					 		<table class="table mt-1">
							  <thead class="bg-info">
							    <tr class="table-active">
							      <th scope="col">No</th>
							      <th scope="col">Nama</th>
							      <th scope="col">Status</th>
							      <th scope="col">Info</th>
							    </tr>
							  </thead>
								<?php 
								  	$hitung = 0;
								  	$jumlah = 0;
								  	foreach ($calon as $a ) {
								  		$jumlah +=1;
							  	?>
								  	<tbody>
								  		 <tr class = 'table-active'>
								  		 	<td><?php echo ++$hitung?></td>
								  			 <td><?php echo $a['name'] ?></td>
								  			 <td>Aktif</td>
								  			 <td><a href="#"><div class="btn btn-warning">Info Calon</div></a></td>
								  		 </tr>
								  	</tbody>	 
							  	<?php } ?>
							</table>
							<i><?php echo "<h5> Jumlah Calon Ketua Osis dan Wakil Ketua Osis : " .$jumlah . "</h5>" ?></i>
						</div>
					
              </div>
                  <!-- /.tab-pane -->
            </div>
                <!-- /.tab-content -->
          </div><!-- /.card-body -->   
      </div>
    </section>
</div>