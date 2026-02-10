<?php
/**
 * Tests for GenVault
 */

use PHPUnit\Framework\TestCase;
use Genvault\Genvault;

class GenvaultTest extends TestCase {
    private Genvault $instance;

    protected function setUp(): void {
        $this->instance = new Genvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Genvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
