<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class AddDataVagas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //insert
        DB::table('vagas')->insert(
            array(
                ['empresa'=>'TESTEA1','titulo'=>'TESTEA1','descricao'=>'TESTEA1','localizacao'=>'A','nivel'=>'1',],
                ['empresa'=>'TESTEB1','titulo'=>'TESTEB1','descricao'=>'TESTEB1','localizacao'=>'B','nivel'=>'1',],
                ['empresa'=>'TESTEC1','titulo'=>'TESTEC1','descricao'=>'TESTEC1','localizacao'=>'C','nivel'=>'1',],
                ['empresa'=>'TESTED1','titulo'=>'TESTED1','descricao'=>'TESTED1','localizacao'=>'D','nivel'=>'1',],
                ['empresa'=>'TESTEE1','titulo'=>'TESTEE1','descricao'=>'TESTEE1','localizacao'=>'E','nivel'=>'1',],
                ['empresa'=>'TESTEF1','titulo'=>'TESTEF1','descricao'=>'TESTEF1','localizacao'=>'F','nivel'=>'1',],
                ['empresa'=>'TESTEA2','titulo'=>'TESTEA2','descricao'=>'TESTEA2','localizacao'=>'A','nivel'=>'2',],
                ['empresa'=>'TESTEB2','titulo'=>'TESTEB2','descricao'=>'TESTEB2','localizacao'=>'B','nivel'=>'2',],
                ['empresa'=>'TESTEC2','titulo'=>'TESTEC2','descricao'=>'TESTEC2','localizacao'=>'C','nivel'=>'2',],
                ['empresa'=>'TESTED2','titulo'=>'TESTED2','descricao'=>'TESTED2','localizacao'=>'D','nivel'=>'2',],
                ['empresa'=>'TESTEE2','titulo'=>'TESTEE2','descricao'=>'TESTEE2','localizacao'=>'E','nivel'=>'2',],
                ['empresa'=>'TESTEF2','titulo'=>'TESTEF2','descricao'=>'TESTEF2','localizacao'=>'F','nivel'=>'2',],
                ['empresa'=>'TESTEA3','titulo'=>'TESTEA3','descricao'=>'TESTEA3','localizacao'=>'A','nivel'=>'3',],
                ['empresa'=>'TESTEB3','titulo'=>'TESTEB3','descricao'=>'TESTEB3','localizacao'=>'B','nivel'=>'3',],
                ['empresa'=>'TESTEC3','titulo'=>'TESTEC3','descricao'=>'TESTEC3','localizacao'=>'C','nivel'=>'3',],
                ['empresa'=>'TESTED3','titulo'=>'TESTED3','descricao'=>'TESTED3','localizacao'=>'D','nivel'=>'3',],
                ['empresa'=>'TESTEE3','titulo'=>'TESTEE3','descricao'=>'TESTEE3','localizacao'=>'E','nivel'=>'3',],
                ['empresa'=>'TESTEF3','titulo'=>'TESTEF3','descricao'=>'TESTEF3','localizacao'=>'F','nivel'=>'3',],
                ['empresa'=>'TESTEA4','titulo'=>'TESTEA4','descricao'=>'TESTEA4','localizacao'=>'A','nivel'=>'4',],
                ['empresa'=>'TESTEB4','titulo'=>'TESTEB4','descricao'=>'TESTEB4','localizacao'=>'B','nivel'=>'4',],
                ['empresa'=>'TESTEC4','titulo'=>'TESTEC4','descricao'=>'TESTEC4','localizacao'=>'C','nivel'=>'4',],
                ['empresa'=>'TESTED4','titulo'=>'TESTED4','descricao'=>'TESTED4','localizacao'=>'D','nivel'=>'4',],
                ['empresa'=>'TESTEE4','titulo'=>'TESTEE4','descricao'=>'TESTEE4','localizacao'=>'E','nivel'=>'4',],
                ['empresa'=>'TESTEF4','titulo'=>'TESTEF4','descricao'=>'TESTEF4','localizacao'=>'F','nivel'=>'4',],
                ['empresa'=>'TESTEA5','titulo'=>'TESTEA5','descricao'=>'TESTEA5','localizacao'=>'A','nivel'=>'5',],
                ['empresa'=>'TESTEB5','titulo'=>'TESTEB5','descricao'=>'TESTEB5','localizacao'=>'B','nivel'=>'5',],
                ['empresa'=>'TESTEC5','titulo'=>'TESTEC5','descricao'=>'TESTEC5','localizacao'=>'C','nivel'=>'5',],
                ['empresa'=>'TESTED5','titulo'=>'TESTED5','descricao'=>'TESTED5','localizacao'=>'D','nivel'=>'5',],
                ['empresa'=>'TESTEE5','titulo'=>'TESTEE5','descricao'=>'TESTEE5','localizacao'=>'E','nivel'=>'5',],
                ['empresa'=>'TESTEF5','titulo'=>'TESTEF5','descricao'=>'TESTEF5','localizacao'=>'F','nivel'=>'5',]                               
            )
        );
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
