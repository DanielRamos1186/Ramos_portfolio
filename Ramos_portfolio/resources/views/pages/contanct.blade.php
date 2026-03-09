@extends('layouts.content')

@section('title', 'Contact')

@section('content')
<div class="container mt-4">
    <h2>Contact Information</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Email</th>
                <th>LinkedIn</th>
                <th>GitHub</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->email }}</td>
                    <td><a href="{{ $contact->linkedin }}" target="_blank">{{ $contact->linkedin }}</a></td>
                    <td><a href="{{ $contact->github }}" target="_blank">{{ $contact->github }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection