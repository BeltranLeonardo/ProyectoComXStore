@extends('layouts.app')

@section('content')

<h1 style="text-align:center" style="color:#555555">  Productos </h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:#308ce8;font-style:bold;">Comics</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="list-group list-group-flush">

                    <div class="list-group-item">
                      <a href="/pedidos/store">
                        <img src="images/spiderman.jpg" alt="" width="200" height="250">
                        <!-- Hover Content -->
                        <div id = "nombre" class="hover-content" name="The Amazing SpiderMan">
                            <div class="line"></div>
                            <p>$30 pesos</p>
                            <h4>The Amazing-SpiderMan</h4>
                        </div>
                      </a>
                    </div>

                    <div class="list-group-item">
                      <a href="shop.html">
                        <img src="images/avengers.jpg" alt="" width="200" height="250">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p> $75 pesos</p>
                            <h4>Avengers</h4>
                        </div>
                      </a>
                    </div>

                    <div class="list-group-item">
                      <a href="shop.html">
                        <img src="images/actioncomics.jpg" alt="" width="200" height="250">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p> $50 pesos</p>
                            <h4>ActionComics</h4>
                        </div>
                      </a>
                    </div>

                    <div class="list-group-item">
                      <a href="shop.html">
                        <img src="images/saga.jpg" alt="" width="200" height="250">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p> $60 pesos</p>
                            <h4>Saga</h4>
                        </div>
                      </a>
                    </div>

                    <div class="list-group-item">
                      <a href="shop.html">
                        <img src="images/DetectiveComics.jpg" alt="" width="200" height="250">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p> $50 pesos</p>
                            <h4>DetectiveComics</h4>
                        </div>
                      </a>
                    </div>

                    <div class="list-group-item">
                      <a href="shop.html">
                        <img src="images/xmen.jpg" alt="" width="200" height="250">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>$60</p>
                            <h4>Uncany X-MEN</h4>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
