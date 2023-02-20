<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\transaksi_detail;
use Validator;

class Transaksi_DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi_detail = Transaksi_Detail::paginate(5);

        return view('transaksi_detail.index', [
            'transaksi_detail' => Transaksi_Detail::all(), ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi_detail = transaksi_detail::get();
        return view('transaksi_detail.create', compact('transaksi_detail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $model = new transaksi_detail;
        $model->username = $request->username;
        $model->nationality= $request->nationality;
        $model->is_visa = $request->is_visa;
        $model->doe_passport = $request->doe_passport;

        $validasi = Validator::make($data,[
            'username'=>'required|max:255',
            'nationality'=>'required|max:255',
            'is_visa'=>'required|max:255',
            'doe_passport'=>'required|max:255',


        ]);
        if($validasi->fails())
        {
            return redirect()->route('transaksi_detail.create')->withInput()->withErrors($validasi);
        }
        $model->save();
        //toast('berhasil di tambah', 'success');
        return redirect()->route('transaksi_detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = transaksi::findOrFail($id);
        return view('transaksi_detail.show',compact('transaksi_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi_detail.edit',compact('transaksi_detail', 'transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaksi_detail = transaksi_detail::find($id);
        $data = $request->all();
        // $model->username = $request->username;
        // $model->nationality= $request->nationality;
        // $model->is_visa = $request->is_visa;
        // $model->doe_passport = $request->doe_passport;

        $validasi = Validator::make($data,[
            'username'=>'required|max:255',
            'nationality'=>'required|max:255',
            'is_visa'=>'required|max:255',
            'doe_passport'=>'required|max:255',

        ]);

        if($validasi->fails())
        {
            return redirect()->route('transaksi_detail.create',[$id])->withErrors($validasi);
        }
          $transaksi_detail->save();
          return redirect()->route('transaksi_detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = transaksi::findOrFail($id);
        $data->delete();
        return redirect()->route('transaksi_detail.index');
    }
}
