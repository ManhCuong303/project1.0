<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');
	public function Posts() {
	        if ($this->request->is('post')) {
	            $this->Post->create();
	            if ($this->Post->save($this->request->data)) {
	                $this->Flash->success(__('Your post has been saved.'));
	                return $this->redirect(array('action' => 'Posts'));
	            }
	            $this->Flash->error(__('Unable to add your post.'));
	        }
	    }
}
?>