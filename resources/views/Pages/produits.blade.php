@extends('Pages.main')
@section('title-page')
<div class="container-md">
    <div class="row my-5">
        <div class="col">
            <span class="text-muted lead display-3">
                Produits
            </span>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12 justify-content-start">
            @foreach ($Produits as $singleProduit )
                <div class="list-group">
                    <a href="{{ route('produits') . '/' . $singleProduit->id }}" class="list-group-item list-group-item-action">{{ $singleProduit->name . " " . $singleProduit->price . " " . $singleProduit->description }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
