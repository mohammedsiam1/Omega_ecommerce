@extends('layouts.app')
@section('content')


@include('partial.frontend.customer.sidebar')

<section class="py-3">


    <div class="container">
        <div class="col-lg-8 ">

        <livewire:frontend.customer.orders-component/>

        </div>
        <!-- SIDEBAR -->
    </div>
</section>

@endsection