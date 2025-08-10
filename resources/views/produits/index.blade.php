@extends('Pages.main')
@section('title-page')
<div class="container-md">
    <div class="row my-5">
        <div class="col-12 justify-content-between d-flex align-items-center">
            <p class="text-muted lead display-3 mb-0">
                Produits
            </p>
            <a href="{{ route('produits.create') }}" class="btn btn-primary">
                <span class="fw-bold">
                    Create Product
                </span>
            </a>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12 justify-content-start">
            @foreach ($Produits as $singleProduit )
                <div class="list-group rounded">            
                    <a href="{{ route('produits.index') . '/' . $singleProduit->id }}" class="my-2 list-group-item list-group-item-action">
                        <p class = "text-start text-primary fw-bold text-capitalize">
                            {{ $singleProduit->company->name }}
                        </p>                
                        {{ $singleProduit->name . " " . $singleProduit->price . " " . $singleProduit->description }}
                    </a>
                </div>
            @endforeach
        </div>
        {{ $Produits->links() }}
    </div>
</div>
@endsection
