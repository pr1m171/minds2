<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $fecha
 * @property string $tags
 * @property string $contenido
 */
class ABMNoticias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticiasen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'fecha', 'tags', 'contenido'], 'required'],
            [['contenido'], 'string'],
            [['titulo', 'tags'], 'string', 'max' => 255],
            [['fecha'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'titulo' => Yii::t('app', 'Titulo'),
            'fecha' => Yii::t('app', 'Fecha'),
            'tags' => Yii::t('app', 'Tags'),
            'contenido' => Yii::t('app', 'Contenido'),
        ];
    }
}
