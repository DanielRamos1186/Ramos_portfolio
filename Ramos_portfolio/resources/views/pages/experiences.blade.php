@extends('layouts.content')

@section('title', 'Experience')

@section('content')
<div class="container mt-4">
    <h2>My Experience</h2>
        <table class="table table-bordered">
            <thead> 
                <tr>
                    <th>Role</th>
                    <th>Description</th>
                    <th>Organization</th>
                    <th>Year</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($experiences as $exp)
                <tr>
                    <td>{{ $exp->role }}</td>
                    <td>{{ $exp->description }}</td>
                    <td>{{ $exp->organization }}</td>
                    <td>{{ $exp->year }}</td>
                </tr>
            @endforeach 
        </tbody>
    </table>
</div>

        

@endsection