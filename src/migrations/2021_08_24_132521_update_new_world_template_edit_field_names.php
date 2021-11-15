<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNewWorldTemplateEditFieldNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('content_fields')) {

            $fields = DB::table('content_fields')
                ->whereIn('field', ['new-world_content', 'content'])
                ->where('rel_type', 'content')
                ->get();

            if ($fields) {
                foreach ($fields as $field) {
                    // move to content table
                    DB::table('content')
                        ->where('id', $field->rel_id)
                        ->limit(1)
                        ->update(['content' => $field->value]);

                    //clean old fields
                    DB::table('content_fields')
                        ->where('field', 'content')
                        ->where('rel_id', $field->rel_id)
                        ->where('rel_type', $field->rel_type)
                        ->delete();

                    DB::table('content_fields')
                        ->where('id', $field->id)
                        ->delete();

                }
            }

        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
