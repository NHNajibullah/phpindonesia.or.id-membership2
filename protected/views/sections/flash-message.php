<?php
if ($this->flash_messages()):
?>

<?php
$message_type = key($this->flash_messages());
$message = $this->flash_messages()[$message_type][0];

if ($message_type == 'success'):
	echo $this->insert('sections::flash-message-success', array('message' => $message));
elseif ($message_type == 'warning'):
	echo $this->insert('sections::flash-message-warning', array('message' => $message));
elseif ($message_type == 'error'):
	echo $this->insert('sections::flash-message-error', array('message' => $message));
endif;
?>

<?php
endif;
?>