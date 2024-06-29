@extends('admin.layouts.app')
@section('content')
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Data Terupdate</h3>
					<p class="panel-subtitle">
						<?php
						date_default_timezone_set('Asia/Jakarta');
						$tanggal = date("d/m/Y h:i:s");
						echo $tanggal;
						?>
					</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-thumbs-up"></i></span>
								<p>
									<span class="number"><?php echo $jml_alternative; ?></span>
									<span class="title">Data Staff</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-user"></i></span>
								<p>
									<span class="number"><?php echo $jml_user; ?></span>
									<span class="title">Data User</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-bar-chart"></i></span>
								<p>
									<span class="number"><?php echo $jml_kriteria; ?></span>
									<span class="title">Data Kriteria</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-line-chart"></i></span>
								<p>
									<span class="number"><?php echo $jml_sub; ?></span>
									<span class="title">Data Sub Kriteria</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END OVERVIEW -->
			<div class="row">
				<div class="col-md-6">
					<!-- RECENT PURCHASES -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data User Terbaru</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Lengkap</th>
										<th>Email</th>
										<th>Role</th>
										<th>Data Terbaru</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									@if($data_user->count() > 0)
									@foreach($data_user as $DU)
									<tr>
										<td>
											<?php
											echo $no++;
											?>
										</td>
										<td>{{ $DU->name }}</td>
										<td>{{ $DU->email }}</td>
										<td>{{ $DU->role }}</td>
										<th>{{ $DU->created_at }}</th>
									</tr>
									@endforeach
									@else
									<tr>
										<td colspan="6">Data tidak tersedia</td>
									</tr>
									@endif
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
								<div class="col-md-6 text-right"><a href="/admin/user" class="btn btn-primary">View All Activites</a></div>
							</div>
						</div>
					</div>
					<!-- END RECENT PURCHASES -->
				</div>
				<div class="col-md-6">
					<!-- RECENT PURCHASES -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Alternative Terbaru</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th width="100px">ID Staff</th>
										<th>Nama</th>
										<th>Jabatan</th>
										<!-- <th width="90px">Luas Tanah</th>
										<th>Harga</th>
										<th>Garasi</th> -->
										<!-- <th>Keterangan</th> -->
										<!-- <th>Gambar Rumah</th> -->
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									@if($data_rumah->count() > 0)
									@foreach($data_rumah as $DR)
									<tr>
										<td>
											<?php
											echo $no++;
											?>
										</td>
										<td>{{ $DR->noStaff }}</td>
										<td>{{ $DR->nama }}</td>
										<td>{{ $DR->jabatan }}</td>
										<!-- <td>{{ $DR->luas }} M<sup>2</sup></td>
										<td>Rp. {{ $DR->harga }}</td>
										<td>{{ $DR->garasi }}</td>
										<td>{{ $DR->keterangan }}</td> -->
										<!-- <td style="word-break: break-all">{{ $DR->gambar }}</td> -->
									</tr>
									@endforeach
									@else
									<tr>
										<td colspan="6">Data tidak tersedia</td>
									</tr>
									@endif
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
								<div class="col-md-6 text-right"><a href="/admin/staff" class="btn btn-primary">View All Activites</a></div>
							</div>
						</div>
					</div>
					<!-- END RECENT PURCHASES -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection