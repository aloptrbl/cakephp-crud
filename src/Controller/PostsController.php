<?php
namespace App\Controller;
use App\Controller\AppController;

//all under Posts folder (need to create ctp file)
class PostsController extends AppController {
//send data to view
    public function index() {
        $this->set('posts', $this->Posts->find('all'));
    }   

    public function add() {
        $post = $this->Posts->newEntity();
        if($this->request->is('post')){
        $post = $this->Posts->patchEntity($post, $this->request->getData());
        if($this->Posts->save($post)){
            $this->Flash->success('Post Added Successfully');
            return $this->redirect(['action'=>'index']);
        }
        else 
        {
        $this->Flash->error(__('Unable to add your post!'));
        }
        }
        $this->set('post', $post);
    }

    public function view($id = NUll ) {
        $posts = $this->Posts->get($id);
        $this->set('post', $posts);
    }

    public function edit($id = NUll) {
        $posts = $this->Posts->get($id);
        if( !empty($posts) ){
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                //save user
                // pr($this->request->getData());die;
                $posts = $this->Posts->patchEntity($posts, $this->request->getData());
                if( $this->Posts->save( $posts ) ){
                    //redirect to user's list
                    $this->Flash->success(__('Success!'));
                    return $this->redirect(array('action' => 'index'));
                    
                    
                }else{
                    return $this->Flash->error(__('Unable to edit user. Please, try again.'));
                }
                
            }
            
        }else{
            //if not found, we will tell the user that user does not exist
            $this->Flash->error(_('The post you are trying to edit does not exist.'));
            return $this->redirect(array('action' => 'index'));
                
            //or, since it we are using php5, we can throw an exception
            //it looks like this
            //throw new NotFoundException('The user you are trying to edit does not exist.');
        }
        $this->set(compact('posts'));  
    }

    public function delete($id) {
            // Only accept POST and DELETE requests
    //$this->request->allowMethod(['posts', 'delete']);
    $post = $this->Posts->get($id);
    if( $this->Posts->delete($post) ){
        //set to screen
        $this->Flash->success(__('User was deleted.'));
        //redirect to users's list
        $this->redirect(array('action'=>'index'));
         
    }
    else {
        $this->Flash->error(_('The post you trying to delete not successfully'));
            return $this->redirect(array('action' => 'index'));
    }
}
}
?>