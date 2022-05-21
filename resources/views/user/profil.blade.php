@extends('layouts.user')

@section('content')

<h1>Profil</h1>
<hr>
<div class="profil">
    <div class="row">
        <div class="col-lg-2">
            <h6>Nama</h6>
            <h4>{{auth()->user()->name}}</h4>
            <br>
            <h6>Username</h6>
            <h4>{{auth()->user()->username}}</h4>
            <br>
            <h6>Email</h6>
            <h4>{{auth()->user()->email}}</h4>
            <br>
            <h6>No Telp</h6>
            <h4>{{auth()->user()->notelp}}</h4>
        </div>
    </div>
</div>
    

@endsection