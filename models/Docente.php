<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "docente".
 *
 * @property int $id
 * @property string $nome
 * @property int|null $nucleo_id
 * 
 * @property Nucleo $nucleo
 */

class Docente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'docente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nucleo_id'], 'integer'],
            [['nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'nucleo_id' => 'Núcleo',
        ];
    }

    public function getNucleo()
    {
        return $this->hasOne(Nucleo::className(), ['ID' => 'nucleo_id']);
    }
}
