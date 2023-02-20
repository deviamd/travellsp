<?php

namespace App\Http\Controllers;

use App\Models\Travel_Package;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Travel_PackageController extends Controller
{
    public function index(Request $request)
    {
        $travel_package = travel_package::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $travel_package = Travel_Package::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('travel_package.index', compact('travel_package'));
    }//end method

    public function create()
    {

        return view('travel_package.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Travel_Package;
        $model->title = $request->title;
        $model->slug = $request->slug;
        $model->location = $request->location;
        $model->about = $request->about;
        $model->language = $request->language;
        $model->foods = $request->foods;
        $model->departure_date = $request->departure_date;
        $model->duration = $request->duration;
        $model->type = $request->type;
        $model->price = $request->price;

        $model->save();


        return redirect()->route('travel_package.index');
    }//end method


    public function destroy($id)
    {
        $data = Travel_Package::findOrFail($id);
        $data->delete();
        return redirect()->route('travel_package.index');
    }//end method


    public function show($id)
    {
        $travel_package = Travel_Package::findOrFail($id);
        return view('travel_package.show',compact('travel_package'));
    }


    public function edit($id)
    {
        $travel_package = Travel_Package::findOrFail($id);
        return view('travel_package.edit',compact('travel_package'));
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
        $model = Travel_Package::findOrFail($id);
        $model->title = $request->title;
        $model->slug = $request->slug;
        $model->location = $request->location;
        $model->about = $request->about;
       
        $model->language = $request->language;
        $model->food = $request->food;
        $model->departure_date = $request->departure_date;
        $model->duration = $request->duration;
        $model->type = $request->type;
        $model->price = $request->price;

       return redirect()->route('travel_package.index');
    }

}
