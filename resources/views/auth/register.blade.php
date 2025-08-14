@extends('Pages.main')
@section('title-page')
<p class="lead display-3 text-muted ms-5">Register</p>
    <div class="container-md mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="exampleFullName" aria-describedby="emailFullName" name="name" value="{{ old('name') }}">
                            @error("full_name")
                                <p class="text-danger fw-bold fst-italic mt-1">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            @error('email')
                                <p class="text-danger fw-bold fst-italic mt-1">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                            @error('password')
                                <p class="text-danger fw-bold fst-italic mt-1">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Repeat Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
