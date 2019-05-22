@extends('layouts.app')

@section('content')

<style media="screen">
  .card-header{
    font-size: 50px;
  }
</style>

<h1 style="text-align:center"> Acerca </h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:#308ce8">Sobre el Proyecto</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Proyecto para la clase de Administración de base de datos y
                        Programación Web realizado por:</p>
                    <p>Beltrán Alvarado Leonardo Ulises.</p>
                    <p>Deheza Zazueta Riggel Alioth.</p>
                    <p>Venegas Días Missael. </p>
                    <p>Utilizando Laravel y XAMPP.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
