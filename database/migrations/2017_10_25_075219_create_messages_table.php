<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
  public function up()
  {
      Schema::create('messages', function(Blueprint $table)
      {
          $table->increments('id');
          $table->string('title');        // 追加
          $table->text('body');           // 追加
          $table->timestamps();
      });
  }

  public function down()
  {
      Schema::drop('messages');
  }
}
