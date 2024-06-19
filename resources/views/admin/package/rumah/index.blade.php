@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Master staff</h3>
			<div class="row">
				<a href="/admin/staff/form">
					<button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i> Tambah Data Staff</button>
				</a>
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Staff</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th width="100px">No Staff</th>
									<th>Nama</th>
									<th width="150px">Jabatan</th>
									<th width="100px">Kinerja</th>
									<th width="100px">Kedisiplinan</th>
									<th width="100px">Inisiatif</th>
									<th width="100px">Kerjasama</th>
									<th width="100px">Presensi</th>
									<th width="250px">Aksi</th>
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
									<td>{{ $DR->kinerja }}</td>
									<td>{{ $DR->Kedisiplinan }}</td>
									<td>{{ $DR->Inisiatif }}</td>
									<td>{{ $DR->Kerjasama }}</td>
									<td>{{ $DR->presensi }} <span>%</span></td>
									<td>
										<button type="button" class="btn btn-info btn-toastr">
											<a href="/admin/staff/formedit/{{ $DR->id }}" style="color:white;">Update</a>
										</button>
										<button type="button" class="btn btn-danger btn-toastr">
											<a href="/admin/rumah/hapusrumah/{{ $DR->tipe }}" style="color:white;">Delete</a>
										</button>
									</td>
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
				</div>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection