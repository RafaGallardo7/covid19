@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    

                    <div class="row" align="center">
                        <div class="col-md-12 mx-auto row">                        
                            <div class="col-md-4">
                                <a href="{{route('casos-covid19')}}" class="btn btn-success">Datos Covid19</a>
                            </div>
                            <div class="col-md-4">    
                                <a href="{{route('casos-todos')}}" class="btn btn-second">Todos los casos</a>
                            </div>
                            <div class="col-md-4">    
                                <a href="{{route('casos-todos')}}" class="btn btn-warning">new buton</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
