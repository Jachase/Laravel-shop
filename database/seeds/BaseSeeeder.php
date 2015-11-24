<?php
use Illuminate\Support\Facades\DB;
/**
 * Created by PhpStorm.
 * User: jachase
 * Date: 15/8/4
 * Time: 下午2:25
 */
class BaseSeeeder extends \Illuminate\Database\Seeder
{
    protected function truncate($tableName)
    {
        if(empty($tableName))
        {
            $this->command->error(get_class($this)."=>truncate(\$tableName);\$tableName not specified");exit;
        }
        $this->command->info("Truncate:{$tableName}");
        DB::table($tableName)->truncate();
    }

    protected function parserTimeColumn(&$value, $time)
    {
        $value['created_at'] = $time;
        $value['updated_at'] = $time;
    }
}