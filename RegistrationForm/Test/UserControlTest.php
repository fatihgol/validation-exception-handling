<?php

require_once __DIR__ . '/../UserControl.php';
require_once __DIR__ . '/../ExceptionCannotAddUser.php';

class UserControlTest extends PHPUnit_Framework_TestCase {

	/**
	 * @expectedException Exception
	 * @expectedExceptionMessage User can not be empty
	 */
	function testEmptyUsernameWillThrowException() {
		$userControl = new UserControl();
		$userControl->add('');
	}

	/**
	 * @expectedException ExceptionCannotAddUser
	 * @expectedExceptionMessage Cannot add user George
	 */
	function testWillNotAddAnAlreadyExistingUser() {
		$command = \Mockery::mock('SystemCommand');
		$command->shouldReceive('execute')->once()->with('adduser George')->andReturn(false);
		$command->shouldReceive('getFailureMessage')->once()->andReturn('User already exists on the system.');
		$userControl = new UserControl($command);
		$userControl->add('George');
	}

}
