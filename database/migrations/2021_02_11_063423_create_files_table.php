<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
       /**
        * Run the migrations.
        *
        * @return void
        */
       public function up()
       {
           Schema::create('files', function (Blueprint $table) {
               $table->id();
               $table->string('ename');
               $table->string('dis');
               $table->datetime('stime');
               $table->datetime('etime');
               $table->string('cat');
               $table->string('filenames');
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
           Schema::dropIfExists('_create_events');
       }
   }
