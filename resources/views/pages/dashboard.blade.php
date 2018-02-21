@extends('layouts.master')
@section('css')

    <style>
        /* Custom panels for Dashboard */
        .panel-success .panel-heading {
            background-color: #D35702 !important;
        }
        .panel-dark .panel-heading {
            background-color: #333333 !important;
        }

        span.glyphicon.dash{
            font-size: 3.7em;
        }
        /***********************/

    </style>
    <link rel="stylesheet" href="{{asset('css/jquery.datatables.css')}}">

@stop
@section('content')

    <div class="row">

        @include('layouts.alert')

        Content here
    </div><!-- row -->

@stop

