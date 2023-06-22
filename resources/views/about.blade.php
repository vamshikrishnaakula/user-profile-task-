<x-header data="this is about page" />
{{-- @include('component') --}}
<h2>logged in as {{ auth()->user()->name }}</h2>
<h1>
    <marquee> Memeber list</marquee>
</h1>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<div class='container-fluid' style="margin-top:150px">
    <center>
        <table style="width:950px;height:300px">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>profile</th>
                <th>categories</th>
                <th>Opp</th>
            </tr>
            <tr>

                @foreach ($members as $member)
            <tr>

                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td><img src="data:image/png;base64,{{ $member->profile_image }}" alt="John" style="width:150px" />
                </td>
                {{-- <td>{{$member->categories}}</td> --}}
                {{-- @if (count($member) > 0) --}}
                @php
                    $categories = json_decode($member->categories);
                @endphp

                @foreach ($categories as $cat)
                    {{-- <div class="td" style="font-size: 20px"> --}}

                    {{ $loop->first ? '' : ',' }}<br>
                    <td>{{ $cat }}</td>
                    {{-- </div> --}}
                @endforeach
                {{-- @else
     <h1>no catageroes </h1> --}}
                {{-- @endif --}}
                <td>
                    <a href={{ 'delete/' . $member->id }}>Delete</a>
                    <a href={{ 'edit/' . $member->id }}>Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <span>
            {{ $members->links() }}
        </span>
    </center>
</div>

<style>
    .w-5 {
        display: none;
    }
</style>

<div class="class" style="margin-top:30px;margin-left:40px">

    <a href="/logout">logout</a>
</div>
