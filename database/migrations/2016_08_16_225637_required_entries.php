<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Department;
use App\User;
use App\Team;

class RequiredEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Department::create([
            'name' => 'Autre',
            'short_name' => '-'
            ]);

        User::create([
            'first_name' => 'webmaster',
            'last_name' => 'webmaster',
            'password'  => bcrypt('webmasterbda'),
            'level' => Config::get('levels.webmaster'),
            'email' => 'webm@ster',
            'department_id' => 1,
            'validated' => 1,
            ]);

        Team::create([
            'name' => 'null',
            'article' => 'null',
            'validated' => 0,
            'user_id' => 1
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
