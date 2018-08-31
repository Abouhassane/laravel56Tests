@extends('layouts.sidebar')

@section('title', 'Articles')

@section('content')
    <h1>Articles</h1>
    <hr/>
    @foreach($articles as $article)
    	<div class="container row mb-3">
            <div class="col-md-8">
                <h2>
                    <a href="{{ route('articles.show', $article->id) }}"> {{-- 
                        url('/articles', $article->id)
                        action('ArticlesController@show', [$article->id]) --}}
                        {{ $article->title }}
                    </a>
                </h2>
                
                <div class="body">{{ $article->body }}</div>   
            </div>
            <div class="col-md-4" style="margin-top: 15px;">
                <a href="{{ route('articles.edit', $article->id) }}" style="text-align: left; margin: 0 20px;">
                    <button type="button" class="btn btn-primary" style="width: 78.55px;">Edit</button>
                </a>
                <a href="{{ route('articles.destroy', $article->id) }}" style="text-align: right;">
                    <button type="button" class="btn btn-danger">Remove</button>
                </a>
            </div>   
        </div>
    @endforeach
	
    {{-- look into AppServiceProvider.php for aliasing a component --}}
    {{--@alert(['type'=>'danger']) {{- @component('components.alert', ['type'=>'danger']) -}}
	    @slot('title')
	        Forbidden
	    @endslot

	    @slot('alert')
	        You are not allowed to access this resource!
	    @endslot

	    Anything written outside the slot will be put in the $slot variable.
	@endalert {{- @endcomponent --}}

@endsection