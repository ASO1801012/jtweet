<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder{
    public function run(){
        $teamname=['北海道コンサドーレ札幌','ベガルタ仙台','鹿島アントラーズ',
        '浦和レッズ','柏レイソル','FC東京','川崎フロンターレ','横浜F・マリノス',
        '横浜FC','湘南ベルマーレ','清水エスパルス','名古屋グランパス','ガンバ大阪',
        'セレッソ大阪','ヴィッセル神戸','サンフレッチェ広島','徳島ヴォルティス','アビスパ福岡',
        'サガン鳥栖','大分トリニータ'];
        foreach($teamname as $teamname){
            DB::table('teams')->insert(['teamname'=>$teamname]);
        }
    }
}