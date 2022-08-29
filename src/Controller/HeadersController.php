<?php
// src/Controller/HeadersController.php

namespace App\Controller;

class HeadersController extends AppController
{
    // public function initialize()
    // {
    //     parent::initialize();

    //     $this->loadComponent('Paginator');
    //     $this->loadComponent('Flash'); // Include the FlashComponent
    
    public function index()
    {
    
        $headers= $this->Headers->find(
            'all', [
                'order'=> 'rand()',
                'limit'=>1,
            ]
        );
        $this->set(compact('headers'));
    }
     public function add()
    {
        $header = $this->Headers->newEntity();
        if ($this->request->is('post')) {
            $header = $this->Headers->patchEntity($header, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $header->user_id = 1;

            if ($this->Headers->save($header)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('header', $header);
    }
    
}