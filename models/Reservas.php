<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservas".
 *
 * @property int $id_reserva
 * @property string $isbn
 * @property string $data_reserva
 * @property int $matricula_reserva
 * @property string $baixa_reserva
 * @property int $funcionario_reserva
 */
class Reservas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isbn', 'data_reserva', 'matricula_reserva', 'baixa_reserva', 'funcionario_reserva'], 'required'],
            [['data_reserva', 'baixa_reserva'], 'safe'],
            [['matricula_reserva', 'funcionario_reserva'], 'integer'],
            [['isbn'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_reserva' => 'Id Reserva',
            'isbn' => 'Isbn',
            'data_reserva' => 'Data Reserva',
            'matricula_reserva' => 'Matricula Reserva',
            'baixa_reserva' => 'Baixa Reserva',
            'funcionario_reserva' => 'Funcionario Reserva',
        ];
    }
}
