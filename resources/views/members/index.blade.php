
@extends('layouts.master')

@section('title', 'View Member List')

@section('content')
<div class="page-header">
    <h1>Member List</h1>
</div>

<div class="list-group">
   @foreach($member as $members){{--Because I used $data['member'] = $members; in the MemberController.php file, I can now use 'member'
                                        (the array key) as $member object in the index.blade.php file--}}
        <a href="{{url('members',array($members->id))}}" class="list-group-item">
        <p class="list-group-item-heading">{{$members->name}} {{$members->surname}} {{$members->id_number}}</p>
            <p class="list-group-item-text">Submitted on: {{$members->created_at}}</p>
        </a>
    @endforeach
</div>



@endsection


