<?php


namespace Core;

use Core\ArticleModel as Model;
use Core\ArticleView as View;
use Core\ServiceController;



class ArticleController
{
    public $Model;
    public $View;
    public $result;//?????
    public function __construct()
    {
        $this->Model= new Model();
        $this->View = new View();
    }

    public function ShowAllPost()
    {
     $this->Model->all();
     $this->result=$this->Model->out;

     /*echo '<pre>';
     print_r($this->result);
        echo '</pre>';*/
     $this->View->all($this->result);
    }

    public function showSinglePost($id)
    {
        $this->Model->findById($id);
        //$this->result=$this->Model->out;
        $this->View->single($this->Model->out);
    }

    public function lol()
    {
        $this->Model->titleToSlag();
    }


}