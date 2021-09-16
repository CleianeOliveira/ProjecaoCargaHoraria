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
        $this->createTable('matriz', [
            'id'=>$this->primaryKey(),
            'sigla'=>$this->string(10),
            'ch_total'=>$this->integer(),
            'curso_id'=>$this->integer()
        ]);
        $this->addForeignKey('curso_fk', 'matriz', 'curso_id', 'curso', 'id', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('matriz');
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
