<?php

class ExceptionCannotAddUser extends Exception {

	public function __construct($userName, $reason) {
		$message = sprintf(
			'Cannot add user %s. Reason: %s',
			$userName, $reason
		);
		parent::__construct($message, 13, null);
	}
}

