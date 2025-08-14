@extends('Pages.main')
@section('title-page')
<div class="container-md">
    <div class="row my-5">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <p class="text-muted lead display-3 mb-0">
                Companies
            </p>
            @auth
                <a href="{{ route('companies.create') }}" class="btn btn-primary">
                    <span class="fw-bold">
                    Create Company
                    </span>
                </a>
            @endauth
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12 justify-content-start">
            @foreach ($Companies as $Company)
                <div class="list-group rounded">
                    <a href="{{ route('companies.index') . '/' . $Company->id }}" class="my-2 list-group-item list-group-item-action text-primary">
                        <span class="fw-bold text-muted">
                            Name :
                        </span>
                        {{ $Company->name }}
                        <span class="fw-bold text-muted">
                            Location :
                        </span>
                        {{ $Company->location }}
                        <span class="fw-bold text-muted">
                            Year Of Creation :
                        </span>
                        {{ $Company->createYear }}
                    </a>
                </div>
            @endforeach
        </div>
        {{ $Companies->links() }}
    </div>
</div>
@endsection
