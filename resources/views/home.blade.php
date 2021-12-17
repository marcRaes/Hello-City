@extends('layout')

@section('content')
    <img src="/images/quebec_flag.png" alt="Quebec Flag" width="300px">

    <h1>Hello from Quebec!</h1>

    <p>It's currently {{ date('h:i A') }}.</p>
@endsection
