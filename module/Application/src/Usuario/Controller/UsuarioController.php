<?php

namespace Usuario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsuarioController extends AbstractActionController
{

    public function indexAction()
    {
    	$texto = 'Teste de view ... ABC';
    	
        return new ViewModel(array(
        	'texto' => $texto,
        ));
    }


}

