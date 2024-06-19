@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Perhitungan Matriks</h3>
			<div class="row">
				<div class="panel col-md-6 col-md-offset-3">
					<div class="panel-heading">
						<h3 class="panel-title">Nilai Perbandingan Matriks</h3>
					</div>
					<div class="panel-body">
						<form action="{{ route('postbobot') }}" method="post">
							@csrf
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nama Kriteria 1</th>
										<th>Nilai Banding</th>
										<th>Nama Kriteria 2</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Kinerja</td>
										<td>
											<select class="form-control" name="cbhg">
												<option value="1">Kinerja Sama Penting dengan Presensi (Nilai = 1)</option>
												<option value="2">Kinerja Lebih Penting daripada Presensi (Nilai = 2)</option>
												<option value="3">Kinerja Sangat Penting daripada Presensi (Nilai = 3)</option>
											</select>
										</td>
										<td>Presensi</td>
									</tr>
									<tr>
										<td>Kinerja</td>
										<td>
											<select class="form-control" name="cbhs">
												<option value="1">Kinerja Sama Penting dengan Kedisiplinan (Nilai = 1)</option>
												<option value="2">Kinerja Lebih Penting daripada Kedisiplinan (Nilai = 2)</option>
												<option value="3">Kinerja Sangat Penting daripada Kedisiplinan (Nilai = 3)</option>
											</select>
										</td>
										<td>Kedisiplinan</td>
									</tr>
									<tr>
										<td>Kinerja</td>
										<td>
											<select class="form-control" name="cbhk">
												<option value="1">Kinerja Sama Penting dengan Inisiatif (Nilai = 1)</option>
												<option value="2">Kinerja Lebih Penting daripada Inisiatif (Nilai = 2)</option>
												<option value="3">Kinerja Sangat Penting daripada Inisiatif (Nilai = 3)</option>
											</select>
										</td>
										<td>Inisiatif</td>
									</tr>
									<tr>
										<td>Kinerja</td>
										<td>
											<select class="form-control" name="cbhl">
												<option value="1">Kinerja Sama Penting dengan Kerjasama (Nilai = 1)</option>
												<option value="2">Kinerja Lebih Penting daripada Kerjasama (Nilai = 2)</option>
												<option value="3">Kinerja Sangat Penting daripada Kerjasama (Nilai = 3)</option>
											</select>
										</td>
										<td>Kerjasama</td>
									</tr>
									<tr>
										<td>Presensi</td>
										<td>
											<select class="form-control" name="cbgh">
												<option value="1">Presensi Sama Penting dengan Kinerja (Nilai = 1)</option>
												<option value="2">Presensi Lebih Penting daripada Kinerja (Nilai = 2)</option>
												<option value="3">Presensi Sangat Penting daripada Kinerja (Nilai = 3)</option>
											</select>
										</td>
										<td>Kinerja</td>
									</tr>
									<tr>
										<td>Presensi</td>
										<td>
											<select class="form-control" name="cbgs">
												<option value="1">Presensi Sama Penting dengan Kedisiplinan (Nilai = 1)</option>
												<option value="2">Presensi Lebih Penting daripada Kedisiplinan (Nilai = 2)</option>
												<option value="3">Presensi Sangat Penting daripada Kedisiplinan (Nilai = 3)</option>
											</select>
										</td>
										<td>Kedisiplinan</td>
									</tr>
									<tr>
										<td>Presensi</td>
										<td>
											<select class="form-control" name="cbgk">
												<option value="1">Presensi Sama Penting dengan Inisiatif (Nilai = 1)</option>
												<option value="2">Presensi Lebih Penting daripada Inisiatif (Nilai = 2)</option>
												<option value="3">Presensi Sangat Penting daripada Inisiatif (Nilai = 3)</option>
											</select>
										</td>
										<td>Inisiatif</td>
									</tr>
									<tr>
										<td>Presensi</td>
										<td>
											<select class="form-control" name="cbgl">
												<option value="1">Presensi Sama Penting dengan Kerjasama (Nilai = 1)</option>
												<option value="2">Presensi Lebih Penting daripada Kerjasama (Nilai = 2)</option>
												<option value="3">Presensi Sangat Penting daripada Kerjasama (Nilai = 3)</option>
											</select>
										</td>
										<td>Kerjasama</td>
									</tr>
									<tr>
										<td>Kedisiplinan</td>
										<td>
											<select class="form-control" name="cbsh">
												<option value="1">Kedisiplinan Sama Penting dengan Kinerja (Nilai = 1)</option>
												<option value="2">Kedisiplinan Lebih Penting daripada Kinerja (Nilai = 2)</option>
												<option value="3">Kedisiplinan Sangat Penting daripada Kinerja (Nilai = 3)</option>
											</select>
										</td>
										<td>Kinerja</td>
									</tr>
									<tr>
										<td>Kedisiplinan</td>
										<td>
											<select class="form-control" name="cbsg">
												<option value="1">Kedisiplinan Sama Penting dengan Presensi (Nilai = 1)</option>
												<option value="2">Kedisiplinan Lebih Penting daripada Presensi (Nilai = 2)</option>
												<option value="3">Kedisiplinan Sangat Penting daripada Presensi (Nilai = 3)</option>
											</select>
										</td>
										<td>Presensi</td>
									</tr>
									<tr>
										<td>Kedisiplinan</td>
										<td>
											<select class="form-control" name="cbsk">
												<option value="1">Kedisiplinan Sama Penting dengan Inisiatif (Nilai = 1)</option>
												<option value="2">Kedisiplinan Lebih Penting daripada Inisiatif (Nilai = 2)</option>
												<option value="3">Kedisiplinan Sangat Penting daripada Inisiatif (Nilai = 3)</option>
											</select>
										</td>
										<td>Inisiatif</td>
									</tr>
									<tr>
										<td>Kedisiplinan</td>
										<td>
											<select class="form-control" name="cbsl">
												<option value="1">Kedisiplinan Sama Penting dengan Kerjasama (Nilai = 1)</option>
												<option value="2">Kedisiplinan Lebih Penting daripada Kerjasama (Nilai = 2)</option>
												<option value="3">Kedisiplinan Sangat Penting daripada Kerjasama (Nilai = 3)</option>
											</select>
										</td>
										<td>Kerjasama</td>
									</tr>
									<tr>
										<td>Inisiatif</td>
										<td>
											<select class="form-control" name="cbkh">
												<option value="1">Inisiatif Sama Penting dengan Kinerja (Nilai = 1)</option>
												<option value="2">Inisiatif Lebih Penting daripada Kinerja (Nilai = 2)</option>
												<option value="3">Inisiatif Sangat Penting daripada Kinerja (Nilai = 3)</option>
											</select>
										</td>
										<td>Kinerja</td>
									</tr>
									<tr>
										<td>Inisiatif</td>
										<td>
											<select class="form-control" name="cbkg">
												<option value="1">Inisiatif Sama Penting dengan Presensi (Nilai = 1)</option>
												<option value="2">Inisiatif Lebih Penting daripada Presensi (Nilai = 2)</option>
												<option value="3">Inisiatif Sangat Penting daripada Presensi (Nilai = 3)</option>
											</select>
										</td>
										<td>Presensi</td>
									</tr>
									<tr>
										<td>Inisiatif</td>
										<td>
											<select class="form-control" name="cbks">
												<option value="1">Inisiatif Sama Penting dengan Kedisiplinan (Nilai = 1)</option>
												<option value="2">Inisiatif Lebih Penting daripada Kedisiplinan (Nilai = 2)</option>
												<option value="3">Inisiatif Sangat Penting daripada Kedisiplinan (Nilai = 3)</option>
											</select>
										</td>
										<td>Kedisiplinan</td>
									</tr>
									<tr>
										<td>Inisiatif</td>
										<td>
											<select class="form-control" name="cbkl">
												<option value="1">Inisiatif Sama Penting dengan Kerjasama (Nilai = 1)</option>
												<option value="2">Inisiatif Lebih Penting daripada Kerjasama (Nilai = 2)</option>
												<option value="3">Inisiatif Sangat Penting daripada Kerjasama (Nilai = 3)</option>
											</select>
										</td>
										<td>Kerjasama</td>
									</tr>
									<tr>
										<td>Kerjasama</td>
										<td>
											<select class="form-control" name="cblh">
												<option value="1">Kerjasama Sama Penting dengan Kinerja (Nilai = 1)</option>
												<option value="2">Kerjasama Lebih Penting daripada Kinerja (Nilai = 2)</option>
												<option value="3">Kerjasama Sangat Penting daripada Kinerja (Nilai = 3)</option>
											</select>
										</td>
										<td>Kinerja</td>
									</tr>
									<tr>
										<td>Kerjasama</td>
										<td>
											<select class="form-control" name="cblg">
												<option value="1">Kerjasama Sama Penting dengan Presensi (Nilai = 1)</option>
												<option value="2">Kerjasama Lebih Penting daripada Presensi (Nilai = 2)</option>
												<option value="3">Kerjasama Sangat Penting daripada Presensi (Nilai = 3)</option>
											</select>
										</td>
										<td>Presensi</td>
									</tr>
									<tr>
										<td>Kerjasama</td>
										<td>
											<select class="form-control" name="cblk">
												<option value="1">Kerjasama Sama Penting dengan Inisiatif (Nilai = 1)</option>
												<option value="2">Kerjasama Lebih Penting daripada Inisiatif (Nilai = 2)</option>
												<option value="3">Kerjasama Sangat Penting daripada Inisiatif (Nilai = 3)</option>
											</select>
										</td>
										<td>Inisiatif</td>
									</tr>
									<tr>
										<td>Kerjasama</td>
										<td>
											<select class="form-control" name="cbls">
												<option value="1">Kerjasama Sama Penting dengan Kedisiplinan (Nilai = 1)</option>
												<option value="2">Kerjasama Lebih Penting daripada Kedisiplinan (Nilai = 2)</option>
												<option value="3">Kerjasama Sangat Penting daripada Kedisiplinan (Nilai = 3)</option>
											</select>
										</td>
										<td>Kedisiplinan</td>
									</tr>
								</tbody>
								<br>
							</table>
							<div class="row">
								<div class="col-md-6">
									<button type="submit" class="btn btn-primary btn-block">Hitung</button>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-warning btn-block" onclick="kembalibobot();">Cancel</button>
								</div>
							</div>
						</form>
					</div>
					<script>
                        function kembalibobot() {
                            window.location.href = "/admin/alternative";
                        }
                    </script>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection