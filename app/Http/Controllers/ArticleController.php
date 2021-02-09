<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Redirect,Response;

class ArticleController extends Controller
{
   /**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/

	public function index()
	{
		$articles = Article::latest()->paginate(4);
		return view('articles.index',compact('articles'))->with('i', (request()->input('page', 1) - 1) * 4);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/

	public function create()
	{
		return view('articles.create');
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param \Illuminate\Http\Request $request
	* @return \Illuminate\Http\Response
	*/

	public function store(Request $request)
	{

		$artId = $request->art_id;
		Article::updateOrCreate(['id' => $artId],['nom_article' => $request->nom_article,
        'description_technique' => $request->description_technique]);
		if(empty($request->art_id))
    return redirect()->route('articles.index')->with('article_added','Article a été créé avec succès');
		else

		return redirect()->route('articles.index')->with('article_added','Article a été modifié avec succès');
	}

	/**
	* Display the specified resource.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function show(Article $article)
	{
		return view('articles.show',compact('article'));
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/
	
	public function edit($id)
	{
		$where = array('id' => $id);
		$article = Article::where($where)->first();
		return Response::json($article);
	}

	/**
	* Update the specified resource in storage.
	*
	* @param \Illuminate\Http\Request $request
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function update(Request $request)
	{

	}

	/**
	* Remove the specified resource from storage.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function destroy($id)
	{
		$art = Article::where('id',$id)->delete();
		return Response::json($art);
	}
}
