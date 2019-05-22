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

                    ¡Has iniciado Sesión :D!
                    <div class="form-group row mb-4">
                        <div class="col-md-6  offset-md-3">
                          <form action="/productos" method="get">
                            <button type="submit" class="btn btn-warning btn-lg btn-block">
                                {{ __('Productos') }}
                            </button>
                          </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
