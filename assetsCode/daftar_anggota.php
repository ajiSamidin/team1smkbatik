<?php  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.card {
			width: 80%;
			margin : auto;
		}
		a.link{
			color : black;
			font-weight: bolder;
			font-size: 15px;
			transition-duration: 0.5s;
		}
		a.link:hover {
			color : black;
			font-size: 17px;
		}
		table {
		  border-collapse: collapse;
		  border-spacing: 0;
		  width: 100%;
		  border: 1px solid #ddd;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

tr:nth-child(even){background-color: #f2f2f2}
		/*mode tablet*/

		@media screen and (max-width: 992px) {

		}@media screen and (max-width: 798px) {

		}

		/*mode hp*/
		@media screen and (max-width: 450px) {
			table.table.table-bordered thead th{
				width: 10px;
			}
		}
	</style>
</head>
<body>		
<div class="card mt-3">
	<div class="card-header">
		<h3 class="card-title">Total:1 Admin</h3>
	</div>
	<div class="card-body">
		<div class="admin"></div>
		<div class="table-container">
			<table class="table table-bordered" style="margin-bottom: 50px; width: 50%">
				<tr style="text-align: center;">
					<th>Nama</th>
					<th>Status</th>
				</tr>
			<tbody>
				<tr>
					<td>You</td>
					<td>Aktif</td>
				</tr>
		
			</tbody>
			</table>
		</div>
	</div>
</div>	

<div class="card mt-3">'
	<div class="card-header">
		<div class="anggota">
			<h3 class="card-title">Total:3 Anggota</h3>
		</div>
	</div>
	<div class="card-body">
	
		<div class="table-container">
			<table class="table table-bordered" >
				<thead>
					<tr style=" text-align: center;">
						<th style="width: 10px;">NO</th>
						<th>Username</th>
						<th>Status</th>
						<th>Putusan</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1.</td>
						<td>Samidin</td>
						<td>aktif</td>
						<td class="btn-warning" style=""><a href="#" class="link">Edit Status</a></span></td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Sayu</td>
						<td>nonaktif</td>
						<td class="btn-warning" style=""><a href="#" class="link">Edit Status</a></span></td>
					</tr>
					<tr>
						<td>3.</td>
						<td>Romlah</td>
						<td>nonaktif</td>
						<td class="btn-warning" style="width: 50%"><a href="#" class="link">Edit Status</a></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card mt-3">
	<div class="card-header">
		<h3 class="card-title">Total:3 calon</h3>
	</div>
	<div class="card-body">
		<div class="admin">
			<table class="table table-bordered" style="margin-bottom: 50px; width: 50%">
				<thead>
					<tr style="text-align: center;">
					<th style="width: 10px;">NO</th>
						<th>Username(password)</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1.</td>
						<td>Calon01(123acd)</td>
						<td>aktif</td>
					</tr>
				</tbody>
					
			</table>
		</div>
	</div>
</div>