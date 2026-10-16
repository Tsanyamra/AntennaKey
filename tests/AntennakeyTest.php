<?php
/**
 * Tests for AntennaKey
 */

use PHPUnit\Framework\TestCase;
use Antennakey\Antennakey;

class AntennakeyTest extends TestCase {
    private Antennakey $instance;

    protected function setUp(): void {
        $this->instance = new Antennakey(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Antennakey::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
