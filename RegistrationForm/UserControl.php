<?php

class UserControl {

	private $systemCommand;

	public function __construct(SystemCommand $systemCommand = null) {
		$this->systemCommand = $systemCommand ? : new SystemCommand();
	}

	public function add($username) {
		if (!$username) {
			throw new Exception('User can not be empty!');
		}

		if(!$this->systemCommand->execute(sprintf('adduser %s', $username))) {
			throw new ExceptionCannotAddUser($username, $this->systemCommand->getFailureMessage());
		}
	}

}

class SystemCommand {

}
