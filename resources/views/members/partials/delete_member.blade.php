<hr>

<h4>Delete This Member:</h4>
{{--We use form open and not form method because there is no input here. We're not working with values.
Again need to specify the method used as we are not using the default POST--}}
{!! Form::open([
    'action' => ['MemberController@destroy', $member->id],
    'method' => 'delete',
    'class' => 'delete-member'
]) !!}

    <button type="submit" class="btn btn-danger">Delete This Member</button>

{!! Form::close() !!}