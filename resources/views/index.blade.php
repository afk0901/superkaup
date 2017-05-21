@extends('layouts.master')

@section('content')


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <!-- Three columns of text below the carousel -->


    <div class="row">

        @foreach($all_products as $product)

            <div class="col-lg-4">
                <a href="./product/{{$product->id}}">@include('layouts.product_image')</a>

                @include('layouts.include_product')

                @include('layouts.basketbutton')
            </div>

        @endforeach
        </div>


@endsection





