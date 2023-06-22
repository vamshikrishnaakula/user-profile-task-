<x-header data="reg page"/>
@extends('master')
{{-- @section("content") --}}
<h1>Edit page</h1>
          
<div class="container custom-login">
    <div class="row" style="margin-top:20px;margin-left:270px">
            <form action="/edit" method="POST" enctype="multipart/form-data" >
            @csrf
             <div class="form-group">
                 <lable>ID</lable>
                   <input type="text" name="id" class="form-control" value={{$data2['id']}} placeholder="id">
               </div>
            <div class="form-group">
                <lable>Name</lable>
                <input type="text" name="name" class="form-control" value={{$data2['name']}} placeholder="name">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value={{$data2['email']}} placeholder="Email">
            </div>
            <br>
            <div class="form-group">
                <lable>image</lable>
                {{-- @php
                    $image = "background.jpg"
                @endphp 

                {{$image}} --}}
                
                <input type="file"  name="profile_image" class="form-control" >
            </div>
            <br>
            <div class="form-group">
                @php
                    $categories= json_decode($data2->categories );
                @endphp 
                <lable>Catagoery</lable><br><br>

                
               Cricket <input type="checkbox" name="cat[]" value="Cricket" {{ in_array('Cricket',$categories)?'checked':''}}>
               footbal <input type="checkbox" name="cat[]" value="footbal" {{ in_array('footbal',$categories)?'checked':''}}>
               Sketing <input type="checkbox" name="cat[]" value="Sketing" {{ in_array('Sketing',$categories)?'checked':''}}>  
               Vollyball <input type="checkbox" name="cat[]" value=" Vollyball" {{ in_array('Vollyball',$categories)?'checked':''}}>

            </div>
            <div class="form-group">
            <input type="submit"  class="btn btn-primary">
            
            </div>
            </form>
    </div>
</div>

{{-- @endsection --}}