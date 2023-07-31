@extends('layout.Base')
@section('content')

<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-blue">{{ $data['total_pegawai'] }} Pegawai</h4>
                    <h6 class="text-muted m-b-0">Total pegawai Keseluruhan</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="feather icon-user f-28"></i>
                </div>
            </div>
        </div>
        <a href="{{route('pages.pegawai')}}">
            <div class="card-footer bg-c-blue" >
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-corner-down-left text-white f-16"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-green">{{ $data['total_hadir'] }} Pegawai</h4>
                    <h6 class="text-muted m-b-0">Total pegawai Hadir</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="feather icon-user-check f-28"></i>
                </div>
            </div>
        </div>
        <a href="{{route('pages.kehadiran')}}">
            <div class="card-footer bg-c-green">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-corner-down-left text-white f-16"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-red">{{ $data['total_tidak_hadir'] }} Pegawai</h4>
                    <h6 class="text-muted m-b-0">Total pegawai Tidak Hadir</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="feather icon-user-x f-28"></i>
                </div>
            </div>
        </div>
        <a href="{{route('pages.kehadiran')}}">
            <div class="card-footer bg-c-red">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-corner-down-left text-white f-16"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Rekapan Absensi</h4>
                </div>
                <div class="card-body">
                    <!-- Form Filter -->
                    <form action="{{ route('pages.dashboard') }}" method="GET" class="mb-4">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="year">Tahun:</label>
                                <select name="year" id="year" class="form-control">
                                    @for ($y = date('Y'); $y >= 2020; $y--)
                                        <option value="{{ $y }}" @if($year == $y) selected @endif>{{ $y }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="month">Bulan:</label>
                                <select name="month" id="month" class="form-control">
                                    @for ($m = 1; $m <= 12; $m++)
                                        <option value="{{ $m }}" @if($month == $m) selected @endif>{{ date('F', mktime(0, 0, 0, $m, 1)) }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form Filter -->

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pegawai</th>
                                    <th>Tanggal</th>
                                    <th>Jam Masuk</th>
                                    <th>Jam Keluar</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attendances as $attendance)
                                <tr>
                                    <td>{{ $attendance->id }}</td>
                                    <td>{{ $attendance->nama }}</td>
                                    <td>{{ $attendance->tanggal }}</td>
                                    <td>{{ $attendance->jam_masuk }}</td>
                                    <td>{{ $attendance->jam_keluar }}</td>
                                    <td>{{ $attendance->status }}</td>
                                    <td>{{ $attendance->keterangan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{ $attendances->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection