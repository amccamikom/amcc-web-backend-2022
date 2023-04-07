@extends('layout')

@section('title', $question->title)

@section('content')
    <h1 class="my-3">{{ $question->title }}</h1>
    <div class="paragrap">
        {{$question->content}}
    </div>
    <footer class="card-footer">
        by: {{ $question->username }} - {{ $question->created_at->diffForHumans() }}
    </footer>
@endsection