
<!--extends master template-->
@extends('layouts.master')
    <!--setting page title-->
    @section('title')
        @if(isset($title))
            {{$title}}
        @else
            no title
        @endif
    @endsection

    <!--start setting page description-->
    @section('description')
        @if(isset($description))
            {{$description}}
        @else
            no description
        @endif
    @endsection
    <!--setting author-->
    @section('author', 'HaiLong')

<!--page content-->
@section('content')
    <!--start slide-->
    @include('components.slider')
    <!--end slide-->

    <!--home service layouts-->
    @include('components.homeServices')
    <div class="divider"><span></span></div>

    <!--promotion layouts-->
    @include('components.promotion')
    <div class="divider"><span></span></div>

    <!--destination layouts-->
    @include('components.destination')
    <div class="divider"><span></span></div>

    <!--destination layouts-->
    @include('components.homeTours')
    <div class="divider"><span></span></div>

            @include('components.tourDetailMix')
    <!--clients layouts-->
    @include('components.clients')
    <div class="divider"><span></span></div>
@endsection

