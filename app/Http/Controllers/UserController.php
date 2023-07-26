<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Departement;
use App\Models\Jabatan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data =  array(
            'akun' => Akun::all(),
            'departement' => Departement::all(),
            'jabatan' => Jabatan::all(),
            'user' => User::with('akun','departement','jabatan')->get(),
        );
        return view('pages.user', ['data' => $data]);
    }

    public function store(Request $request)
    {
       try {
        $date = Carbon::now();
        $data = array(
            'akun_id'        => $request->       akun_id,
            'nama'           => $request->          nama,
            'nidn'           => $request->          nidn,
            'departement_id' => $request->departement_id,
            'jabatan_id'     => $request->    jabatan_id,
            'ttl'            => $request->           ttl,
            'alamat'         => $request->        alamat,
            'agama'          => $request->         agama,
            'jk'             => $request->            jk,
            'no_hp'          => $request->         no_hp,
            'created_at'     => $date,
        );
        $data = User::create($data);
        $result = [
            'message' => 'success',
            'data' => $data,
            'code' => 200
        ];
       } catch (\Throwable $th) {
        $result = [
            'message' => $th->getMessage(),
            'code' => 500
        ];
       }
        return response()->json($result, $result['code']);

    }

    public function getById($id)
    {
		try {
            $data = User::whereId($id)->first();

            if ($data) {
                $result = [
                    'message' => 'success',
                    'data' => $data,
                    'code' => 200
                ];
            } else {
                $result = [
                    'message' => 'not found',
                    'code' => 404
                ];
            }
        } catch (\Throwable $th) {
            $result = [
                'message' => $th->getMessage(),
                'code' => 500
            ];
        }
        return response()->json($result, $result['code']);
    }

    public function update(Request $request, $id)
    {
		try {
        $date = Carbon::now();
        $data = [
            'akun_id'        => $request->       akun_id,
            'nama'           => $request->          nama,
            'nidn'           => $request->          nidn,
            'departement_id' => $request->departement_id,
            'jabatan_id'     => $request->    jabatan_id,
            'ttl'            => $request->           ttl,
            'alamat'         => $request->        alamat,
            'agama'          => $request->         agama,
            'jk'             => $request->            jk,
            'no_hp'          => $request->         no_hp,
            'updated_at' => $date,
        ];
        $data = User::where(['id' => $id])->update($data);
        $result = [
            'message' => 'success',
            'data' => $data,
            'code' => 200
        ];
        } catch (\Throwable $th) {
        $result = [
            'message' => $th->getMessage(),
            'code' => 500
        ];
        }
        return response()->json($result, $result['code']);
    }

    public function delete($id)
    {
        try {
            $data =  User::find($id);
            $data->delete();
            $result = [
                'message' => 'success',
                'data' => $data,
                'code' => 200
            ];
        } catch (\Throwable $th) {
            $result = [
                'message' => $th->getMessage(),
                'code' => 500
            ];
        }
        return response()->json($result, $result['code']);
    }
}
