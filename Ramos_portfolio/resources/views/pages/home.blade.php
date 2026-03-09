@extends('layouts.content')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
    <h2>About Me</h2>
        <table class="table table-bordered">
            <thead> 
                <tr>
                    <th>Full Name</th>
                    <th>Title</th>
                    <th>Bio</th>
                    <th>Email</th>
                    <th>Location</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($home as $profile)
                <tr>
                    <td>{{ $profile->full_name }}</td>
                    <td>{{ $profile->title }}</td>
                    <td>{{ $profile->bio }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>{{ $profile->location }}</td>
                </tr>
            @endforeach 
        </tbody>
    </table>
</div>

        

@endsection