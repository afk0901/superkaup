
@section('login_dialog')
    <!-- Modal -->
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Innskráning</h4>
                </div>
                <div class="modal-body">

                    @include('auth.login')
                    @yield('login')

                </div>

            </div>

        </div>
    </div>



@endsection

@section('register_dialog')

    <!-- Modal -->
    <div id="register" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nýskrá</h4>
                </div>
                <div class="modal-body">
                    @include('auth.register')
                    @yield('register')
                </div>

            </div>

        </div>
    </div>


@endsection


 @section('order_options_dialog')

     <!-- Modal -->
         <div class="modal fade" id="order_options" role="dialog">
             <div class="modal-dialog">

                 <!-- Modal content-->
                 <div class="modal-content">

                 <div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Finish your order</h4>
                 </div>
                 <div class="modal-body">

                     @include('layouts.order_options')

                 </div>


                 </div>
             </div>
         </div>

@endsection

{{--Later on...--}}
@section('paying_dialog')


    <form action="/your-server-side-code" method="POST">
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_ztOrPc8xMXbwVvllTSdLzZfM"
                data-amount="999"
                data-name="superkaup_pontun"
                data-description="Widget"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto">
        </script>
    </form>

@endsection


