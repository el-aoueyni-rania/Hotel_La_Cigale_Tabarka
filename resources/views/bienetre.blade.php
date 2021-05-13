@extends('layouts.app')

@section('content')
<header class="jumbotron my-4">
                <h1 class="display-3">A Warm Welcome!</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
                <a class="btn btn-primary btn-lg" href="#!">Call to action!</a>
            </header>
            <!-- Page Features-->
            <div class="row text-center">
            @foreach ($bienetres as $bienetre)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://via.placeholder.com/500x325" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">{{$bienetre->Type_de_Bienetres_choisie}}</h4>
                            <p class="card-text">{{$bienetre->Description}}</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Find Out More!</a></div>
                    </div>
                </div> 
            @endforeach
            </div>
@endsection
