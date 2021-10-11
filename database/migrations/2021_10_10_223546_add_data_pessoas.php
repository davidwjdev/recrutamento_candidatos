<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddDataPessoas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('pessoas')->insert(
            array(
                ['nome'=>'FULANOA1','profissao'=>'TESTEA1','localizacao'=>'A','nivel'=>'1',],
                ['nome'=>'FULANOB1','profissao'=>'TESTEB1','localizacao'=>'B','nivel'=>'1',],
                ['nome'=>'FULANOC1','profissao'=>'TESTEC1','localizacao'=>'C','nivel'=>'1',],
                ['nome'=>'FULANOD1','profissao'=>'TESTED1','localizacao'=>'D','nivel'=>'1',],
                ['nome'=>'FULANOE1','profissao'=>'TESTEE1','localizacao'=>'E','nivel'=>'1',],
                ['nome'=>'FULANOF1','profissao'=>'TESTEF1','localizacao'=>'F','nivel'=>'1',],
                ['nome'=>'FULANOA2','profissao'=>'TESTEA2','localizacao'=>'A','nivel'=>'2',],
                ['nome'=>'FULANOB2','profissao'=>'TESTEB2','localizacao'=>'B','nivel'=>'2',],
                ['nome'=>'FULANOC2','profissao'=>'TESTEC2','localizacao'=>'C','nivel'=>'2',],
                ['nome'=>'FULANOD2','profissao'=>'TESTED2','localizacao'=>'D','nivel'=>'2',],
                ['nome'=>'FULANOE2','profissao'=>'TESTEE2','localizacao'=>'E','nivel'=>'2',],
                ['nome'=>'FULANOF2','profissao'=>'TESTEF2','localizacao'=>'F','nivel'=>'2',],
                ['nome'=>'FULANOA3','profissao'=>'TESTEA3','localizacao'=>'A','nivel'=>'3',],
                ['nome'=>'FULANOB3','profissao'=>'TESTEB3','localizacao'=>'B','nivel'=>'3',],
                ['nome'=>'FULANOC3','profissao'=>'TESTEC3','localizacao'=>'C','nivel'=>'3',],
                ['nome'=>'FULANOD3','profissao'=>'TESTED3','localizacao'=>'D','nivel'=>'3',],
                ['nome'=>'FULANOE3','profissao'=>'TESTEE3','localizacao'=>'E','nivel'=>'3',],
                ['nome'=>'FULANOF3','profissao'=>'TESTEF3','localizacao'=>'F','nivel'=>'3',],
                ['nome'=>'FULANOA4','profissao'=>'TESTEA4','localizacao'=>'A','nivel'=>'4',],
                ['nome'=>'FULANOB4','profissao'=>'TESTEB4','localizacao'=>'B','nivel'=>'4',],
                ['nome'=>'FULANOC4','profissao'=>'TESTEC4','localizacao'=>'C','nivel'=>'4',],
                ['nome'=>'FULANOD4','profissao'=>'TESTED4','localizacao'=>'D','nivel'=>'4',],
                ['nome'=>'FULANOE4','profissao'=>'TESTEE4','localizacao'=>'E','nivel'=>'4',],
                ['nome'=>'FULANOF4','profissao'=>'TESTEF4','localizacao'=>'F','nivel'=>'4',],
                ['nome'=>'FULANOA5','profissao'=>'TESTEA5','localizacao'=>'A','nivel'=>'5',],
                ['nome'=>'FULANOB5','profissao'=>'TESTEB5','localizacao'=>'B','nivel'=>'5',],
                ['nome'=>'FULANOC5','profissao'=>'TESTEC5','localizacao'=>'C','nivel'=>'5',],
                ['nome'=>'FULANOD5','profissao'=>'TESTED5','localizacao'=>'D','nivel'=>'5',],
                ['nome'=>'FULANOE5','profissao'=>'TESTEE5','localizacao'=>'E','nivel'=>'5',],
                ['nome'=>'FULANOF5','profissao'=>'TESTEF5','localizacao'=>'F','nivel'=>'5',],                                             
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
