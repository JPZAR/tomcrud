@extends('layouts.master')

@section('title', 'Edit Member')

@section('content')

    <div class="page-header">
        <h3>Edit Member</h3>
    </div>

    {{--This syntax {!!  !!} is the syntax we use when we want an html output. Form::model function is provided by the forms library which you
    downloaded/added through composure (laravel collective). $member is the model object derived from $data['member'] = $member;
    in the MemberController.php file. So $member = the array key name ('member'). An action item is referenced in the array and this is
    associated with the store controller action--}}

    {{--Note, instead of passing just a string to the action key, you need to pass an array. The url is generated with an id so the $member->id is crucial. Different than create function in Member Controller--}}
    {!! Form::model($member,
        [
            'action' => ['MemberController@update', $member->id],
            'method' => 'put'
        ]) !!}

    @include('members.partials.member_form')

    <button class="btn btn-success" type="submit">Save Changes</button>

    {!! Form::close() !!}

@endsection