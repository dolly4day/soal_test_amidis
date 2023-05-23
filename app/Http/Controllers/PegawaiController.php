<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pegawai;
class PegawaiController extends Controller
{
    public function index()
    {
        $Pegawais = Pegawai::all()->toArray();
        return array_reverse($Pegawais);      
    }
    public function store(Request $request)
    {
        $Pegawai = new Pegawai([
            'name' => $request->input('name')
        ]);
        $Pegawai->save();
        return response()->json('Pegawai created!');
    }
    public function show($id)
    {
        $Pegawai = Pegawai::find($id);
        return response()->json($Pegawai);
    }
    public function update($id, Request $request)
    {
        $Pegawai = Pegawai::find($id);
        $Pegawai->update($request->all());
        return response()->json('Pegawai updated!');
    }
    public function destroy($id)
    {
        $Pegawai = Pegawai::find($id);
        $Pegawai->delete();
        return response()->json('Pegawai deleted!');
    }
}