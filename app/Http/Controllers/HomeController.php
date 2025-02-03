<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bb;

class HomeController extends Controller

{

  
    public function index()
    {
        return view('checkpoint', ['bbs'=>Auth::user()->bbs()->latest()->get()]);
    }

    
    public function create(){
        return view('bb-create');
    }

    public function dow(){
        return view('dow');
    }
    
    public function ab(){
        return view('ab');
    }
    
    public function upgrade(){
        return view('upgrade-plan');
    }
    
    public function checkpoint(){
        return view('checkpoint');
    }
      
    public function acpo(){
        return view('acpo');
    }
    
    public function adminpanel(){
        return view('adminpanel');
    }

    public function subscription(){
        return view('subscription');
    }

    
    public function reload(){
        return view('reload-plan');
    }
    
    public function uz(){
        return view('user-edit');
    }

    public function edit(Bb $bb){

        return view('bb-edit', ['bb' => $bb]);
    }

   
   public function delete(Bb $bb){
    return view('bb-delete', ['bb' => $bb]);
   }

   public function destroy(Bb $bb){
    $bb->delete();
    return redirect()->route('checkpoint');
   }



    private const BB_VALIDATOR = [
        'title' => 'required|max:30',
        'content' => 'required',
        'price' => 'required|numeric',
        'status' => 'required',
    ];

    public function store(Request $request){
        $validated = $request->validate(self::BB_VALIDATOR);
        Auth::user()->bbs()->create(['title' => $validated['title'], 'content'  =>$validated['content'], 'price'=>$validated['price']]);
        return redirect()->route('home');
    }

    public function update(Request $request, Bb $bb){
    $validated = $request->validate(self::BB_VALIDATOR);
    $bb->fill(['title' => $validated['title'], 'content'  =>$validated['content'], 'price'=>$validated['price'], 'status'=>$validated['status']]);
    $bb->save();
    return redirect()->route('home');
   }


}
