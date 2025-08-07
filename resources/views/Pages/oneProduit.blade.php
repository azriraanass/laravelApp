@extends('Pages.main')
@section('title-page')
<div class="container md">
    <div class="row">
        <div class="col justify-content-start">
            <p class="text-start fw-bold my-5">
                Produit :
            </p>
            {{ implode(' ',$oneProduit[0]) }}
        </div>
    </div>
</div>
@endsection
