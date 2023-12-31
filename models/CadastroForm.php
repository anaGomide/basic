<?php

namespace app\models;

use yii\db\ActiveRecord;

class CadastroForm extends ActiveRecord {

    public $nome;
    public $conselho;
    public $numeroConselho;
    public $dtNascimento;
    public $status;

    public function rules ()
    {
        return [
            [['nome','conselho','numeroConselho', 'dtNascimento', 'status'],'required'],
            ['status','boolean' ]

        ];
    }

    public function attributeLabels()
    {
        return [
            'nome' => 'Nome Completo',
            'conselho' => 'Conselho',
            'numeroConselho' => 'Numero do Conselho',
            'dtNascimento' => 'Data de Nascimento',
            'status' => 'Status'

        ];
    }

    
    
}