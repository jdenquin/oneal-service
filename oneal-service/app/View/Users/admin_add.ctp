<?php
	echo $this->Form->create('User');
	echo $this->Form->input('username');
	echo $this->Form->password('password');
	echo $this->Form->end('Save');
?>