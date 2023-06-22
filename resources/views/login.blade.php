<x-header data="login page component"  />
@extends('master')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4" style="margin-top:10%">
            <form action="/auth" method="POST" >
                <div class="form-group">
                    @csrf
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group" style="margin-left:250px">
                   <a href="/change-password">ChangePassword</a>
               </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <br>
                <br>
                <div class="col">
                  <a href="/registration">Registration</a>
                </div>
            </form>
        </div>
    </div>
</div>
