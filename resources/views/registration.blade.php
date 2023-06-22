<x-header data="reg page" />
@extends('master')
{{-- @section('content') --}}
<h1>Registration page</h1>
<div class="container custom-login">
    <div class="row" style="margin-top:20px;margin-left:270px">

        <form action="regi" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <lable>Name</lable>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <br>
            <div class="form-group">
                <lable>Password</lable>
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
            <br>
            <div class="form-group">
                <lable>image</lable>
                <input type="file" name="profile_image" class="form-control">
            </div>
            <br>
            {{-- for checkboxes --}}
            <div class="form-group">
                <lable>Catagoery</lable><br><br>
                Cricket <input type="checkbox" name="cat[]" value="Cricket">
                footbal <input type="checkbox" name="cat[]" value="footbal">
                Sketing <input type="checkbox" name="cat[]" value="Sketing">
                Vollyball <input type="checkbox" name="cat[]" value=" Vollyball">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">submit
                </button>

            </div>
        </form>
    </div>
</div>

{{-- @endsection --}}
