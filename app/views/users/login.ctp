
<h1>Login</h1>
<?php
    echo $session->flash('auth');

    echo $this->Form->create('User', array('action' => 'login'));
    echo $this->Form->input('username', array('label' => 'E-mail address'));
    echo $this->Form->input('password', array('label' => 'Password'));
    echo $this->Form->end('Login');

?>