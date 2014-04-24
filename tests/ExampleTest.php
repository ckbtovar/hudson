<?
require('../src/Example.php');
class ExampleTest extends PHPUnit_Framework_TestCase {

  public function testFoo() {
    $example = new Example();
    $this->assertEquals(2, $example->add(1,1));
  }
}
