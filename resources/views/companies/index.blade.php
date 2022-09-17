@extends('base')

@extends('navbar')

@section('title', 'Companies')

@section('content')
    <div class="container m-5">
        <div class="row">
            <div class="col-sm-4">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <livewire:companies.create/>
            </div>
            <div class="col-md-8">
                <livewire:companies.index/>
            </div>
        </div>
    </div>
    
@endsection
