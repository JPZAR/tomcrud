
@if(session('message')){{--Check to see if 'message' value exists | Get this value from key in the return redirect in MemberController store function--}}
    {!! session('message') !!} {{--Then just print it out. Printout in redirect, store function in MemberController--}}
@endif