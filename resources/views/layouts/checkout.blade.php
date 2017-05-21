@extends('layouts.master')


@section('content')



    <div class="row">

    @if(session('products') != null)

    @foreach( session('products') as $product)

        <div class="col-lg-4">

            <img src="{{$product[3]}}" alt="Generic placeholder image" width="140" height="140">
            <h2>{{$product[0]}}</h2>
            <p>{{$product[1]}}</p>
          <p><strong>Verð: {{$price_array[] = $product[2]}}</strong></p>

        </div><!-- /.col-lg-4 -->


    @endforeach
        <a href="/delete_from_basket?id={{$product[4]}}"><button class="">Tæma körfu</button></a>
    </div>
    <h1>You pay: ${{array_sum($price_array)}}</h1>

    @if (!Auth::guest())

    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#order_options">

        Next Step >

    </button>

    @else

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login">

            Next Step >

        </button>

    @endif



    @include('layouts.dialogs.dialogs')
    @yield('order_options_dialog')

   @endif




    @if(session('finish') == true)

        <h1>Pöntun Móttekin!</h1>

        <strong>
            <p></p>
            <p>Þú getur nálgast hana til okkar að Askalind 38 frá 8:00 til klukkan 18:00</p>
            <p>Ef þú hefur valið senda þá munum við nota notendaupplýsingarnar þínar til að
                senta vörurnar heim að dyrum.
            </p>



        </strong>

    @endif

    @if(session('products') == null && session('finish') != true)

        <h1>Karfan Þín er tóm!</h1>

    @endif




    @endsection