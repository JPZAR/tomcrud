<!DOCTYPE html>
<html>
    <head>
        <title>{{$member->name}}</title>
    </head>
    <body>
        <h1>Herewith Member Details: </h1>
        <p>Name: {{$member->name}}</p>
        <p>Surname: {{$member->surname}}</p>
        <p>ID Nr: {{$member->id_number}}</p>
        <p>Mobile Nr: {{$member->mobile_number}}</p>
        <p>Email: {{$member->email}}</p>
        <p>D.O.B: {{$member->date_of_birth}}</p>
        <p>Created At: {{$member->created_at}}</p>
    </body>
</html>