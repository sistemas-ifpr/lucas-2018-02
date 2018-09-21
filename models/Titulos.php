<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "titulos".
 *
 * @property int $id_titulo
 * @property string $tipo
 * @property string $titulo
 * @property string $autor
 * @property string $isbn
 * @property string $edicao
 * @property string $ano_lancamento
 */
class Titulos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'titulos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo', 'titulo', 'autor', 'isbn', 'edicao', 'ano_lancamento'], 'required'],
            [['ano_lancamento'], 'safe'],
            [['tipo', 'titulo', 'autor', 'edicao'], 'string', 'max' => 50],
            [['isbn'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_titulo' => 'Id Titulo',
            'tipo' => 'Tipo',
            'titulo' => 'Titulo',
            'autor' => 'Autor',
            'isbn' => 'Isbn',
            'edicao' => 'Edicao',
            'ano_lancamento' => 'Ano Lancamento',
        ];
    }
}
