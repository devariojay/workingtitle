<?php

class AppController extends Controller {
    var $components = array('Auth', 'Session');
    
    function beforeFilter(){
    
        $this->Auth->allow('index', 'view');
        $this->Auth->authError = 'Please login to view that page.';
        $this->Auth->loginError = 'Incorrect username/password combination';
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');       
    
        $this->set('admin', $this->_isAdmin());
        $this->set('logged_in', $this->_loggedIn());
        $this->set('users_username', $this->_usersUsername());
        $this->set('userId', $this->_usersId());       
        
    }
    
    function _isAdmin() {
        
        $admin = FALSE;
        if($this->Auth->user('role_id') == '1'){
            $admin = TRUE;
        }
        return $admin;
        
    }
    
    function _loggedIn(){
        
        $logged_in = FALSE;
        if($this->Auth->user()){
            $logged_in = TRUE;
        }
        return $logged_in;
        
    }
    
    function _usersUsername() {
        
        $users_username = NULL;
        if($this->Auth->user()){            
            $users_username = $this->Auth->user('firstname');            
        }
        return $users_username;
    
    }
    
    function _usersId() {
        
        $userId = NULL;
        if($this->Auth->user()){
            $userId = $this->Auth->user('id');
        }
        return $userId;
        
    }

}

?>