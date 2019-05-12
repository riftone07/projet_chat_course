<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('matricule', 50)->unique();

            $table->string('prenom', 50)->nullable();

            $table->string('nom', 25)->nullable();

            $table->string('adresse', 100)->nullable();

            $table->string('telephone', 25)->nullable();

            $table->date('datedenaissance')->nullable();

            $table->string('email', 100)->unique();

            $table->string('provider_id')->nullable();

            $table->string('provider')->nullable();

            $table->string('password')->nullable();

            $table->boolean('is_actif')->default(true);

            $table->integer('compteur')->default(0);

            $table->timestamp('email_verified_at')->nullable();

            $table->string('about')->nullable();
            
            $table->rememberToken();
            
            $table->softDeletes();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
