@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Movie Board') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-link text-violet-700 bg-gray-100 font-bold" href="{{ route('movies.create') }}">
                        <br>
                        {{ __('ADD MOVIE') }}
                    </a>
                    <a class="btn btn-link text-violet-700 bg-gray-100 font-bold" href="{{ route('movies.store') }}">
                        <br>
                        {{ __('MOVIE LIST') }}
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
