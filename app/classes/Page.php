<?php
/**
 * Created by PhpStorm.
 * User: HE
 * Date: 14/05/2019
 * Time: 09:52
 */

namespace classes;


use Rain\Tpl;

class Page
{
    private $template;
    private $option;
    private $default_options = [
        'data' => []
    ];
    //A FUNÇÃO CONSTRUTORA INSTANCIA O TPL E CHAMA O HEADER DA PÁGINA
    public function __construct($options = array())
    {
        $this->option = array_merge($this->default_options,$options);
        $configuration = array(
            'tpl_dir' => $_SERVER['DOCUMENT_ROOT'].'/public/pages/',
            'cache_dir' => $_SERVER['DOCUMENT_ROOT'].'/public/pages/cache/',
            'debug' => false
        );
        Tpl::configure($configuration);

        $this->template = new Tpl();
        $this->setData($this->option['data']);
        $this->template->draw('header');
    }
    //FUNÇÃO QUE CHAMA O TEMPLATE DESEJADO
    public function setTemplate($templateName,$data = array())
    {
        $this->setData($data);
        $this->template->draw($templateName);
    }
    //DEPOIS DE UTILIZAR A CLASSE, O DESTRUCT CHAMA O FOOTER E DESTROI A CLASSE
    public function __destruct()
    {
        $this->template->draw('footer');
    }
    private function setData($data)
    {
        foreach($data as $key => $value)
        {
            $this->template->assign($key,$value);
        }
    }
}