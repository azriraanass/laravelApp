@extends('Pages.main')
@section('title-page')
<div class="container-md">
  <div class="row justify-content-center my-4">
    <span class="display-3 fw-bold text-muted">
      Edit Product : {{ $Produit->name }}
    </span>
  </div>
  <div class="row justify-content-center">
    <div class="col-6">
      <form action="/produits/{{ $Produit->id }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" value="{{ $Produit->name }}" id="name" name="name" aria-describedby="emailHelp">
          @error('name')
            <p class="mt-1 text-danger fw-bold fst-italic">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Price</label>
          <input type="number" class="form-control" name="price" id="exampleInputPassword1" value="{{ $Produit->price }}">
          @error('price')
            <p class="text-danger mt-1 fw-bold fst-italic">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Leave a description here" name="description" id="description" style="height: 100px">{{ $Produit->description }}</textarea>
          <label for="floatingTextarea2">Description</label>
          @error('description')
            <p class="text-danger mt-1 fw-bold fst-italic">
              {{ $message }}
            </p>
          @enderror
        </div>
        <select class="form-select my-3" aria-label="Default select example" name="company">
            @foreach ( $companies as $company )
                <option 
                    value="{{ $company->id }}" 
                    {{ $company->id === $Produit->company_Id ? 'selected' : '' }}
                    >
                    {{ $company->name }}
                </option>  
            @endforeach
        </select>
        @error('company')
          <p class="text-danger fw-bold mt-1 fst-italic">
            {{ $message }}
          </p>
        @enderror
        <br/>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
  </div>
</div>
@endsection