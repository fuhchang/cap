<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h1>User Sign Up</h1>
        <hr/>
        {!! Form::open(['url'=>'signup']) !!}
            <div class="form-group">
                {!! Form::label('name' , 'Name:')!!}
                {!! Form::text('name', null, ['class'=> 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email' , 'Email:')!!}
                {!! Form::text('email', null, ['class'=> 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password' , 'Password:')!!}
                {!! Form::text('password', null, ['class'=> 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create User', ['class'=> 'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close()!!}
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
