@extends('layouts.sidebar')

@section('title', 'Edit Article')

@section('content')
	<h1>Edit: {!! $article->title !!}</h1>

	{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    	@include('pages.articles.partials._form', [
    		'submitButtonText' => 'Update Article'
    	])
    {!! Form::close() !!}

    @include('includes.errors.formErrors')
@endsection