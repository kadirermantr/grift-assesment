@extends('layouts.master')

@section('content')
    @section('title', __('terms.edit_record', ['attribute' => __('terms.industry')]))

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('terms.detail') }}</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('industry.update', $industry->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="name" class="col-form-label">{{ __('terms.name') }}</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $industry->name }}">
                    </div>

                    @error('name')
                    <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2"></div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary" name="edit" value="edit">{{ __('terms.edit') }}</button>
                        <a onclick="document.getElementById('deleteForm').submit()" class="btn btn-danger" name="delete" value="delete">{{ __('terms.delete') }}</a>
                    </div>
                </div>
            </form>

            <form action="{{ route('industry.destroy', $industry) }}" method="POST" id="deleteForm">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection
