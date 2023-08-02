<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "examenfinal".
 *
 * @property int $id
 * @property string $modulo
 * @property string $nombre
 * @property string $contenido
 * @property string $constante
 * @property string $np
 * @property string $p1
 * @property string $p1r1
 * @property string $p1r2
 * @property string $p1r3
 * @property string $p1r4
 * @property string $p1r5
 * @property int $p1r1v
 * @property int $p1r2v
 * @property int $p1r3v
 * @property int $p1r4v
 * @property int $p1r5v
 * @property string $p2
 * @property string $p2r1
 * @property string $p2r2
 * @property string $p2r3
 * @property string $p2r4
 * @property string $p2r5
 * @property int $p2r1v
 * @property int $p2r2v
 * @property int $p2r3v
 * @property int $p2r4v
 * @property int $p2r5v
 * @property string $p3
 * @property string $p3r1
 * @property string $p3r2
 * @property string $p3r3
 * @property string $p3r4
 * @property string $p3r5
 * @property int $p3r1v
 * @property int $p3r2v
 * @property int $p3r3v
 * @property int $p3r4v
 * @property int $p3r5v
 * @property string $p4
 * @property string $p4r1
 * @property string $p4r2
 * @property string $p4r3
 * @property string $p4r4
 * @property string $p4r5
 * @property int $p4r1v
 * @property int $p4r2v
 * @property int $p4r3v
 * @property int $p4r4v
 * @property int $p4r5v
 * @property string $p5
 * @property string $p5r1
 * @property string $p5r2
 * @property string $p5r3
 * @property string $p5r4
 * @property string $p5r5
 * @property int $p5r1v
 * @property int $p5r2v
 * @property int $p5r3v
 * @property int $p5r4v
 * @property int $p5r5v
 */
class Examenfinal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'examenfinal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modulo','nombre', 'contenido', 'p1', 'p1r1', 'p1r2', 'p1r3', 'p1r4', 'p1r5', 'p2', 'p2r1', 'p2r2', 'p2r3', 'p2r4', 'p2r5', 'p3', 'p3r1', 'p3r2', 'p3r3', 'p3r4', 'p3r5', 'p4', 'p4r1', 'p4r2', 'p4r3', 'p4r4', 'p4r5', 'p5', 'p5r1', 'p5r2', 'p5r3', 'p5r4', 'p5r5'], 'required'],
            [['p1r1v', 'p1r2v', 'p1r3v', 'p1r4v', 'p1r5v', 'p2r1v', 'p2r2v', 'p2r3v', 'p2r4v', 'p2r5v', 'p3r1v', 'p3r2v', 'p3r3v', 'p3r4v', 'p3r5v', 'p4r1v', 'p4r2v', 'p4r3v', 'p4r4v', 'p4r5v', 'p5r1v', 'p5r2v', 'p5r3v', 'p5r4v', 'p5r5v'], 'integer'],
            [['modulo'], 'string', 'max' => 255],
            [['nombre'], 'string', 'max' => 255],
            [['np'], 'string', 'max' => 255],
            [['constante'], 'string', 'max' => 255],
            [['contenido'], 'string'],
            [['p1', 'p1r1', 'p1r2', 'p1r3', 'p1r4', 'p1r5', 'p2', 'p2r1', 'p2r2', 'p2r3', 'p2r4', 'p2r5', 'p3', 'p3r1', 'p3r2', 'p3r3', 'p3r4', 'p3r5', 'p4', 'p4r1', 'p4r2', 'p4r3', 'p4r4', 'p4r5', 'p5', 'p5r1', 'p5r2', 'p5r3', 'p5r4', 'p5r5'], 'string', 'max' => 500],
        ];
    }

    public function getRelation_table()
    {
        return $this->hasOne(ABMModulo::className(), ['id' => 'modulo']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'modulo' => Yii::t('app', 'Módulo'),
            'nombre' => Yii::t('app', 'Título'),
            'np' => Yii::t('app', 'Cantidad de palabras'),
            'constante' => Yii::t('app', 'Número constante para esta lectura'),
            'contenido' => Yii::t('app', 'Lectura Evaluativa'),
            'p1' => Yii::t('app', 'Pregunta 1'),
            'p1r1' => Yii::t('app', 'Respuesta 1'),
            'p1r2' => Yii::t('app', 'Respuesta 2'),
            'p1r3' => Yii::t('app', 'Respuesta 3'),
            'p1r4' => Yii::t('app', 'Respuesta 4'),
            'p1r5' => Yii::t('app', 'Respuesta 5'),
            'p1r1v' => Yii::t('app', 'Correcta'),
            'p1r2v' => Yii::t('app', 'Correcta'),
            'p1r3v' => Yii::t('app', 'Correcta'),
            'p1r4v' => Yii::t('app', 'Correcta'),
            'p1r5v' => Yii::t('app', 'Correcta'),
            'p2' => Yii::t('app', 'Pregunta 2'),
            'p2r1' => Yii::t('app', 'Respuesta 1'),
            'p2r2' => Yii::t('app', 'Respuesta 2'),
            'p2r3' => Yii::t('app', 'Respuesta 3'),
            'p2r4' => Yii::t('app', 'Respuesta 4'),
            'p2r5' => Yii::t('app', 'Respuesta 5'),
            'p2r1v' => Yii::t('app', 'Correcta'),
            'p2r2v' => Yii::t('app', 'Correcta'),
            'p2r3v' => Yii::t('app', 'Correcta'),
            'p2r4v' => Yii::t('app', 'Correcta'),
            'p2r5v' => Yii::t('app', 'Correcta'),
            'p3' => Yii::t('app', 'Pregunta 3'),
            'p3r1' => Yii::t('app', 'Respuesta 1'),
            'p3r2' => Yii::t('app', 'Respuesta 2'),
            'p3r3' => Yii::t('app', 'Respuesta 3'),
            'p3r4' => Yii::t('app', 'Respuesta 4'),
            'p3r5' => Yii::t('app', 'Respuesta 5'),
            'p3r1v' => Yii::t('app', 'Correcta'),
            'p3r2v' => Yii::t('app', 'Correcta'),
            'p3r3v' => Yii::t('app', 'Correcta'),
            'p3r4v' => Yii::t('app', 'Correcta'),
            'p3r5v' => Yii::t('app', 'Correcta'),
            'p4' => Yii::t('app', 'Pregunta 4'),
            'p4r1' => Yii::t('app', 'Respuesta 1'),
            'p4r2' => Yii::t('app', 'Respuesta 2'),
            'p4r3' => Yii::t('app', 'Respuesta 3'),
            'p4r4' => Yii::t('app', 'Respuesta 4'),
            'p4r5' => Yii::t('app', 'Respuesta 5'),
            'p4r1v' => Yii::t('app', 'Correcta'),
            'p4r2v' => Yii::t('app', 'Correcta'),
            'p4r3v' => Yii::t('app', 'Correcta'),
            'p4r4v' => Yii::t('app', 'Correcta'),
            'p4r5v' => Yii::t('app', 'Correcta'),
            'p5' => Yii::t('app', 'Pregunta 5'),
            'p5r1' => Yii::t('app', 'Respuesta 1'),
            'p5r2' => Yii::t('app', 'Respuesta 2'),
            'p5r3' => Yii::t('app', 'Respuesta 3'),
            'p5r4' => Yii::t('app', 'Respuesta 4'),
            'p5r5' => Yii::t('app', 'Respuesta 5'),
            'p5r1v' => Yii::t('app', 'Correcta'),
            'p5r2v' => Yii::t('app', 'Correcta'),
            'p5r3v' => Yii::t('app', 'Correcta'),
            'p5r4v' => Yii::t('app', 'Correcta'),
            'p5r5v' => Yii::t('app', 'Correcta'),
        ];
    }
}
