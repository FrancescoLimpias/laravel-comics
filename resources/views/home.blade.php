@extends('layouts.page')

@section('header')
    <title>DC Home</title>
@endsection

@section('main')
    <main id="HomeMain" class="d-flex flex-column align-items-center">
        <div class="hover d-flex">
            <h4>
                CURRENT SERIES
            </h4>
        </div>

        <div class="gallery  my-5
        d-flex">

            COMICS GALLERY
            <div class="card">
                <img src="" alt="">
            </div>
        </div>

        <div class="bottom mb-3">
            <button class="btn btn-primary rounded-0">
                LOAD MORE
            </button>
        </div>
    </main>
@endsection
