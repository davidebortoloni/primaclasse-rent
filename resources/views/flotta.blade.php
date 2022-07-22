@extends('layouts.app')

@section('title', ' - Flotta')

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/flotta.css') }}"> --}}
@endsection

@section('content')
    <main class="main p-top container">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="card shadow mb-4">
                    <div class="row p-3 align-items-center">
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('img/car.png') }}" alt="car">
                        </div>
                        <div class="col-5">
                            <h2>Peugeot 308</h2>
                            <div class="row text-small justify-content-between">
                                <div class="col-6">
                                    <strong>Cilindrata:</strong> 1200 cm<sup>2</sup>
                                </div>
                                <div class="col-6">
                                    <strong>Sedili:</strong> 5
                                </div>
                                <div class="col-6">
                                    <strong>Carburante:</strong> benzina
                                </div>
                                <div class="col-6">
                                    <strong>Porte:</strong> 5
                                </div>
                                <div class="col-6">
                                    <strong>Cavalli:</strong> 72 hp
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <h3>Prezzo:</h3>
                            <div>39,90€ al giorno</div>
                            <a class="btn btn-primary mt-2" href="{{ route('cars.show', 1) }}">Vedi offerta</a>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="row p-3 align-items-center">
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('img/car.png') }}" alt="car">
                        </div>
                        <div class="col-5">
                            <h2>Peugeot 308</h2>
                            <div class="row text-small justify-content-between">
                                <div class="col-6">
                                    <strong>Cilindrata:</strong> 1200 cm<sup>2</sup>
                                </div>
                                <div class="col-6">
                                    <strong>Sedili:</strong> 5
                                </div>
                                <div class="col-6">
                                    <strong>Carburante:</strong> benzina
                                </div>
                                <div class="col-6">
                                    <strong>Porte:</strong> 5
                                </div>
                                <div class="col-6">
                                    <strong>Cavalli:</strong> 72 hp
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <h3>Prezzo:</h3>
                            <div>39,90€ al giorno</div>
                            <a class="btn btn-primary mt-2" href="{{ route('cars.show', 1) }}">Vedi offerta</a>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="row p-3 align-items-center">
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('img/car.png') }}" alt="car">
                        </div>
                        <div class="col-5">
                            <h2>Peugeot 308</h2>
                            <div class="row text-small justify-content-between">
                                <div class="col-6">
                                    <strong>Cilindrata:</strong> 1200 cm<sup>2</sup>
                                </div>
                                <div class="col-6">
                                    <strong>Sedili:</strong> 5
                                </div>
                                <div class="col-6">
                                    <strong>Carburante:</strong> benzina
                                </div>
                                <div class="col-6">
                                    <strong>Porte:</strong> 5
                                </div>
                                <div class="col-6">
                                    <strong>Cavalli:</strong> 72 hp
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <h3>Prezzo:</h3>
                            <div>39,90€ al giorno</div>
                            <a class="btn btn-primary mt-2" href="{{ route('cars.show', 1) }}">Vedi offerta</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-5">
                <div class="card shadow p-4">
                    <input class="form-select mb-3" type="date" name="pickup-date">
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Luogo del ritiro</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <input class="form-select mb-3" type="date" name="return-date">
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Luogo della consegna</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <h5 class="text-center mt-3">SELEZIONA CLASSE</h5>
                    <div class="row text-center justify-content-around mb-3">
                        <div class="col-4 border square">A</div>
                        <div class="col-4 border square">B</div>
                    </div>
                    <div class="row text-center justify-content-around">
                        <div class="col-4 border square">C</div>
                        <div class="col-4 border square">D</div>
                    </div>
                    <h5 class="text-center mt-3">FILTRA PER PREZZO</h5>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                    <a class="btn btn-primary rounded mt-4 w-75 m-auto" href="#">CERCA</a>
                </div>
            </div>
        </div>
    </main>
@endsection
