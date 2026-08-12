@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="card">
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('product.save') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">
                    Product name
                </label>

                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                >
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">
                    Product price
                </label>

                <input
                    type="number"
                    class="form-control"
                    id="price"
                    name="price"
                    value="{{ old('price') }}"
                    min="0"
                >
            </div>

            <button type="submit" class="btn btn-primary">
                Create product
            </button>

            <a href="{{ route('product.index') }}" class="btn btn-secondary">
                Cancel
            </a>
        </form>
    </div>
</div>
@endsection