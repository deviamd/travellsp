<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\travel_package;
use App\Models\transaksi;
use Validator;

class TransaksiController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = transaksi::with(['travel_package'])->paginate(5);
        return view('transaksi.index',compact('transaksis'));

    }//end method

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::get();
        $transaksi = transaksi::get();
        $travel_package = travel_package::get();
        return view('transaksi.create', [
            'user' => $user,
            'transaksi' => $transaksi,
            'travel' => $travel_package
        ]);
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
        $model = new transaksi;
        $model->travel_package_id = $request->travel_package_id;
        $model->user_id = $request->user_id;
        $model->addtional_visa = $request->addtional_visa;
        $model->total_transaksi= $request->total_transaksi;
        $model->status_transaksi = $request->status_transaksi;

        $validasi = Validator::make($data,[
            'travel_package_id'=>'required|max:255',
            'user_id'=>'required|max:255',
            'addtional_visa'=>'required|max:255',
            'total_transaksi'=>'required|max:255',
            'status_transaksi'=>'required|max:255',


        ]);
        if($validasi->fails())
        {
            return redirect()->route('transaksi.create')->withInput()->withErrors($validasi);
        }
        $model->save();
    //     //toast('berhasil di tambah', 'success');
    //    $validatedData  = $request->validate([
    //         'addtional_visa' => ['required'],
    //         'transaksi_total' => ['required'],
    //         'status' => ['required'],
    //         'travel_package_id' => ['integer'],
    //         'userid' => auth()->user()->id,
    //    ]);
    //    $validatedData = auth()->user()->id;
        // if($validasi->fails())
        // {
        //     return redirect()->route('transaksi.create')->withInput()->withErrors($validasi);
        // }
    //    transaksi::create($validatedData);
        //toast('berhasil di tambah', 'success');
        return redirect()->route('transaksi.index');
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
        return view('transaksi.show',compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = transaksi::findOrFail($id);
        return view('transaksi.edit',compact('transaksi'));
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
        $transaksi = transaksi::find($id);
        $data = $request->all();
        // $model->travel_package_id = $request->travel_package_id;
        // $model->user_id = $request->user_id;
        // $model->addtional_visa = $request->addtional_visa;
        // $model->transaksi_total= $request->transaksi_total;
        // $model->status = $request->status;
        $validasi = Validator::make($data,[
            'travel_package_id'=>'required|max:255',
            'user_id'=>'required|max:255',
            'addtional_visa'=>'required|max:255',
            'total_transaksi'=>'required|max:255',
            'status_transaksi'=>'required|max:255',

        ]);

        if($validasi->fails())
        {
            return redirect()->route('transaksi.edit',[$id])->withErrors($validasi);
        }
          $transaksi->save();
          return redirect()->route('transaksi.index');
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
        return redirect()->route('transaksi.index');
    }
}
