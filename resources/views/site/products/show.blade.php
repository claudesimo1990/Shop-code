@extends('site.layouts.base')

@section('header')
    @include('site.includes.header', ['name' => $product->name, 'description' => $product->description])
@endsection

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-12 row-cols-2 row-cols-md-12 row-cols-xl-12 justify-content-center">
                <h1>{{ $product->name }}</h1>
            </div>
        </div>
    </section>
@endsection
