@extends('Pages.main')
@section('title-page')
<div class="container md">
    <div class="row">
        <div class="col justify-content-start">
            <p class="text-start fw-bold my-5">
                Company :
            </p>
            {{ $company->name . " " . $company->location . " " . $company->createYear }}
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-between gap-2">
            <a href="{{ route('companies.index') . '/' . $company->id . '/edit' }}" class="btn btn-outline-primary mt-3">Edit Company</a>
            <button  class="btn btn-danger" form="delete-form">Delete Company</button>
        </div>
    </div>
</div>
<form action="{{ route('companies.index') . "/" . $company->id }}" method="POST" type="hidden" id="delete-form">
    @csrf
    @method('DELETE')
</form>
@endsection
