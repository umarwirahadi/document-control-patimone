<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerLetter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER auto_insert_letter AFTER INSERT ON ptmbn_incoming_letters FOR EACH ROW BEGIN INSERT INTO ptmbn_letter_files(number,subject,date,category,status)
        VALUES (NEW.incoming_ref_no,NEW.subject,NEW.date_of_letter,NEW.incoming_letter_type,1);
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER auto_insert_letter');
    }
}
