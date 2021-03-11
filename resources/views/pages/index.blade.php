@extends('layouts.app')

@section('content')
<div class = "jumbotron text-center">
        <h1>{{$title}}</h1>     
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>

<div style="width: 100%;">
        <div style="width: 50%; height: 300px; float: left; background: grey;"> 
        <p><b>iCare</b> is a platform to ease students to book appointments 
        with counsellors at their preferred time. iCare dedicates to improve 
        mental wellbeing of students in struggle time with a conducive environment</p>

        <p>Our concern: Choose, assist, recommend and encourage.</p>
        <p>Our tagline: Your mental health is your wealth and your wealth is our mirror.</p>
        <p>Our purpose: To ease the booking process which allows two ways of communication among counsellors and students.</p>
        <p>Our hope: To help students’ gain support and sufficient knowledge of mental health</p>
        </div>

        <div style="margin-left: 50%; height: 300px; background: white;"> 
        <p>Counsellors</p>
        </div>
</div>



@endsection

