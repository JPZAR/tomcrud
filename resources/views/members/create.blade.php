@extends('layouts.master')

@section('title', 'Create New Member')

@section('content')

    <div class="page-header">
        <h3>Create a New Member</h3>
    </div>

    {{--This syntax {!!  !!} is the syntax we use when we want an html output. Form::model function is provided by the forms library which you
    downloaded/added through composure (laravel collective). $member is the model object derived from $data['member'] = $member;
    in the MemberController.php file. So $member = the array key name ('member'). An action item is referenced in the array and this is
    associated with the store controller action--}}

    {!! Form::model($member, ['action' => 'MemberController@store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'First Name:') !!}
            {!! Form::text('name', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('surname', 'Last Name:') !!}
            {!! Form::text('surname', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('id_number', 'ID Number:') !!}
            {!! Form::text('id_number', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('mobile_number', 'Mobile Number:') !!}
            {!! Form::text('mobile_number', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('date_of_birth', 'Date of Birth:') !!}
            {!! Form::text('date_of_birth', '', ['class' => 'form-control']) !!}
        </div>

        <button class="btn btn-success" type="submit">Save Member</button>

    {!! Form::close() !!}

@endsection