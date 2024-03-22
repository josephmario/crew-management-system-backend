<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_id_crew_to_documents_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdCrewToDocumentsTable extends Migration
{
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedBigInteger('id_crew')->after('id')->nullable();
            $table->foreign('id_crew')->references('id')->on('crew_members')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropForeign(['id_crew']);
            $table->dropColumn('id_crew');
        });
    }
}
