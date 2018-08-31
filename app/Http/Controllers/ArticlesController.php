<?php

namespace App\Http\Controllers;

//use Request;
use Auth;
use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{

    public function __construct(){
        $this->middleware('auth', [
            'except' => ['index', 'show']
        ]);
    }

    public function index(){
    	$articles = Article::latest('published_at')->published()->get();
        return view('pages.articles.browseArticles', compact('articles'));

    	//$projects_category = 'development';
    	//$projects_title = 'v12software';

    	//return view('pages.projects')->with('pcat', $projects_category);
    	/*return view('pages.projects')->with([
    		'first' => 'jefferey',
    		'second' => 'way'
    	]);*/
    	/*return view('pages.projects', [
    		'first' => 'jefferey',
    		'second' => 'way'
    	]);*/
    	//return view('pages.projects', compact('projects_category', 'projects_title'));
    }

    public function show(Article $article){
        //$article = Article::findOrFail($id);
        //dd($article->published_at);
        /*if (is_null($article)) {
            abort(404);
        }*/
        return view('pages.articles.showArticle', compact('article'));
    }

    public function create(){
        return view('pages.articles.createArticle');
    }

    public function store(ArticleRequest $request){
        //$input = Request::all();
        //$input['published_at'] = Carbon::now();
        //$this->validate($request, ['title' => 'required', 'body'=>'required']);
        //Article::create($request->all());
        Auth::user()->articles()->create($request->all());
        //\Session::flash('flash_message', 'Your article has been created');
        //\Flash::success();
        //\Flash::info();
        flash('Your article has been created');/*->important();*/
        return redirect('articles');/*->with([
            'flash_message' =>  'Your article has been created'
            //'flash_message_important' => false
        ]);*/
    }

    public function edit(Article $article){
        //$article = Article::findOrFail($id);        
        return view('pages.articles.editArticle', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request){
        //$article = Article::findOrFail($id);        
        //$article->update($request->all());
        $article->user()->associate($article);
        $article->save();
        return redirect()->route('articles.show', ['id' => $id]);
    }

    public function destroy(Article $article){
        var_dump('expression');
        dd('article has been destroyed');
        return 'article has been destroyed';
    }
}
