--TEST--
The right events are emitted in the right order for when an exception is raised in setUpBeforeClass()
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--debug';
$_SERVER['argv'][] = __DIR__ . '/_files/ExceptionInSetUpBeforeClassTest.php';

require __DIR__ . '/../../bootstrap.php';

(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);
--EXPECTF--
PHPUnit Started (PHPUnit %s using %s)
Test Runner Configured
Event Facade Sealed
Test Suite Loaded (1 test)
Test Runner Started
Test Suite Sorted
Test Runner Execution Started (1 test)
Test Suite Started (PHPUnit\TestFixture\Event\ExceptionInSetUpBeforeClassTest, 1 test)
Before First Test Method Called (PHPUnit\TestFixture\Event\ExceptionInSetUpBeforeClassTest::setUpBeforeClass)
Before First Test Method Errored (PHPUnit\TestFixture\Event\ExceptionInSetUpBeforeClassTest::setUpBeforeClass)
Before First Test Method Finished:
- PHPUnit\TestFixture\Event\ExceptionInSetUpBeforeClassTest::setUpBeforeClass
Test Suite Finished (PHPUnit\TestFixture\Event\ExceptionInSetUpBeforeClassTest, 1 test)
Test Runner Execution Finished
Test Runner Finished
PHPUnit Finished (Shell Exit Code: 2)
