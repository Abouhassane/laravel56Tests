@extends('layouts.sidebar')

@section('title', 'Create an Articles')

@section('content')
    <h1>Create an Article</h1>
    <hr/>
    {!! Form::open(["url" => "articles"]) !!}
    	@include('pages.articles.partials._form', [
            'submitButtonText' => 'Add Article'
        ])
    {!! Form::close() !!}
    @include('includes.errors.formErrors')
@endsection