<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Articel;
use Illuminate\Http\Request;

class ArticelController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function all()
    {
        $articels=Articel::all();
        return view('allArticels',compact('articels'));
    }


    public function show($id)
    {
        $articel=Articel::find($id);
        return view('singelArticel',compact('articel'));
    }


    public function createForm()
    {
        return view('createNewArticel');
    }

    public function create(Request $request)
    {
       
       $articel=Articel::create([
        'user_id'=>1,
        'title'=>$request->title,
        'desceription'=>$request->desceription

       ]);
       return redirect()->route('index');
    }




}
