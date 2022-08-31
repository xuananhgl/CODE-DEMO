<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\I18n\I18n;
class HeadersController extends AppController
{
    // public function initialize()
    // {
    //     parent::initialize();

    //     $this->loadComponent('Paginator');
    //     $this->loadComponent('Flash'); // Include the FlashComponent
    
    public function index()
    {   if($this->request->is('post')) {
        $locale = $this->request->getData('locale');
        I18n::setLocale($locale);
     }
    
        $headers= $this->Headers->find(
            'all', [
                'order'=> 'rand()',
                'limit'=>1,
            ]
        );
        $this->set(compact('headers'));

         $result = $this->loadModel('Sliders');
        $data=$result->find(
            'all', [
                'order'=> 'rand()',
                'limit'=>1,
            ]
        );
        $this->set('datas',$data);
        
    }
    // public function sliders()
    // {
       
    // }
    public function list()
    {
        $this->loadComponent('Paginator');
        $headers = $this->Paginator->paginate($this->Headers->find());
        $this->set(compact('headers'));
    }
   public function view($slug = null)
{
    $header = $this->Headers->findBySlug($slug)->firstOrFail();
    $this->set(compact('header'));
}
     public function add()
    {
        $header = $this->Headers->newEntity();
        if ($this->request->is('post')) {
            $header = $this->Headers->patchEntity($header, $this->request->getData()); 
            $header->user_id = 1;
            if ($this->Headers->save($header)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('header', $header);
    }
    public function edit()
    {
        $header = $this->Headers->newEntity();
        if ($this->request->is('post', 'put')) {
            $header = $this->Headers->patchEntity($header, $this->request->getData()); 
        
            if ($this->Headers->save($header)) {
                $this->Flash->success(__('Your article has been edit.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('header', $header);
    }
    // src/Controller/ArticlesController.php

public function delete($slug)
{
    $this->request->allowMethod(['post', 'delete']);

    $header = $this->Headers->findBySlug($slug)->firstOrFail();
    if ($this->Headers->delete($header)) {
        $this->Flash->success(__('The {0} article has been deleted.', $header->title));
        return $this->redirect(['action' => 'index']);
    }
}
//  public function delete($id = null)
// {
//     $this->request->allowMethod(['post', 'delete']);
//     $header = $this->Headers->get($id);
//     if ($this->Headers->delete($header)) {
//         $this->Flash->success(__('The user has been deleted.'));
//     } else {
//         $this->Flash->error(__('The user could not be deleted. Please, try again.'));
//     }

//     return $this->redirect(['action' => 'index']);
// }

}