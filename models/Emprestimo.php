<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo".
 *
 * @property int $id_emprestimo
 * @property int $id_livro
 * @property string $data_emprestimo
 * @property int $id_aluno
 * @property int $id_funcionario
 */
class Emprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_livro', 'data_emprestimo', 'id_aluno', 'id_funcionario'], 'required'],
            [['id_livro', 'id_aluno', 'id_funcionario'], 'integer'],
            [['data_emprestimo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_emprestimo' => 'Id Emprestimo',
            'id_livro' => 'Id Livro',
            'data_emprestimo' => 'Data Emprestimo',
            'id_aluno' => 'Id Aluno',
            'id_funcionario' => 'Id Funcionario',
        ];
    }
}
