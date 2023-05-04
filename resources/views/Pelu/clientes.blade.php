@extends('layouts.Principal')
@section('contenido')
<div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/logo_2.jpg" class="d-block w-100 h-90" alt="carrusel1">
                </div>
                <div class="carousel-item">
                <img src="img/carrusel_6.jpg" class="d-block w-100 h-90" alt="carrusel2">
                </div>
                <div class="carousel-item">
                <img src="img/carrusel_7.jpg" class="d-block w-100 h-90" alt="carrusel3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        @endsection