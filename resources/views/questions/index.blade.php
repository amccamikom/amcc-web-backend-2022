<?php 
$title = 'List Pertanyaan';
?>

@extends('layout')

@section('content')
    <h1>{{$title}}</h1>
    <a href="{{ url('questions/create') }}" class="btn btn-primary my-2">Buat pertanyaan baru</a>
    <div class="row g-2 my-2">
        @foreach ($questions as $question)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $question->title }}</h5>
                        <p class="card-text">{{ $question->content }}</p>
                    </div>
                    <div class="card-footer row">
                        <a href="{{ url('questions/' . $question->id) }}" class="card-link btn col-12 col-md-4">Read more</a>
                        <a href="{{ url('questions/' . $question->id) . '/edit' }}" class="card-link btn btn-warning ms-2 col-12 col-md-3">Edit</a>
                        <form action="{{url('questions/' . $question->id)}}" method="post" class="col-12 col-md-3 px-0 ms-2">
                            @method('DELETE')
                            @csrf
                            <button class="card-link btn btn-danger w-100" onclick="return confirm('Yakin menghapus data ini?')">Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection