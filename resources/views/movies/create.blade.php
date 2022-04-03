{{--todo:--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Add movie</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('movies.store') }}">
                            @csrf

                            <div class="form-group row py-1">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" maxlength="500" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="description" class="col-md-4 col-form-label text-md-right">URL</label>

                                <div class="col-md-6">
                                    <input id="url" maxlength="500" class="form-control @error('url') is-invalid @enderror" name="url" autofocus {{ old('url') }}>

                                    @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" maxlength="1500" class="form-control @error('description') is-invalid @enderror" name="description" autofocus>{{ old('description') }}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="series" class="col-md-4 col-form-label text-md-right">Series</label>

                                <div class="col-md-6">
                                    <input id="series" maxlength="120" class="form-control @error('series') is-invalid @enderror" name="series" autofocus {{ old('series') }}>

                                    @error('series')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                                <div class="col-md-6">
                                    <input id="category" maxlength="120" class="form-control @error('category') is-invalid @enderror" name="category" autofocus {{ old('category') }}>

                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="favorite" class="col-md-4 col-form-label text-md-right">Favorite</label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" value="true" class="form-check-input form-control @error('favorite') is-invalid @enderror" id="favorite" name="favorite" autofocus {{ old('favorite') }}>
                                    </div>

                                    @error('favorite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="watched" class="col-md-4 col-form-label text-md-right">Watched</label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" value="true" class="form-check-input form-control @error('watched') is-invalid @enderror" id="watched" name="watched" autofocus {{ old('watched') }}>
                                    </div>

                                    @error('watched')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row py-1">
                                <label for="to_watch" class="col-md-4 col-form-label text-md-right">To watch</label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" value="true" class="form-check-input form-control @error('to_watch') is-invalid @enderror" id="to_watch" name="to_watch" autofocus {{ old('to_watch') }}>
                                    </div>

                                    @error('to_watch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn bg-violet-700 text-white font-bold">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
