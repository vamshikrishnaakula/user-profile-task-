<x-header data="user page component" />
<h1>adding data</h1>
<h2>logged in as {{ auth()->user()->name }}</h2>
<div class="row" style="margin-top:150px">

    <center>
        <form action="submit" method="POST">
            @csrf
            <label>
                <font size="+2">ID</font>
            </label>
            <input type="text" name="id" placeholder="Id" size="35" />
            <br>
            <br>
            <label>
                <font size="+2">Name</font>
            </label>
            <input type="text" name="name" placeholder="enter name" size="35" />
            <br>
            <br>
            <label>
                <font size="+2">Fathername</font>
            </label>
            <input type="text" name="fathername" placeholder="enter fathername" size="35" />
            <br>
            <br>
            <label>
                <font size="+2">Address</font>
            </label>
            <input type="text" name="address" placeholder="enter address" size="35" />
            <br>
            <br>
            <button type="submit" size="35">submit</button>
        </form>
    </center>
</div>
