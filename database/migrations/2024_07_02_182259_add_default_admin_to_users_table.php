<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Додати користувача за замовчуванням
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('AdminRoot1'), 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        // Ви можете видалити користувача тут, якщо потрібно
        DB::table('users')->where('username', 'admin')->delete();
    }
};
