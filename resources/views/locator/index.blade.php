@extends('layouts.app')

@section('content')

<div class="bg-white p-4 shadow-sm rounded">
    <h1 class="fw-bold text-center">SUC Locator</h1>

    <a href="{{ route('locator.create') }}" class="btn btn-success">Add new HEI</a>
    <table class="table table-hover table-bordered mt-2">
        <thead>
            <tr>
            <th>No.</th>
            <th>Higher Education Institution</th>
            <th>Address</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Website</th>
            <th>Contact Number</th>
            <th>Actions</th>
            <tr>
        </thead>

        <tbody>
            @foreach ( $colleges as $key => $college)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $college->name }}</td>
                <td>{{ $college->address }}</td>
                <td>{{ $college->latitude }}</td>
                <td>{{ $college->longitude }}</td>
                <td>{{ $college->website }}</td>
                <td>{{ $college->contact_number }}</td>
                <td>
                    <div class="d-flex gap-1 justify-content-center">
                        <a href="{{ route('locator.edit', ['locator' => $college['id']]) }}" class="btn btn-primary">Edit</a> 
                        <form action="{{ route('locator.destroy', ['locator' => $college['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')" >Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    </div>


    <div class="bg-white p-4 mt-3 rounded shadow">
        <h1 class="text-center fw-bold">Map View</h1>

        // Leaflet
        // A basic map is as easy as using the x blade component.
        
        // Set the centerpoint of the map:
        <x-maps-leaflet :centerPoint="['lat' => 52.16, 'long' => 5]" :markers="[['lat' => 52.16444513293423, 'long' => 5.985622388024091]]" :zoomLevel="6"></x-maps-leaflet>
        
    </div>
   


</div>


@endsection