<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disciplina".
 *
 * @property int $ID
 * @property string $NOME
 * @property int $CH
 * @property int $PERIODO
 * @property int|null $NUCLEO_ID
 * @property int|null $MATRIZ_ID
 *
 * @property Detalheoferta[] $detalheofertas
 * @property Matriz $mATRIZ
 * @property Nucleo $nUCLEO
 */
class Disciplina extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disciplina';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME'],'required','message'=>'Por favor preencha um nome'],
            [['CH'],'required','message'=>'Por favor preencha a carga horária'],
            [['PERIODO'],'required','message'=>'Por favor preencha o período'],             
            [['CH', 'PERIODO', 'NUCLEO_ID', 'MATRIZ_ID'], 'integer'],
            [['NOME'], 'string', 'max' => 255],
            [['MATRIZ_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Matriz::className(), 'targetAttribute' => ['MATRIZ_ID' => 'ID']],
            [['NUCLEO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Nucleo::className(), 'targetAttribute' => ['NUCLEO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NOME' => 'Nome',
            'CH' => 'Carga Horária',
            'PERIODO' => 'Período',
            'NUCLEO_ID' => 'Núcleo',
            'MATRIZ_ID' => 'Matriz',
        ];
    }

    /**
     * Gets query for [[Detalheofertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetalheofertas()
    {
        return $this->hasMany(Detalheoferta::className(), ['DISCIPLINA_ID' => 'ID']);
    }

    /**
     * Gets query for [[MATRIZ]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatriz()
    {
        return $this->hasOne(Matriz::className(), ['ID' => 'MATRIZ_ID']);
    }

    /**
     * Gets query for [[NUCLEO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNucleo()
    {
        return $this->hasOne(Nucleo::className(), ['ID' => 'NUCLEO_ID']);
    }
}
