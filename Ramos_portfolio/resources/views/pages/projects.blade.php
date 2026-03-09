@extends('layouts.content')

@section('title', 'Projects')

@section('content')
<div class="container mt-4">
    <h2>My Projects</h2>
        <table class="table table-bordered">
            <thead> 
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Year</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->year }}</td>
                </tr>
            @endforeach 
        </tbody>
    </table>
</div>

        

@endsection