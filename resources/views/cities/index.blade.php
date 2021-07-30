@extends('layouts.main')

@section('content')

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cidades</h1>
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
                        <form method="GET" action="{{ route('cities.index') }}">
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
                    <a href="{{ route('cities.create') }}" class=" float-right btn btn-primary mb-2">Cadastrar</a>
                </div>
                
            </div>
            
           
    
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Ação</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($cities as $city )
                        <tr>
                            <th scope="row">{{$city->id}}</th>
                             <td>{{ $city->estado->name }}</td>
                            <td >{{$city->name}}</td>
                            <td>
                                <a href="{{route('cities.edit', $city->id) }}" class="btn btn-success">Editar</a>
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