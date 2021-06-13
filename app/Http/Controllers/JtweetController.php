<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Vender\CallTwitterApi;
use Abraham\TwitterOAuth\TwitterOAuth;

class JtweetController extends Controller
{
    public function index(){
        $team = DB::table('teams')->get();
        return view('home',compact('team'));
    }


    public function show(Request $req){
        if(!empty($req)){
            $get_id=$req->id;
            $team = DB::table('teams')->find($get_id);
        }

        $consumer_key =config('services.Twitter.t_key');
        $consumer_secret =config('services.Twitter.t_secret');
        $access_token =config('services.Twitter.t_token');
        $access_token_secret =config('services.Twitter.t_token_secret');

        // APIに接続
        $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);


        if(!empty($team)){
            $jtweet = $connection->get('search/tweets',[
                'q'=> $team->teamname ,
                'tweet_mode' => 'extended',
                'exclude'=>'retweets',
                'count'=>'50',
            ]);
            /* foreach($jtweet->statuses as $t){
                $date=
                date( 'Y-m-d H:i:s', strtotime($t['created_at']) );
            } */

            return view('show',compact('team','jtweet'));
        }else{
            $jtweet = $connection->get('search/tweets',[
                'q'=> "Jリーグ" ,
                'tweet_mode' => 'extended',
                'exclude'=>'retweets',
                'count'=>'50',
             ]);
             /* foreach($jtweet->statuses as $t){
                $date=
                date( 'Y-m-d H:i:s', strtotime($t['created_at']) );
             } */
             $team = DB::table('teams')->get();
             return view('top',compact('team','jtweet'));
        }
    }
}
