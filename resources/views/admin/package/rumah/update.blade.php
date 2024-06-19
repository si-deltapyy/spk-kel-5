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
                                <input class="form-control" placeholder="Tipe Rumah" name="tipe" type="text" value="{{ $DR->noStaff }}" readonly>
                            </div>
                            <br>
                            <p>Nama</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Tipe Rumah" name="tipe" type="text" value="{{ $DR->nama }}">
                            </div>
                            <br>
                            <p>Jabatan</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <input class="form-control" placeholder="Tipe Rumah" name="tipe" type="text" value="{{ $DR->jabatan }}">
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
                            window.location.href = "/admin/rumah";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection