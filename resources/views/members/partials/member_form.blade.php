<div class="form-group">
    {!! Form::label('name', 'First Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('surname', 'Last Name:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('id_number', 'ID Number:') !!}
    {!! Form::text('id_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('mobile_number', 'Mobile Number:') !!}
    {!! Form::text('mobile_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('date_of_birth', 'D.O.B:') !!}
    {!! Form::text('date_of_birth', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('language_id', 'Language:') !!}
    {!! Form::select('language_id', $languages, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('interest_id[]', 'Interest:') !!}
    {!! Form::select('interest_id[]', $interests, $member->interests->pluck('id')->all(), ['multiple' => true, 'class' => 'form-control']) !!}
</div>
