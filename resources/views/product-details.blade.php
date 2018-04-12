@extends("layout")

@section('title',"Details")

@section('content')
@include("search-area")

<?php $pageHead = "Details"; ?>
@include("page-head")

@include("product-details-content")
@stop