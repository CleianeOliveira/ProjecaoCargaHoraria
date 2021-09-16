<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $senha
 * @property string $nome
 * @property int|null $nucleo_id
 *
 * @property Coordena[] $coordenas
 * @property Curso[] $cursos
 * @property Oferta[] $ofertas
 * @property Nucleo $nucleo
 */
class Usuario extends \yii\db\ActiveRecord implements \yii\web\identityInterface

{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nucleo_id'], 'integer'],
            [['login', 'senha', 'nome'], 'string', 'max' => 255],
            [['nucleo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nucleo::className(), 'targetAttribute' => ['nucleo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'login' => 'Login',
            'senha' => 'Senha',
            'nome' => 'Nome',
            
        ];
    }

    
    /**
     * {@inheritdoc}
     */
    public static function findidentity($id)
    {
        return static::findOne($id);
    }
 
    /**
     * {@inheritdoc}
     */
    public static function findidentityByAccessToken($token, $type = null)
    {
        throw new  yii\base\UnknownPropertyException();
    }
 
        /**
     * {@inheritdoc}
     */
    public function getid()
    {
        return $this->id;
    }
 
    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
       // throw new  yii\base\UnknownPropertyException();
    }
 
    public function validateAuthKey($authKey)
    {
       // throw new  yii\base\UnknownPropertyException();
    }
 
    public static function findByUsername($username){
        return self::findOne(['login'=>$username]);
    }
 
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->senha);
    }

    public function beforeSave($insert)
    {
       if (parent::beforeSave($insert)) {
           $this->senha = Yii::$app->security->generatePasswordHash($this->senha);
           return true;
       } else {
           return false;
       }
    }



}
