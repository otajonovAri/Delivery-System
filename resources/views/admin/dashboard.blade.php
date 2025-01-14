@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-4">
                <div class="card">
                    <img src="{{$restaurant->image}}" class="card-img-top" alt="">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4 class="card-title">{{$restaurant->name}}</h4>
                        <p class="card-text"><strong>Partita IVA: </strong>{{$restaurant->vat_number}}</p>
                        <a href="#" class="btn btn-success">Dettagli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
