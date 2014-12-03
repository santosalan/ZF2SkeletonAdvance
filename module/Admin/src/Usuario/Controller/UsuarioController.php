<?php

namespace AdminUsuario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsuarioController extends AbstractActionController
{

    public function indexAction()
    {
    	$texto = 'Teste de view ... 123 ...';
    	
        return new ViewModel(array(
        	'texto' => $texto,
        ));
    }


}

