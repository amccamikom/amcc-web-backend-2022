<?php $title = 'Buat Pertanyaan';?>
@extends('layout')

@section('content')
    <h1>{{$title}}</h1>
    <form action="{{ url('questions/' . $question->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="question_id" value="{{$question->id}}">
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Judul Pertanyaan</label>
            <div class="col-sm-10">
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $question->title) }}">
                @error('title')
                    <div class="text-sm text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="content" class="col-sm-2 col-form-label">Detail Pertanyaan</label>
            <div class="col-sm-10">
                <textarea name="content" id="content" rows="5" class="form-control">{{ old('content', $question->content) }}</textarea> 
                @error('content')
                    <div class="text-sm text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 float-end">
            <button type="submit" class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-warning" onclick="history.back()">Kembali</button>
        </div>
    </form>
@endsection
