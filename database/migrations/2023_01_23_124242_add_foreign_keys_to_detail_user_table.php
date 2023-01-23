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
        Schema::table('detail_user', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_detail_user_to_users')
            ->references('id')->on('users')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('type_user_id', 'fk_detail_user_to_type_users')
            ->references('id')->on('users')->onDelete('cascade')
            ->onUpdate('cascade');
            // $table->foreignId('type_user_id')->constrained('type_user');
            //cascade =  boleh di hapus pada tabel asal maupun transaksi
            //rescrict = hanya boleh dihapus dari table asal
            //NB: Keduanya jika dihapus dari table asal maka pada baris
            //yang berelasi dengan table transaksi juga terhapus
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_user', function (Blueprint $table) {
            $table->dropForeign('fk_detail_user_to_users');
            $table->dropForeign('fk_detail_user_to_type_users');
        });
    }
};
