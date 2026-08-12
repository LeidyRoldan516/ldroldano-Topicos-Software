@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="row">
    @foreach ($viewData["products"] as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $product->getName() }}
                    </h5>

                    <p class="card-text">
                        Price: ${{ $product->getPrice() }}
                    </p>

                    <a
                        href="{{ route('product.show', ['id' => $product->getId()]) }}"
                        class="btn btn-primary"
                    >
                        View product
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection