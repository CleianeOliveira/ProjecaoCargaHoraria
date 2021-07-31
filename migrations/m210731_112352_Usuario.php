<?php

use yii\db\Migration;

/**
 * Class m210731_112352_Usuario
 */
class m210731_112352_Usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
#USUARIO (ID, LOGIN, SENHA, NOME, NUCLEO_FK)
        $this->createTable('USUARIO', [
            'ID' => $this->primaryKey(),
            'LOGIN' => $this->string(),
            'SENHA'=>$this->string(),
            'NOME'=>$this->string()->notNull(),
            'NUCLEO_ID'=>$this->integer()
        ]);
        $this->addForeignKey('nucleo_fk', 'USUARIO', 'NUCLEO_ID', 'NUCLEO', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropForeignKey('nucleo_fk', 'USUARIO');
       $this->dropTable('USUARIO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_112352_Usuario cannot be reverted.\n";

        return false;
    }
    */
}
