<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relatorio".
 *
 * @property int $id_relatorio
 * @property int $id_livro
 * @property string $data_emprestimo
 */
class Relatorio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'relatorio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_livro', 'data_emprestimo'], 'required'],
            [['id_livro'], 'integer'],
            [['data_emprestimo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_relatorio' => 'Id Relatorio',
            'id_livro' => 'Id Livro',
            'data_emprestimo' => 'Data Emprestimo',
        ];
    }
}
