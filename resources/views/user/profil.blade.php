@extends('layouts.user')

@section('content')

<h1>Profil</h1>
<hr>
<div class="profil">
    <div class="row">
        <div class="col-lg-2">
            <h6>Nama</h6>
            <h4>User</h4>
            <br>
            <h6>Username</h6>
            <h4>Username123</h4>
            <br>
            <h6>Email</h6>
            <h4>email123@student.unsika.ac.id</h4>
            <br>
            <h6>No Telp</h6>
            <h4>08XXXXXXX</h4>
            <a href="/ubahprofil"><button type="button" class="btn btn-success">Edit Profil</button></a>
        </div>
    </div>
</div>
    

@endsection