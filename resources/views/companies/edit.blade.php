@extends('Pages.main')
@section('title-page')
<div class="container-md">
  <div class="row justify-content-center my-4">
    <span class="display-3 fw-bold text-muted">
      Edit Company
    </span>
  </div>
  <div class="row justify-content-center">
    <div class="col-6">
      <form action="/companies/{{ $company->id }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{ $company->name }}">
          @error('name')
            <p class="mt-1 text-danger fw-bold fst-italic">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Location</label>
          <input type="text" class="form-control" name="location" id="exampleInputPassword1" value="{{ $company->location }}">
          @error('location')
            <p class="text-danger mt-1 fw-bold fst-italic">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Creation Date</label>
          <input type="date" class="form-control" name="createYear" id="exampleInputPassword1" value="{{ $company->createYear }}">
          @error('createYear')
            <p class="text-danger mt-1 fw-bold fst-italic">
              {{ $message }}
            </p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
  </div>
</div>
@endsection