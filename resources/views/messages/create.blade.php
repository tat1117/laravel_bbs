// resources/views/articles/create.blade.php

@extends('layout')

@section('content')
    <h1>Write a New Message</h1>

    <hr/>

    {!! Form::open(['url' => 'messages']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('created_at', 'Creat On:') !!}
            {!! Form::input('date', 'created_at', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Message', ['class' => 'btn btn-primary form-control']) !!}
            <form method="POST" action="http://localhost:8000/messages" accept-charset="UTF-8">
        </div>
    {!! Form::close() !!}
@endsection
