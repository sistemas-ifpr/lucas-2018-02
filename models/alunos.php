<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alunos".
 *
 * @property int $id_aluno
 * @property string $nome
 * @property int $cpf
 * @property string $telefone
 * @property int $celular
 * @property int $matricula
 */
class alunos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alunos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'telefone', 'celular', 'matricula'], 'required'],
            [['cpf', 'celular', 'matricula'], 'integer'],
            [['nome'], 'string', 'max' => 50],
            [['telefone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_aluno' => 'Id Aluno',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'telefone' => 'Telefone',
            'celular' => 'Celular',
            'matricula' => 'Matricula',
        ];
    }
}
