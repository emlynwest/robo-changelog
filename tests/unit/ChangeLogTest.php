<?php

namespace RoboChangeLogTests;

use Codeception\TestCase\Test;
use RoboChangeLog\ChangeLog;

class ChangeLogTest extends Test
{
	public function testSample()
	{
		$changeLog = new ChangeLog();
		$this->assertTrue($changeLog->run());
	}
}
