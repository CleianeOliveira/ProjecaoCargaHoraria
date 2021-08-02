<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matriz".
 *
 * @property int $ID
 * @property string|null $SIGLA
 * @property int|null $CH_TOTAL
 * @property int|null $CURSO_ID
 *
 * @property Disciplina[] $disciplinas
 * @property Curso $cURSO
 * @property Oferta[] $ofertas
 */
class Matriz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matriz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CH_TOTAL', 'CURSO_ID'], 'integer'],
            [['SIGLA'], 'string', 'max' => 10],
            [['CURSO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::className(), 'targetAttribute' => ['CURSO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'SIGLA' => 'Sigla',
            'CH_TOTAL' => 'Ch Total',
            'CURSO_ID' => 'Curso ID',
        ];
    }

    /**
     * Gets query for [[Disciplinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplinas()
    {
        return $this->hasMany(Disciplina::className(), ['MATRIZ_ID' => 'ID']);
    }

    /**
     * Gets query for [[CURSO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCURSO()
    {
        return $this->hasOne(Curso::className(), ['ID' => 'CURSO_ID']);
    }

    /**
     * Gets query for [[Ofertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOfertas()
    {
        return $this->hasMany(Oferta::className(), ['MATRIZ_ID' => 'ID']);
    }
}
