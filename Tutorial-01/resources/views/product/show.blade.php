@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img
                src="https://laravel.com/img/logotype.min.svg"
                class="img-fluid rounded-start"
                alt="Laravel"
            >
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["product"]->getName() }}
                </h5>

                <p class="card-text">
                    Price: ${{ $viewData["product"]->getPrice() }}
                </p>

                <h6>Comments</h6>

                @foreach ($viewData["product"]->comments as $comment)
                    <p class="mb-1">
                        - {{ $comment->getDescription() }}
                    </p>
                @endforeach

                <a
                    href="{{ route('product.index') }}"
                    class="btn btn-secondary mt-3"
                >
                    Back to products
                </a>
            </div>
        </div>
    </div>
</div>
@endsection