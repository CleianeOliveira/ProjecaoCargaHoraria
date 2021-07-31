<?php

use yii\db\Migration;

/**
 * Class m210731_113035_Matriz
 */
class m210731_113035_Matriz extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #MATRIZ (ID, SIGLA, CH_TOTAL, CURSO_FK)
        $this->createTable('MATRIZ', [
            'ID'=>$this->primaryKey(),
            'SIGLA'=>$this->string(10),
            'CH_TOTAL'=>$this->integer(),
            'CURSO_ID'=>$this->integer()
        ]);
        $this->addForeignKey('curso_fk', 'MATRIZ', 'CURSO_ID', 'CURSO', 'ID', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('MATRIZ');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_113035_Matriz cannot be reverted.\n";

        return false;
    }
    */
}
