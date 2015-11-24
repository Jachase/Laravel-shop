<?php
use Carbon\Carbon;
use App\Models\Frontend\User;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/8/4
 * Time: 下午2:30
 */
class UserTableSeeder extends BaseSeeeder
{
    public function run()
    {
        $tableName = User::getInstance()->getTable();
        $this->truncate($tableName);
        $userData = $this->userData();
        $time = Carbon::now()->getTimestamp();
        array_walk($userData, function(&$v)use($time){
            $this->parserTimeColumn($v, $time);
        });
        User::insert($userData);

    }

    private function userData()
    {
        return [
            [
                'id'=>1,
                'name'=>'jachase',
                'email'=>'jachase@polybyte.cc',
                'password'=>Hash::make('123456')
            ],
            [
                'id'=>2,
                'name'=>'lihao',
                'email'=>'lihao@qq.com',
                'password'=>Hash::make('123456')
            ],
        ];
    }
}