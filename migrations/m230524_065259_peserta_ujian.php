<?php

use yii\db\Migration;

/**
 * Class m230524_065259_peserta_ujian
 */
class m230524_065259_peserta_ujian extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("peserta_ujian", [
            "id" => $this->primaryKey(11),
            "nim" => $this->string(11),
            "no_kursi" => $this->integer(11),
            "no_peserta" => $this->string(11)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("peserta_ujian");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230524_065259_peserta_ujian cannot be reverted.\n";

        return false;
    }
    */
}
