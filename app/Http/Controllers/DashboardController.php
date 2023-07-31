<?php

namespace App\Http\Controllers;

use App\Models\Gate;
use App\Models\Kehadiran;
use App\Models\Pegawai;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data['pegawai'] = Pegawai::all();
        $data['gate'] = Gate::all();

        $kehadiran = Kehadiran::all();
        $totalPegawai = Pegawai::count();
        $totalHadir = $kehadiran->where('status', 'Masuk')->count();
        $totalTidakHadir = $kehadiran->where('status', 'Tidak Masuk')->count();

        $data['total_pegawai'] = $totalPegawai;
        $data['total_hadir'] = $totalHadir;
        $data['total_tidak_hadir'] = $totalTidakHadir;

        return view('pages.dashboard', ['data' => $data]);
    }
}
