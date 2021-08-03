@extends('layouts.main')

@section('content')

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Departamentos</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">
            <div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('departments.index') }}">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" class="form-control mb-2" 
                                    id="inlineFormInput" placeholder="Buscar">    
                                </div>  
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>    
                                </div>  
                            </div> 
                        </form>
                    </div>
                </div>
                <div>
                    <a href="{{ route('departments.create') }}" class=" float-right btn btn-primary mb-2">Cadastrar</a>
                </div>
                
            </div>
            
           
    
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($departments as $department )
                        <tr>
                            <th scope="row">{{$department->id}}</th>
                             <td>{{ $department->name }}</td>                           
                            <td>
                                <a href="{{route('departments.edit', $department->id) }}" class="btn btn-success">Editar</a>
                            </td>
                            <td>
                                {{-- <a href="{{route('edit', $user->id) }}">Editar</a> --}}
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    
@endsection