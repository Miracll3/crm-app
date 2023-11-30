@extends('layouts.app')
@section('content')
    
    <div class="row position-relative">
        <div class="col-md-11 mx-auto mt-5">
            <div class="row">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight col">Manage Clients</h2>
                <div class="col my-auto d-flex">
                    <a href="{{route('client.create')}}" class="btn w-fit ms-auto px-4 py-2 fw-bold fs-14 bg-brown text-white">Add Client</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5 mx-0">
        <div class="col col-md-11 p-4 p-md-5 rounded bg-white mx-3 mx-md-auto shadow-sm">
            @livewire('clients.table')
        </div>
    </div>
@endsection
