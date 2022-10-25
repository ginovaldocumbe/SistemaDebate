<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class EventController extends Controller
{
    public function index()
    {

        $events = Post::all();

        return view('principal', ['events' => $events]);
    }

    public function store(Request $request)
    {
        $event = new Post;
        $event->titulo = $request->titulo;
        $event->Descricao = $request->descricao;
        $event->Data = $request->data;

        //Upload de Imagem
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $requestImage = $request->foto;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('imagens/posts'), $imageName);

            $event->foto = $imageName;
        }

        $event->save();
        return redirect('/criar');
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect ('/fechar') ->with('msg','Post Deletado!');
    }
}
