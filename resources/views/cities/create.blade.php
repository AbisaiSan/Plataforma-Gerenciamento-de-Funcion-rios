@extends('layouts.main')

@section('content')

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cidades</h1>
    </div>
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Criar Cidade') }}
                        <a href="{{ route('cities.index') }}" class="float-right">Voltar</a>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('cities.store') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="codigo_pais" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
    
                                <div class="col-md-6">

                                    <select name="estado_id" class="form-control" aria-label="Default select example">
                                        <option selected>Selecione o Estado</option>
                                        @foreach ($states as $state )
                                        <option value="{{ $state->id }}">{{$state->name}}</option>
                                        @endforeach
                                       
                                      </select>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cadastrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection