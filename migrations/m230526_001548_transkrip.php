<?php

use yii\db\Migration;

/**
 * Class m230526_001548_transkrip
 */
class m230526_001548_transkrip extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("transkrip_nilai", [
            "id" => $this->primaryKey(11),
            "id_mahasiswa" => $this->string(11),
            "semester_lulus" => $this->integer(11),
            "tahun_lulus" => $this->string(11),
            "nomor_transkrip" => $this->string(11)
        ]); 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("transkrip_nilai");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230526_001548_transkrip cannot be reverted.\n";

        return false;
    }
    */
}
