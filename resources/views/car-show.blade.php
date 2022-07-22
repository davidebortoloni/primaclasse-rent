@extends('layouts.app')

@section('title', ' - Peugeout 308')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/car-show.css') }}">
@endsection

@section('content')
    <main class="main p-top container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card shadow pt-5 pb-2 px-4 mb-3">
                    <h3 class="card position-absolute top-0 start-0 rounded p-3 shadow"
                        style="transform: translate(-25%, -50%) !important; ">
                        Peugeot 308
                    </h3>
                    <img class="img-fluid" src="{{ asset('img/car.png') }}" alt="">
                    <div id="photos-carousel" class="carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card">
                                    <div class="img-wrapper"><img src="{{ asset('img/car.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img src="{{ asset('img/car.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img src="{{ asset('img/car.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img src="{{ asset('img/car.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img src="{{ asset('img/car.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#photos-carousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#photos-carousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="row">
                        <div class="col-4 text-center text-white bg-primary py-3">
                            IN DOTAZIONE
                        </div>
                        <div class="col-4 text-center py-3">
                            SPECIFICHE TECNICHE
                        </div>
                        <div class="col-4 text-center py-3">
                            RECENSIONI
                        </div>
                    </div>
                </div>
                <div class="card shadow p-4 mb-5">
                    <div class="row">
                        <div class="col-6"><i class="fa-solid fa-plus text-primary"></i><span> ARIA CONDIZIONATA</span>
                        </div>
                        <div class="col-6"><i class="fa-solid fa-plus text-primary"></i><span> AUTORADIO</span></div>
                        <div class="col-6"><i class="fa-solid fa-plus text-primary"></i><span> USB</span></div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card">
                    <div class="card-header text-center p-3">
                        <h2 class="d-inline">39,90€</h2> al giorno
                    </div>
                    <div class="card-body p-3">
                        <input class="form-select mb-3" type="datetime-local" name="pickup-date">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Luogo del ritiro</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <input class="form-select mb-3" type="datetime-local" name="return-date">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Luogo della consegna</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <h5 class="text-center mt-3">EXTRA</h5>
                        <div class="d-flex justify-content-between">
                            <div>
                                <input id="kasco" type="checkbox">
                                <label for="kasco" class="text-small"> ASSICURAZIONE KASCO</label>
                            </div>
                            <div>
                                <span class="text-danger text-small">6€ / giorno</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <input id="additional-driver" type="checkbox">
                                <label for="additional-driver" class="text-small"> GUIDATORE AGGIUNTIVO</label>
                            </div>
                            <div>
                                <span class="text-danger text-small">10€ / giorno</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <input id="unlimited-mileage" type="checkbox">
                                <label for="unlimited-mileage" class="text-small"> CHILOMETRAGGIO ILLIMITATO</label>
                            </div>
                            <div>
                                <span class="text-danger text-small">6€ / giorno</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary rounded mt-4 w-75" href="#">PRENOTA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
