<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Tên task');
            $table->text('description')->nullable()->comment('Nội dung task');
            $table->date('start_date')->comment('Ngày bắt đầu');
            $table->date('end_date')->comment('Ngày kết thúc');
            $table->tinyInteger('status')->default(0)->comment('Trạng thái task [0: PENDING, 1: TODO, 2: DOING, 3: DONE, 4: CLOSE]');
            $table->integer('assign_user_id')->nullable()->comment('Id người làm task này');
            $table->integer('create_by')->comment('Id người tạo task');
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
        Schema::dropIfExists('tasks');
    }
}
