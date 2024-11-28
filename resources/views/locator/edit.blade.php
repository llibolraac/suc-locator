@extends('layouts.app')

@section('content')

{{-- Edit Form --}}

<div class="bg-white p-4 shadow-sm rounded">
  <h1 class="fw-bold">Add new HEI</h1>

  @if(session()->has('message'))
  <div class="alert alert-success">
    {{ session()->get('message') }}
  </div>
  @endif
  <form action="{{ route('locator.update', [
        'locator' => $college->id
    ]) }}" method="POST" class="mt-3">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Higher Education Institution Name:</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name"
        name="name" value="{{ $college->name }}">
      @error('name') <span class="text-danger font-italic fs-6">{{ $message}} </span> @enderror
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address:</label>
      <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
        aria-describedby="address" name="address" value="{{ $college->address }}">
      @error('address') <span class="text-danger font-italic fs-6">{{ $message}} </span> @enderror
    </div>
    <div class="mb-3">
      <label for="latitude" class="form-label">Latitude:</label>
      <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude"
        aria-describedby="latitude" name="latitude" value="{{ $college->latitude }}">
      @error('latitude') <span class="text-danger font-italic fs-6">{{ $message}} </span> @enderror
    </div>
    <div class="mb-3">
      <label for="longitude" class="form-label">Longitude:</label>
      <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude"
        aria-describedby="longitude" name="longitude" value="{{ $college->longitude }}">
      @error('longitude') <span class="text-danger font-italic fs-6">{{ $message}} </span> @enderror
    </div>
    <div class="mb-3">
      <label for="website" class="form-label">Website:</label>
      <input type="text" class="form-control @error('website') is-invalid @enderror" id="website"
        aria-describedby="website" name="website" value="{{ $college->website }}">
      @error('website') <span class="text-danger font-italic fs-6">{{ $message}} </span> @enderror
    </div>
    <div class="mb-3">
      <label for="contact_number" class="form-label">Contact Number:</label>
      <input type="text" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number"
        aria-describedby="contact_number" name="contact_number" value="{{ $college->contact_number }}">
      @error('contact_number') <span class="text-danger font-italic fs-6">{{ $message}} </span> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

{{-- Ends Here --}}


@endsection