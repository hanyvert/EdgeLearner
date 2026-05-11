<?php
/**
 * Tests for EdgeLearner
 */

use PHPUnit\Framework\TestCase;
use Edgelearner\Edgelearner;

class EdgelearnerTest extends TestCase {
    private Edgelearner $instance;

    protected function setUp(): void {
        $this->instance = new Edgelearner(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Edgelearner::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
