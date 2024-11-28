@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome! {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <span>
                        The State University Locator is an online tool designed to help users easily find and access
                        information about state universities across a specific region or country. It provides an
                        interactive
                        map and a searchable directory of universities, displaying key details such as names, addresses,
                        contact information, websites, and geographical locations. This tool is ideal for prospective
                        students, researchers, and anyone interested in higher education institutions, offering a simple
                        and
                        efficient way to locate universities based on their specific needs.


                    </span>
                    <div class="text-end">
                        <a href="{{ route('locator.index') }}" class="btn btn-primary">Proceed to SUC Locator</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection