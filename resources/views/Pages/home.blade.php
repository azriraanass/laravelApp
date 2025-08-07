@extends('Pages.main')
@section('title-page')
<section id="intro">
    <div class="container-lg">
        <div class="row justify-content-center align-items-center">
            <div class="col-5">
                <p class="display-5">First Laravel App</p>
                <p class="lead fst-italic text-muted text-md-start text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, voluptates aperiam molestias ipsa eveniet vitae repel.
                </p>
                <a href="#" class="btn btn-secondary btn-lg">Buy Now</a>
            </div>
            <div class="col-5 d-none d-md-block">
                <img class="img-fluid" src="https://github.com/iamshaunjp/bootstrap-5-tutorial/blob/lesson-8/assets/ebook-cover.png?raw=true" alt="Ebook Image">
            </div>
        </div>
    </div>
</section>
@endsection