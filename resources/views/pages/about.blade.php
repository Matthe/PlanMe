@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Contact</h1>

            <div>
                <p>About me and this beautiful site. Feel free to fill in the contact form if you have a question</p>
            </div>

            {!! Form::open(['url' => 'contact/submit']) !!}

            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'E-Mail Adress')}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
            </div>
            <div class="form-group">
                {{Form::label('message', 'Message')}}
                {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
            </div>
            <div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
