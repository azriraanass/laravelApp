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
</div>
@endsection
