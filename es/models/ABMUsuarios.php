<?php

namespace app\models;

use Yii;//

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $dni
 * @property string $email
 * @property string $password
 * @property string $fnac
 * @property string $tel
 * @property string $pais
 * @property string $ciudad
 * @property string $direccion
 * @property string $ocupacion
 * @property string $idioma
 * @property string $intereses
 * @property string $rango
 */
class ABMUsuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'dni', 'email', 'password', 'fnac', 'tel', 'pais', 'ciudad', 'direccion', 'ocupacion', 'idioma', 'intereses'], 'required'],
            [['nombre', 'apellido', 'dni', 'email', 'password', 'fnac', 'tel', 'pais', 'ciudad', 'direccion', 'ocupacion', 'intereses', 'rango'], 'string', 'max' => 255],
            [['idioma'], 'string', 'max' => 2],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellido' => Yii::t('app', 'Apellido'),
            'dni' => Yii::t('app', 'Documento'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Contraseña'),
            'fnac' => Yii::t('app', 'Fecha de Nacimiento'),
            'tel' => Yii::t('app', 'Teléfono'),
            'pais' => Yii::t('app', 'País'),
            'ciudad' => Yii::t('app', 'Ciudad'),
            'direccion' => Yii::t('app', 'Dirección'),
            'ocupacion' => Yii::t('app', 'Ocupación'),
            'idioma' => Yii::t('app', 'Idioma'),
            'intereses' => Yii::t('app', 'Intereses'),
            'rango' => Yii::t('app', 'Rango'),
        ];
    }
}
