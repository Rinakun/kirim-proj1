<?php  

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

class AddMissingColumnsToUsersTable extends Migration  
{  
    public function up()  
    {  
        Schema::table('users', function (Blueprint $table) {  
            if (!Schema::hasColumn('users', 'name')) {  
                $table->string('name')->after('id');  
            }  
            if (!Schema::hasColumn('users', 'email')) {  
                $table->string('email')->unique()->after('name');  
            }  
            if (!Schema::hasColumn('users', 'email_verified_at')) {  
                $table->timestamp('email_verified_at')->nullable()->after('email');  
            }  
            if (!Schema::hasColumn('users', 'password')) {  
                $table->string('password')->after('email_verified_at');  
            }  
            if (!Schema::hasColumn('users', 'remember_token')) {  
                $table->rememberToken()->after('password');  
            }  
            if (!Schema::hasColumn('users', 'updated_at')) {  
                $table->timestamp('updated_at')->nullable();  
            }  
        });  
    }  

    public function down()  
    {  
        Schema::table('users', function (Blueprint $table) {  
            $table->dropColumn(['name', 'email', 'email_verified_at', 'password', 'remember_token', 'updated_at']);  
        });  
    }  
}