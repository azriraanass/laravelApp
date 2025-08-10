@extends('Pages.main')
@section('title-page')
<div class="container md">
    <div class="row">
        <div class="col justify-content-start">
            <p class="text-start fw-bold my-5">
                Produit :
            </p>
            {{ $oneProduit->name . " " . $oneProduit->price . " " . $oneProduit->description }}
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-between gap-2">
            <a href="{{ route('produits.index') . '/' . $oneProduit->id . '/edit' }}" class="btn btn-outline-primary mt-3">Edit Product</a>
            <button  class="btn btn-danger" form="delete-form">Delete Product</button>
        </div>
    </div>
</div>
<form action="{{ route('produits.index') . "/" . $oneProduit->id }}" method="POST" type="hidden" id="delete-form">
    @csrf
    @method('DELETE')
</form>
@endsection
