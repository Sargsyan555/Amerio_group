<?php $countries = \App\Http\Controllers\PageController::countries();?>

@extends('layouts.base')

@section('title', 'Product')

@section('content')

    <div class="product_section " >
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Products</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
