<!-- resouces/views/articles/index.blade.php -->

@extends('layout')

@section('content')
    <h1>Messages</h1>
    <hr/>

    <a href ="{{ action('MessagesController@create') }}">新規作成</a>
    @foreach($messages as $message)
        <article>
            <h2>
                <a href="{{ url('messages', $message->id) }}">
                    {{ $message->title }}
                </a>
            </h2>
            <div class="body">
                {{ $message->body }}
            </div>
        </article>
    @endforeach
@endsection
