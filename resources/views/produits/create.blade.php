@extends('Pages.main')
@section('title-page')
<div class="container-md">
  <div class="row justify-content-center my-4">
    <span class="display-3 fw-bold text-muted">
      Create Product
    </span>
  </div>
  <div class="row justify-content-center">
    <div class="col-6">
      <form action="/produits" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
          <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>
          @error('name')
            <p class="mt-1 text-danger fw-bold fst-italic">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Price</label>
          <input type="number" class="form-control" name="price" id="exampleInputPassword1" >
          @error('price')
            <p class="text-danger mt-1 fw-bold fst-italic">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Leave a description here" name="description" id="description" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Description</label>
          @error('description')
            <p class="text-danger mt-1 fw-bold fst-italic">
              {{ $message }}
            </p>
          @enderror
        </div>
        <select class="form-select my-3" aria-label="Default select example" name="company">
          <option selected disabled>Companies</option>
            @foreach ( $companies as $company )
              <option value="{{ $company->id }}">{{ $company->name }}</option>  
            @endforeach
        </select>
        @error('company')
          <p class="text-danger fw-bold mt-1 fst-italic">
            {{ $message }}
          </p>
        @enderror
        <br/>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
    </div>
  </div>
</div>
@endsection