@extends('layouts.app')

@section('title', 'Home | Onlined')

@section('styles')
    {{--  --}}
@endsection

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Selamat datang di <span>De Terrace</span></h1>
                    <h2>Mempersembahkan makanan dengan kualitas terbaik</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                        {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a> --}}
                    </div>
                </div>


            </div>
        </div>
    </section><!-- End Hero -->
@endsection

@section('content')

    @include('home.about')
    {{-- @include('home.why-us') --}}
    @include('home.menu')
    {{-- @include('home.special') --}}
    {{-- @include('home.event')
    @include('home.gallery')
    @include('home.profesional') --}}
    @include('home.contact')

@endsection
