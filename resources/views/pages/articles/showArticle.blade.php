@extends('layouts.sidebar')

@section('title')
	Articles | {{ $article->title }}
@endsection

@section('content')
    <div class="row">
    	<div class="col-md-8">
    		<h1>{{ $article->title }}</h1>
    	</div>
    	<div class="col-md-4" style="margin-top: 15px; text-align: right;">
            <a href="{{ route('articles.edit', $article->id) }}">
                <button type="button" class="btn btn-primary">Edit</button>
            </a>
        </div>
    </div>

    <hr/>
    
    <div class="body">
        {{ $article->body }}
    </div>
    
    <br/>

    {{ $article->published_at }}
@endsection