<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->unsignedBigInteger('contact_id')->nullable()->after('id');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('set null');

            $table->unsignedBigInteger('chat_id')->nullable()->after('id');
            $table->foreign('chat_id')->references('id')->on('chats')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['contact_id']);
            $table->dropForeign(['chat_id']);

            $table->dropColumn('contact_id');
            $table->dropColumn('chat_id');
        });
    }
};
