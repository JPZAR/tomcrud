
@if(count(session('errors'))>0) {{--'error' need to match 'error' in the return redirect with function in the store function in the MemberController--}}
    <div class="alert alert-danger">
        @foreach (session('errors')->all() as $error)
            {{$error}}<br>
        @endforeach
    </div>
@endif