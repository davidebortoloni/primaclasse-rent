@extends('layouts.app')

@section('title', ' - Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <!-- Jumbotron -->
    <div id="jumbotron"
        class="vh-100 bg-image text-center shadow-1-strong text-white px-5 d-flex flex-column align-items-center pb-5 p-top"
        style="background-image: url({{ asset('img/jumbotron.jpg') }}); background-position: center; background-size: cover;">
        <img class="img-fluid my-4" src="{{ asset('img/logo.png') }}" alt="Logo Primaclasse">
        <div class="card w-75 text-black">
            <div class="card-body">
                <div class="input-group mb-3">
                    <select class="form-select" id="pickup-place">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <input id="pickup-date" class="form-select" type="date" name="pickup-date">
                    <input id="return-date" class="form-select" type="date" name="return-date">
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <main>
        <div class="container">
            <section class="py-5" id="advantages">
                <div class="row justify-content-center gy-5">
                    <div class="col-8 col-lg-3">
                        <div class="card shadow h-100">
                            <div class="row align-items-center py-4 px-3 text-center">
                                <div class="col-3">
                                    <img src="{{ asset('img/check-mark.png') }}" alt="check-mark">
                                </div>
                                <div class="col-9">
                                    <div class="card-text">Cancellazione gratuita entro 48 ore</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-lg-3">
                        <div class="card shadow h-100">
                            <div class="row align-items-center py-4 px-3 text-center">
                                <div class="col-3">
                                    <img src="{{ asset('img/map.png') }}" alt="map">
                                </div>
                                <div class="col-9">
                                    <div class="card-text">Ritira e consegna nel concessionario più comodo per te</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-lg-3">
                        <div class="card shadow h-100">
                            <div class="row align-items-center py-4 px-3 text-center">
                                <div class="col-3">
                                    <img src="{{ asset('img/telephone.png') }}" alt="telephone">
                                </div>
                                <div class="col-9">
                                    <div class="card-text">Non esitare a contattarci per qualsiasi evenienza</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr />

            <section class="py-5" id="prices">
                <div class="row justify-content-center text-center gy-4">
                    <div class="col-12 col-lg-4">
                        <h2 class="mb-3">Prezziario giornaliero</h2>
                        <div class="card shadow">
                            <table class="table table-bordered m-0">
                                <thead>
                                    <tr>
                                        <th>
                                            CLASSE
                                        </th>
                                        <th>
                                            1 GIORNO
                                        </th>
                                        <th>
                                            2 GIORNI
                                        </th>
                                        <th>
                                            4 GIORNI
                                        </th>
                                        <th>
                                            7 GIORNI
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            A
                                        </th>
                                        <td>
                                            24,90€
                                        </td>
                                        <td>
                                            23,90€
                                        </td>
                                        <td>
                                            22,90€
                                        </td>
                                        <td>
                                            20,90€
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            B
                                        </th>
                                        <td>
                                            29,90€
                                        </td>
                                        <td>
                                            28,90€
                                        </td>
                                        <td>
                                            27,90€
                                        </td>
                                        <td>
                                            25,90€
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            C
                                        </th>
                                        <td>
                                            39,90€
                                        </td>
                                        <td>
                                            38,90€
                                        </td>
                                        <td>
                                            37,90€
                                        </td>
                                        <td>
                                            35,90€
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            D
                                        </th>
                                        <td>
                                            59,90€
                                        </td>
                                        <td>
                                            58,90€
                                        </td>
                                        <td>
                                            57,90€
                                        </td>
                                        <td>
                                            55,90€
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <h2 class="mb-3">Veicoli in primo piano</h2>
                        <div class="card shadow">
                            <div id="carouselExampleIndicators" class="carousel slide carousel-dark pt-4 pb-5"
                                data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row px-5">
                                            <div class="col-7">
                                                <h2>Peugeot 308</h2>
                                                <img src="{{ asset('img/car.png') }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="col-5">
                                                <h3>Prezzo:</h3>
                                                <div>39,90€ al giorno</div>
                                                <a class="btn btn-primary mt-2" href="">Vedi offerta</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row px-5">
                                            <div class="col-7">
                                                <h2>Peugeot 308</h2>
                                                <img src="{{ asset('img/car.png') }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="col-5">
                                                <h3>Prezzo:</h3>
                                                <div>39,90€ al giorno</div>
                                                <a class="btn btn-primary mt-2" href="">Vedi offerta</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row px-5">
                                            <div class="col-7">
                                                <h2>Peugeot 308</h2>
                                                <img src="{{ asset('img/car.png') }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="col-5">
                                                <h3>Prezzo:</h3>
                                                <div>39,90€ al giorno</div>
                                                <a class="btn btn-primary mt-2" href="">Vedi offerta</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

            </section>

            <hr />

            <section class="py-5" id="reviews">
                <h2 class="text-center mb-3">Cosa dicono di noi</h2>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card shadow p-4">
                            <h3>Alessio R.</h3>
                            <p>Macchina recente e tenuta bene, lo consiglio.</p>
                        </div>
                    </div>
                </div>
            </section>

            <hr />

            <section class="py-5" id="reviews">
                <h2 class="text-center mb-3">Dove puoi trovarci</h2>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div id="map"></div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
