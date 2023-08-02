<?php

namespace app\models;

use Yii;

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
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    public function rules()
    {
        return [
            [['nombre', 'apellido','email', 'password'], 'required'],
            [['nombre', 'apellido', 'dni', 'email', 'password', 'fnac', 'tel', 'pais', 'ciudad', 'direccion', 'ocupacion', 'intereses'], 'string', 'max' => 255],
            [['idioma'], 'string', 'max' => 2],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'dni' => 'Cedula de indentidad',
            'email' => 'Email',
            'password' => 'Password',
            'fnac' => 'Fecha de nacimiento',
            'tel' => 'Telefono',
            'pais' => 'Pais',
            'ciudad' => 'Ciudad',
            'direccion' => 'Direccion',
            'ocupacion' => 'Ocupacion',
            'idioma' => 'Idioma',
            'intereses' => 'Intereses',
        ];
    }
}
