@extends('layouts.app')

@section('title', ' - Area personale')

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/car-show.css') }}"> --}}
@endsection

@section('content')
    <main class="main p-top container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card shadow text-center p-4">
                    <h2 class="text-capitalize">{{ $user->fullname }}</h2>
                    <h4>{{ $user->email }}</h4>
                    <div class="btn btn-primary w-75 m-auto mt-3">I MIEI ORDINI</div>
                    <div class="btn btn-primary w-75 m-auto mt-3">MODIFICA ACCOUNT</div>
                </div>
            </div>
            <div class="col-6 text-center">
                Ciao <strong class="text-capitalize">{{ $user->fullname }}</strong>, benvenuto nella tua area personale.
            </div>
        </div>
    </main>
@endsection
