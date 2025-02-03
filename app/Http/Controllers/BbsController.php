<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Support\Facades\Redirect;

class BbsController extends Controller
{
    /*
    public function index (){
        $bbs = Bb::latest()->get();
        $s = "Объявлния:\r\n\r\n";
        foreach($bbs as $bb){
            $s.=$bb->title."\r\n\r\n";
            $s.=$bb->content."\r\n";
            $s.=$bb->price." руб\r\n";
            $s.= "\r\n";
        }
        return response($s)
        ->header('Content-Type', 'text/plain');
    }
        */

        /*
        public function detail(Bb $bb){
            $s = "Объявлния:\r\n\r\n";
            $s.=$bb->title."\r\n\r\n";
            $s.=$bb->content."\r\n";
            $s.=$bb->price." руб\r\n";
            return response($s)->header('Content-type', 'text/plain');

        }
            */

            /*
            public function index(){
                $context = ['bbs'=>Bb::latest()->get()];
                return view('index', $context);
            }
                */
                public function index(){
                    $context=['bbs'=>Bb::latest()->get()];
                    return view('index', $context);

                }

        

                public function detail(Bb $bb){
                    return view('detail', ['bb'=>$bb]);
                }


                public function userz(){
                    $context=['users'=>Bb::latest()->get()];
                    return view('index', $context);

                }

                public function showSubscriptions()
                {
                    // Получаем ID текущего пользователя
                    $userId = Auth::id();
            
                    // Получаем все подписки пользователя
                    $subscriptions = DB::table('bbs')->where('user_id', $userId)->get(); // Получаем подписки из таблицы bbs
            
                    // Передаем подписки в представление
                    return view('acpo', [
                        'subscriptions' => $subscriptions,
                    ]);
                }
             
}