<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryStoreRequest;
use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function index(Request $request){

        $countries = Pais::all();
        if($request->has('search')){
            $countries = Pais::where('codigo_pais', 'like', "%{$request->search}%")->orWhere('name', 'like', "%{$request->search}%")->get();
        }
        return view('countries.index', compact('countries'));
    }

    public function create(){
        return view('countries.create');
    }

    public function store(CountryStoreRequest $request){
        Pais::create($request->validated());
        return redirect()->route('countries.index')->with('message', "País criado com sucesso!");
        
    }

    public function edit(Pais $country)
    {
        return view('countries.edit', compact('country'));
    }

   

    
    public function update(CountryStoreRequest $request, Pais $country)
    {
        $country->update($request->validated());
       
        return redirect()->route('countries.index')->with('message','País atualizado com sucesso');
    }

    public function destroy(Pais $country)
    {
        $country->delete();
        return redirect()->route('countries.index')->with('message','País excluido com sucesso');
    }
}
