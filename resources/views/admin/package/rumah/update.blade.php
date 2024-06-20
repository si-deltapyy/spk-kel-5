@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Master Rumah</h3>
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Update Data Rumah</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($data_rumah as $DR)
                        <form action="/admin/rumah/formedit/updaterumah/{id}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                                <input class="form-control" placeholder="Tipe Rumah" name="no" type="text" value="{{ $DR->noStaff }}" readonly>
                            </div>
                            <br>
                            <p>Nama</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Tipe Rumah" name="nm" type="text" value="{{ $DR->nama }}">
                            </div>
                            <br>
                            <p>Jabatan</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <input class="form-control" placeholder="Tipe Rumah" name="jab" type="text" value="{{ $DR->jabatan }}">
                            </div>
                            <br>
                            <h4>Penilaian Staff</h4>
                            <p>Kinerja</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select  class="form-control" name="kin" id="">
                                    <option value="Kurang" {{ $DR->kinerja == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                                    <option value="Baik" {{ $DR->kinerja == 'Baik' ? 'selected' : '' }}>Baik</option>
                                    <option value="Sangat Baik" {{ $DR->kinerja == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                                </select>
                            </div>
                            <br>
                            <p>Kedisiplinan</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select  class="form-control" name="ked" id="">
                                    <option value="Kurang" {{ $DR->kedisiplinan == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                                    <option value="Baik" {{ $DR->kedisiplinan == 'Baik' ? 'selected' : '' }}>Baik</option>
                                    <option value="Sangat Baik" {{ $DR->kedisiplinan == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                                </select>
                            </div>
                            <br>
                            <p>Inisiatif</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select  class="form-control" name="ini" id="">
                                    <option value="Kurang" {{ $DR->inisiatif == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                                    <option value="Baik" {{ $DR->inisiatif == 'Baik' ? 'selected' : '' }}>Baik</option>
                                    <option value="Sangat Baik" {{ $DR->inisiatif == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                                </select>
                            </div>
                            <br>
                            <p>Kerjasama</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select  class="form-control" name="ker" id="">
                                    <option value="Kurang" {{ $DR->kerjasama == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                                    <option value="Baik" {{ $DR->kerjasama == 'Baik' ? 'selected' : '' }}>Baik</option>
                                    <option value="Sangat Baik" {{ $DR->kerjasama == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                                </select>
                            </div>
                            <br>
                            <p>Presensi</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                <input class="form-control" name="pre" type="number" value="{{ $DR->presensi }}">
                                <span class="input-group-addon">%</span>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning btn-block" onclick="kembalirumah();">Cancel</button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    <!-- Script -->
                    <script>
                        function kembalirumah() {
                            window.location.href = "/admin/staff";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection