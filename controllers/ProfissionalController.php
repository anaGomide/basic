<?php
namespace app\controllers;
use yii\base\Controller;
class ProfissionalControler extends Controller{
    public function actionCadastro (){
        return $this->render('profissionais/cadastroProfissional.php', []);
    }
}