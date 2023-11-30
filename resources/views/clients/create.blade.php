@extends('layouts.app')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Client</h2>
    </x-slot>


    <div class="row my-5 mx-0">
        <div class="col col-md-11 p-4 p-md-5 rounded bg-white mx-3 mx-md-auto shadow-sm">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('client.store') }}">
                @csrf
        
                <x-alert-error></x-alert-error>

                <div class="row">
                    <h2 class="fs-20 fw-bold text-brown mb-5">Client Details</h2>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fs-14 fw-bold" for="uuid">UUID:</label>
                        <div class="input-group border rounded overflow-hidden">
                            <input class="form-control fs-14 shadow-none" type="text" name="uuid" id="uuid" value="{{ old('uuid') }}" required>
                            <span class="input-group-text bg-white border-0"><i class="bi bi-person-vcard"></i></span>
                        </div>
                    </div>
                    
            
                    <div class="col-md-4 mb-3">
                        <label class="form-label fs-14 fw-bold" for="id_number">ID Number:</label>
                        <div class="input-group border rounded overflow-hidden">
                            <input class="form-control fs-14 shadow-none" type="text" name="id_number" id="id_number" value="{{ old('id_number') }}" required>
                            <span class="input-group-text bg-white border-0"><i class="bi bi-person-vcard"></i></span>
                        </div>
                    </div>
                    
                    
            
                    <div class="col-md-4 mb-3">
                        <label class="form-label fs-14 fw-bold" for="date_of_birth">Date of Birth:</label>
                        <div class="input-group border rounded overflow-hidden">
                            <input class="form-control fs-14 shadow-none" type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" required>
                            <span class="input-group-text bg-white border-0"><i class="bi bi-calendar3"></i></span>
                        </div>
                    </div>
                    
            
                    <div class="col-md-4 mb-3">
                        <label class="form-label fs-14 fw-bold" for="first_name">First Name:</label>
                        <div class="input-group border rounded overflow-hidden">
                            <input class="form-control fs-14 shadow-none" type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required>
                            <span class="input-group-text bg-white border-0"><i class="bi bi-person"></i></span>
                        </div>
                    </div>
            
                    <div class="col-md-4 mb-3">
                        <label class="form-label fs-14 fw-bold" for="last_name">Last Name:</label>
                        <div class="input-group border rounded overflow-hidden">
                            <input class="form-control fs-14 shadow-none" type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required>
                            <span class="input-group-text bg-white border-0"><i class="bi bi-person"></i></span>
                        </div>
                    </div>
            
                    <div class="col-md-4 mb-3">
                        <label class="form-label fs-14 fw-bold" for="email">Email:</label>
                        <div class="input-group border rounded overflow-hidden">
                            <input class="form-control fs-14 shadow-none" type="email" name="email" id="email" value="{{ old('email') }}" required>
                            <span class="input-group-text bg-white border-0"><i class="bi bi-envelope"></i></span>
                        </div>
                    </div>
            
                    <div class="col-md-4 mb-3">
                        <label class="form-label fs-14 fw-bold" for="telephone">Telephone:</label>
                        <div class="input-group border rounded overflow-hidden">
                            <input class="form-control fs-14 shadow-none" type="text" name="telephone" id="telephone" value="{{ old('telephone') }}" required>
                            <span class="input-group-text bg-white border-0"><i class="bi bi-telephone"></i></span>
                        </div>
                    </div>
            
                    <div class="col-md-4 mb-3">
                        <label class="form-label fs-14 fw-bold" for="status">Status:</label>
                        <div class="input-group border rounded overflow-hidden">
                            <select class="form-control fs-14 shadow-none" name="status" id="status" required>
                                <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
        
                <div class="row my-4 mx-0">
                    <button type="submit" class="btn w-fit px-4 fw-bold fs-14 bg-brown text-white py-3">Create Client</button>
                </div>
            </form>
        </div>
    </div>
@endsection
