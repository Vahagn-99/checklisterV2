@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card card-body border-0 shadow mb-4" bis_skin_checked="1">
                        <h2 class="h5 mb-4">{{ __('Craete new checklist groupe') }}</h2>
                        <form action="{{ route('admin.checklists_groups.store') }}" method="post">
                            @csrf
                            <div class="row" bis_skin_checked="1">
                                <div class="col-md-6 mb-3" bis_skin_checked="1">
                                    <div bis_skin_checked="1"><label
                                            for="name">{{ __('Checklist Groupe Name') }}</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name"
                                            type="text" name="name" value="{{ old('name') }}"
                                            placeholder="Enter groupe name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3" bis_skin_checked="1"><button class="btn btn-gray-800 mt-2 animate-up-2"
                                    type="submit">{{ __('Create') }}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
