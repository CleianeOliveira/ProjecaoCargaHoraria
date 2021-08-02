<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalheoferta".
 *
 * @property int $ID
 * @property string $SEMESTRE_ANO
 * @property int|null $DISCIPLINA_ID
 * @property int|null $OFERTA_ID
 *
 * @property Disciplina $dISCIPLINA
 * @property Oferta $oFERTA
 */
class Detalheoferta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detalheoferta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SEMESTRE_ANO'], 'required'],
            [['DISCIPLINA_ID', 'OFERTA_ID'], 'integer'],
            [['SEMESTRE_ANO'], 'string', 'max' => 6],
            [['DISCIPLINA_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplina::className(), 'targetAttribute' => ['DISCIPLINA_ID' => 'ID']],
            [['OFERTA_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Oferta::className(), 'targetAttribute' => ['OFERTA_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'SEMESTRE_ANO' => 'Semestre Ano',
            'DISCIPLINA_ID' => 'Disciplina ID',
            'OFERTA_ID' => 'Oferta ID',
        ];
    }

    /**
     * Gets query for [[DISCIPLINA]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDISCIPLINA()
    {
        return $this->hasOne(Disciplina::className(), ['ID' => 'DISCIPLINA_ID']);
    }

    /**
     * Gets query for [[OFERTA]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOFERTA()
    {
        return $this->hasOne(Oferta::className(), ['ID' => 'OFERTA_ID']);
    }
}
