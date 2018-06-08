@extends('layouts.master')

@section('title', $member->name)

@section('content')
    <h1>Member Details: </h1>
    <p>Name: {{$member->name}}</p>
    <p>Surname: {{$member->surname}}</p>
    <p>ID Nr: {{$member->id_number}}</p>
    <p>Mobile Nr: {{$member->mobile_number}}</p>
    <p>Email: {{$member->email}}</p>
    <p>D.O.B: {{$member->date_of_birth}}</p>
    <p>Language: {{$member->language->name}}</p> {{--reading language from the Member model language function--}}
    <p>
        Interests:
    <ul>
        @foreach ($member->interests as $interest)
            <li>{{ $interest->name }}</li>
        @endforeach
    </ul>
    <p>
    <p>Created At: {{$member->created_at}}</p>
    <div class="page-header">
        <a href="{{action('MemberController@edit', $member->id)}}" class="btn btn-info">Edit</a>
    </div>
@endsection