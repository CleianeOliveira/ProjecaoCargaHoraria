<?php

use yii\db\Migration;

/**
 * Class m210914_221447_docente
 */
class m210914_221447_docente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('docente',[
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'nucleo_id' => $this->integer()
        ]);

        $this->addForeignKey('nucleo_fk', 'docente', 'nucleo_id', 'nucleo', 'id', 'RESTRICT');
        

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('nucleo_fk', 'docente');
        $this->dropTable('docente');
       
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210914_221447_docente cannot be reverted.\n";

        return false;
    }
    */
}
