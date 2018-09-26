<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Cake\Event\Event;

/**
 * Description of index
 *
 * @author Lucas
 */
class IndexController extends AppController {

    public function beforeFilter(Event $event) {
        $this->eventManager()->off($this->Csrf);
    }

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Csrf');
    }

    //put your code here

    public function index() {
        
    }

    public function teste() {
        $token = $this->request->getParam('_csrfToken');
        $this->set(compact('token'));
    }

    public function auth() {
        $header = jsonp($this->request->header('Authorization'));


        $this->set(compact('header'));
    }

}
