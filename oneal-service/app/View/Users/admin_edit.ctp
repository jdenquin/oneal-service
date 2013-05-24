<h1>Edit User</h1>
<?php 
	echo $this->Form->create('User', array('action' => 'edit'));
	echo $this->Form->input('username');
	echo $this->Form->input('password', array('type' => 'password'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Update');
?>