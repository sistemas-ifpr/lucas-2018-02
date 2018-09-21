<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "editoras".
 *
 * @property int $id_editora
 * @property string $nome
 */
class Editoras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'editoras';
    }   

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'local'], 'required'],
            [['nome', 'local'], 'string', 'max' => 20],


        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_editora' => 'Id Editora',
            'nome' => 'Nome',
            'local' => 'local',
        ];
    }
}
