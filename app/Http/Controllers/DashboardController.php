<?php

namespace App\Http\Controllers;

use App\Models\Gate;
use App\Models\Kehadiran;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $year = Request::get('year', date('Y')); // Ambil tahun dari query string, default tahun saat ini
        $month = Request::get('month', date('m')); // Ambil bulan dari query string, default bulan saat ini

        $data['pegawai'] = Pegawai::all();
        $data['gate'] = Gate::all();

        $kehadiranQuery = Kehadiran::query();
            if ($year && $month) {
                $kehadiranQuery->whereYear('tanggal', $year)->whereMonth('tanggal', $month);
            }

        $kehadiran = $kehadiranQuery->get();
        $totalPegawai = Pegawai::count();
        $totalHadir = $kehadiran->where('status', 'Masuk')->count();
        $totalTidakHadir = $kehadiran->where('status', 'Tidak Masuk')->count();

        $data['total_pegawai'] = $totalPegawai;
        $data['total_hadir'] = $totalHadir;
        $data['total_tidak_hadir'] = $totalTidakHadir;

        $attendances = Kehadiran::joinList()->when($year && $month, function ($query) use ($year, $month) {
            return $query->whereYear('kehadiran.tanggal', $year)->whereMonth('kehadiran.tanggal', $month);
        })->paginate(10);

        return view('pages.dashboard', compact('attendances'), ['data' => $data, 'year' => $year, 'month' => $month]);
    }

    
}
