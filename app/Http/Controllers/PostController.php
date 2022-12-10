<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PHPUnit\TextUI\XmlConfiguration\Groups;

class PostController extends Controller
{
    
    // $posts=[
    //     ['id'=>2,'title'=>'Primer post','content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Ab tenetur quia veritatis repellat! Debitis eveniet quis quia rerum facilis voluptate eaque architecto aliquid?'],[]... ese es el array
  

    public function index(Request $request){
        $code = $request->code;
        $message = $request->message;
        //$posts = DB::table ('posts')->get();
        $posts = Post:: orderByDesc('id')->get();
        return view('posts.index',compact('posts','code','message'));
    }

    public function filterByUser(User $user,Request $request){
        $code = $request->code;
        $message = $request->message;
        $posts = Post::whereBelongsTo($user)->get();
        return view('posts.index',compact('posts','code','message'));
    }
    public function show(Post $post){
        //$post = DB::table('posts')->find( $id);
         //dd($post);
        return view ('posts.show', compact ('post'));
    }

    public function create(){
       //aqui hacemos lo del nombre de quien a creado el grupo
       $groups = Group::orderBy('title')->get();
        return view('posts.create',compact('groups'));
    }

    public function store(PostRequest $request){
      $urlweb = '';

       if($request->hasFile('img')){
          $path = $request->file('img')->store('public/multimedia');
          $urlweb = Storage::url($path);
       }

        $post = Post::create ($request->validated());
        $post->img = $urlweb;
       // dd($post);
        $post->saveOrFail();
        return redirect()->route('posts.index',['code'=>'200','message'=>'Se ha creado correctamente.']);
    }

    public function edit(Post $post){
       
        // $post = DB::table('posts')->find( $post);
        return view ('posts.edit', compact ('post'));
    }

    public function update(PostRequest $request,Post $post){
       // comprobamos si existe el fichero o no
       $urlweb = '';

       if($request->hasFile('img')){
          $path = $request->file('img')->store('public/multimedia');
          $urlweb = Storage::url($path);
       }
        
        $post->fill ($request->validated());
        $post->img = $urlweb;
        $post->saveOrFail();
     
         return redirect()->route('posts.index',['code'=>'200','message'=>'Actualizado correctamente.']);
     }

     // borrar el post
     public function destroy(Post $post){
        
        $post->deleteOrFail();
          return redirect()->route('posts.index',['code'=>'200','message'=>'Se ha borrado correctamente.']);
      }


}
