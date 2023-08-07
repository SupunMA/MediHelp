@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid">

    @include('Users.Admin.Home.cards')
{{$ids}}
</div>
@endsection

@section('header')
Dashboard
@endsection
