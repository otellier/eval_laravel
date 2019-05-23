<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::orderBy('id','desc')->get();
        return view('index', ['topics'=> $topics]);
    }

    public function create()
    {
        return view('create');
    }

    public function validatorTopic(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:75'],
            'message' => ['required', 'text'],
        ]);
    }

    protected function validatorCommentaire(array $data)
    {
        return Validator::make($data, [
            'message' => ['required', 'text'],
        ]);
    }

    public function store(Request $request)
    {
        if (validatorTopic($request)->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $topic = new Topic;
        $topic->titre = $request->titre;
        $topic->message = $request->message;
        $topic->save();
        return redirect()->route('index')->withUpdateMessage("Le Topic : $topic->titre a bien été créé");
    }

    public function edit($id)
    {
        $topic = Topic::find($id);
        return view('edit', ['topic' => $topic]);
    }
    
    public function update(Request $request, $id)
    {
        $validator = validatorTopic($request);
        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $topic = Topic::find($id);
        $topic->titre = $request->titre;
        $topic->message = $request->message;
        $topic->save();
        return redirect()->route('index')->withUpdateMessage("Le Topic : $topic->titre a bien été mis à jour");
    }

    public function destroy($id)
    {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect()->route('topics.index')->withDeleteMessage("Le Topic : $topic->titre a été supprimé");
    }

    public function comment(Request	$request,	$id)
    {
        $validator = validatorCommentaire($request);
        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $commentaire = new Commentaire;
        $commentaire->message = $request->message;
        $commentaire->topic = $id;
        $commentaire->save();
        return redirect()->route('index')->withUpdateMessage("Le message a bien été créé");
    }

    public function	search(Request	$request)
    {
        $titre = $request->titre;
        $topics = Topic::where('titre', 'Like', '%'.$titre.'%')->get(); 
        return view('index', ['topics', $topics]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::find($id);
        return view('edit', ['topic'=> $topic]);
    }
}
