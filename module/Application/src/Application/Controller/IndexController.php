<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Application\Model\Livro;
use Application\Model\Autor;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        if($this->getRequest()->isPost()){
            $this->gravarLivro($this->getRequest());
        } else {
            $this->pegarLivro();
        }
    }
        
    protected function gravarLivro($request){
        
    }
    
    protected function pegarLivro(){
        $livros = $this->getTable
    }
}
