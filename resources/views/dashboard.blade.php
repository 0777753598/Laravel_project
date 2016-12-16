@extends('masterPage')

@section('header')
    <li class="welcome">Welcome {{ session()->get('user') }} </li>

    <nav>
        <ul>
            <li><a href="login">Home</a></li>
            <li><a href="BillPayment">Pay My Bill</a></li>
            <li><a href="connections">Connections</a></li>
            <li><a href="contact">Contact us</a></li>
            <li><a href="logout">Log Out</a></li>

        </ul>
    </nav>
@stop


@section('content')



@stop