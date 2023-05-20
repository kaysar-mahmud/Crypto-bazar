<?php
/*
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

 /*    
    public function up()
    {  // $user = auth()->user();
        //$data = $request->all();
       // $data['user_id']=$user->id;
        
        
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            //means that if the uesrs are deleted for some reason
            //$table->user_ID = auth()->user()->id;//->constrained()->onDelete('cascade');
            // $table->unsignedBigInteger('user_id')->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            //$table
            //$table->foreignId('user_id')->onUpdate('cascade')->onDelete('cascade');
            
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('user_id')->references('id')->on('users');
            //'user_id' => auth()->id
            //$table->foreignId(auth()->user());
            //$table->date('user_id')->nullable();
            //his posts will also get deleted
            $table->string('title');
            $table->string('logo')->nullable();
            $table->string('tags');
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->string('website');
            $table->longText('description');
            $table->timestamps();
        });

    
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *//*
    public function down()
    {
        Schema::dropIfExists('listings');
    }
};
*/


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('logo')->nullable();
            $table->string('tags');
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->string('website');
            $table->longText('description');
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
        Schema::dropIfExists('listings');
    }
};
