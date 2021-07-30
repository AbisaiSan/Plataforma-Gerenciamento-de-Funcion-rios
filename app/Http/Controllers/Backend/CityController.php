<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityStoreRequest;
use App\Models\Estado;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cities = Cidade::all();
        if($request->has('search')){
            $cities = Cidade::where('name', 'like', "%{$request->search}%")->get();
        }
        return view('cities.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $states = Estado::all();

       return view('cities.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityStoreRequest $request)
    {
        Cidade::create($request->validated());

        return redirect()->route('cities.index')->with('message', "Cidade criada com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $city)
    {
        $states = Estado::all();
        return view('cities.edit', compact('city', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityStoreRequest $request, Cidade $city)
    {
        $city->update([
            'estado_id' => $request->estado_id,
            'name' =>  $request->name
        ]);

        return redirect()->route('cities.index')->with('message', "Cidade atualizada com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $city)
    {
        $city->delete();

        return redirect()->route('cities.index')->with('message', "Cidade excluida com sucesso!");
    }
}
