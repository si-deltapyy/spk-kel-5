@extends('admin.layouts.app')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Daftar Perangkingan Staff</h3>
            <div class="row">
                <!-- TABLE STRIPED -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daftar Perangkingan Staff</h3>
                    </div>
                    <div style="margin-left: 30px;">
                        @foreach($data_max as $DM)
                        <!-- <button type="button" class="btn btn-info btn-toastr">
                            <a href="/ahp/bobot/kesimpulan/{{ $DM->noStaff }}" style="color:white;">Report</a>
                        </button> -->
                        <button type="button" class="btn btn-danger btn-toastr">
                            <a href="/ahp/bobot" style="color:white;">Hitung Ulang</a>
                        </button>
                        @endforeach
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Rangking</th>
                                    <th>ID Staff</th>
                                    <th>Kinerja</th>
                                    <th>Kedisiplinan</th>
                                    <th>Kerjasama</th>
                                    <th>Inisiatif</th>
                                    <th>Inisiatif</th>
                                    <th>AHP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no = 1; ?>
                                    @if($data_hasil->count() > 0)
                                    @foreach($data_hasil as $DH)
                                    <td>
                                        <?php
                                        echo $no++;
                                        ?>
                                    </td>
                                    <td>{{ $DH->noStaff }}</td>
                                    <td>{{ $DH->kinerja }}</td>
                                    <td>{{ $DH->kedisiplinan }}</td>
                                    <td>{{ $DH->kerjasama }}</td>
                                    <td>{{ $DH->inisiatif }}</td>
                                    <td>{{ $DH->presensi }}</td>
                                    <td>{{ $DH->ahp }}</td>
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