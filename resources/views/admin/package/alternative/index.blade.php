@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Data Alternative</h3>
            <div class="row">
                <!-- <a href="#">
                    <button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-refresh"></i> Refresh</button>
                </a> -->
                <!-- TABLE STRIPED -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Alternative</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($data_crt as $DC)
                        <form action="{{ route('postalt') }}" method="post">
                            @endforeach
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                                        <select class="form-control" name="cbname" id="cbname">
                                            @if($data_crt->count() > 0)
                                            @if(isset($data_crt))
                                            @foreach($data_crt as $DC)
                                            <option value="{{ $DC->name }}">{{ $DC->name }}</option>
                                            @endforeach
                                            @else
                                            @foreach($data_crt as $DC)
                                            <option value="{{ $DC->name }}">{{ $DC->name }}</option>
                                            @endforeach
                                            @endif
                                            @else
                                            <option value="none" disabled>Data alternative tidak tersedia</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit"><i class="fa fa-refresh"></i>Refresh</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th width="100px">ID Staff</th>
                                    <th>Nama</th>
                                    <th>Kinerja</th>
                                    <th>Kedisiplinan</th>
                                    <th>Inisiatif</th>
                                    <th>Kerjasama</th>
                                    <th>Presensi</th>
                                    <!-- <th>Hasil AHP</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @if(isset($data_pilih))
                                @if($data_pilih->count() > 0)
                                @foreach($data_pilih as $DP)
                                <tr>
                                    <td>
                                        <?php
                                        echo $no++;
                                        ?>
                                    </td>
                                    <td>{{ $DP->noStaff }}</td>
                                    <td>{{ $DP->nama }}</td>
                                    <td>{{ $DP->kinerja }}</td>
                                    <td>{{ $DP->kedisiplinan }}</td>
                                    <td>{{ $DP->inisiatif }}</td>
                                    <td>{{ $DP->kerjasama }}</td>
                                    <td>{{ $DP->presensi }} <span>%</span></td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6">Data tidak tersedia, silahkan gunakan tombol refresh.</td>
                                </tr>
                                @endif
                                @else
                                <tr>
                                    <td colspan="6">Data tidak tersedia, silahkan gunakan tombol refresh.</td>
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