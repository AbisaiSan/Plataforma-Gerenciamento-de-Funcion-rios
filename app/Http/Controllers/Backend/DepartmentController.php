<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentStoreRequest;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $departments = Departamento::all();
        if($request->has('search')){
            $departments = Departamento::where('name', 'like', "%{$request->search}%")->get();
        }
       
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentStoreRequest $request)
    {
        Departamento::create($request->validated());
        return redirect()->route('departments.index')->with('message', "Departamento criado com sucesso!");
    }

   
    public function edit(Departamento $department)
    {
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentStoreRequest $request, Departamento $department)
    {
        $department->update([
            'name' =>$request->name
        ]);
       
        return redirect()->route('departments.index')->with('message','Departamento atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('message','Departamento excluido com sucesso');
    }
}
