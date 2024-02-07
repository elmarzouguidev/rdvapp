@extends('layouts.app')
@section('content')
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form mt-5">
                        @if (session('success'))
                            <div class="col-lg-12">
                                <div class="alert alert-success" role="alert" style="font-size: 30px;">

                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ session('success') }}

                                </div>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="col-lg-12">

                                <div class="alert alert-danger" role="alert" style="font-size: 30px;">

                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ session('error') }}

                                </div>

                            </div>
                        @endif

                        <form action="{{ route('book.store') }}" method="post">
                            @csrf
                            @honeypot
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        name="name" required placeholder="Enter votre nom complet"
                                        value="{{ old('name') }}">
                                    <span class="form-label">Nom complet *</span>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                        name="phone" required placeholder="Entrer votre numéro de téléphone"
                                        value="{{ old('phone') }}">
                                    <span class="form-label">Téléphone *</span>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control @error('city') is-invalid @enderror" name="city"
                                        required>

                                        @foreach ($cities as $city)
                                            <option value="{{ $city->uuid }}" @selected(old('city'))>
                                                {{ $city->name }}</option>
                                        @endforeach

                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Ville</span>
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control @error('address') is-invalid @enderror" type="text"
                                        name="address" required placeholder="Entrer votre Adresse"
                                        value="{{ old('address') }}">
                                    <span class="form-label">Adresse *</span>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control @error('type') is-invalid @enderror" name="type"
                                        required>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->uuid }}" @selected(old('type'))>
                                                {{ $type->name }}</option>
                                        @endforeach

                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Pole *</span>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control @error('book_date') is-invalid @enderror" type="date"
                                        name="book_date" value="{{ old('book_date') }}" required>
                                    <span class="form-label">Date de RDV *</span>
                                    @error('book_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control @error('book_time') is-invalid @enderror" type="time"
                                        name="book_time" value="{{ old('book_time') }}" required>
                                    <span class="form-label">Heure de RDV *</span>
                                    @error('book_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-btn">
                                    <button class="submit-btn">Réserver</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
