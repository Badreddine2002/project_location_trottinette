<?php

namespace App\Http\Controllers;

use App\Models\information;
use Illuminate\Http\Request;
use App\Http\Requests\createRequest;
use App\Http\Requests\UpdateRequest;
class infoController extends Controller
{
    public function index()
    {
        $data = information::all();
        return view ('index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createRequest $request)
    {
        $dataToInsert['id']=$request ->id;
        $dataToInsert['Nom']=$request ->Nom;
        $dataToInsert['Prenom']=$request ->Prenom;
        $dataToInsert['Email']=$request ->Email;
        $dataToInsert['Tele']=$request ->Tele;
        $dataToInsert['CNI']=$request ->CNI;
        $dataToInsert['Periode_loc']=$request ->Periode_loc;
        information::create($dataToInsert);
        return redirect()->route('index');
    }


    public function edite($id)
    {
        $data = information::all()->find($id);
        return view ('edite',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        $dataToInsert['id']=$request ->id;
        $dataToInsert['Nom']=$request ->Nom;
        $dataToInsert['Prenom']=$request ->Prenom;
        $dataToInsert['Email']=$request ->Email;
        $dataToInsert['Tele']=$request ->Tele;
        $dataToInsert['CNI']=$request ->CNI;
        $dataToInsert['Periode_loc']=$request ->Periode_loc;
        information::where(['id'=>$id])->update($dataToInsert);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        information::where(['id'=>$id])->delete();
        return redirect()->route('index');
    }
}
