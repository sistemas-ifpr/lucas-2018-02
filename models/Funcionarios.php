<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionarios".
 *
 * @property int $id_funcionario
 * @property string $nome
 * @property string $cpf
 * @property int $telefone
 * @property string $endereco
 * @property string $data_admissao
 * @property string $data_demissao
 */
class Funcionarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'telefone', 'endereco', 'data_admissao', 'data_demissao'], 'required'],
            [['telefone'], 'integer'],
            [['data_admissao', 'data_demissao'], 'safe'],
            [['nome', 'endereco'], 'string', 'max' => 50],
            [['cpf'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_funcionario' => 'Id Funcionario',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'telefone' => 'Telefone',
            'endereco' => 'Endereco',
            'data_admissao' => 'Data Admissao',
            'data_demissao' => 'Data Demissao',
        ];
    }
}
