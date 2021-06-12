<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Vender\CallTwitterApi;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    public function index()
    {
        $consumer_key =config('services.Twitter.t_key');
        $consumer_secret =config('services.Twitter.t_secret');
        $access_token =config('services.Twitter.t_token');
        $access_token_secret =config('services.Twitter.t_token_secret');

        // APIに接続
        $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);


        $request = $connection->get('search/tweets',[
            'q' => 'テスト'
         ]);

         return view('twitter',compact('request'));
    }
}