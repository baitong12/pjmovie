<?php

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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // ชื่อภาพยนตร์
            $table->string('director'); // ผู้กำกับ
            $table->year('release_year'); // ปีที่ออกฉาย
            $table->string('genre');//->nullable(); // เพิ่ม nullable() เพื่อให้ genre สามารถเป็น null ได้
 // ประเภทของภาพยนตร์
            $table->text('synopsis'); // เรื่องย่อ
            $table->timestamps(); // เวลาในการสร้างและอัพเดตข้อมูล
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
