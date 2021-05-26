@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Contact</h1>
            {!! Form::open(['url' => 'contact/submit']) !!}
            <div>
                <p>This is the contact form of my site. You can send me a message for business inquiries or questions</p>
            </div>

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
