<?php
namespace Phpreboot\Chess\Piece;

use Phpreboot\Chess\Piece\Rook;
use PHPUnit\Framework\TestCase;

class RookTest extends TestCase
{
    /**
     * @var Rook
     */
    private $rook;

    public function setUp()
    {
        $this->rook = new Rook();
    }

    public function tearDown()
    {
        $this->rook = null;
    }

    public function testMovesCanBeReturned()
    {
        $moves = $this->rook->getMoves('A1');

        $this->assertNotNull($moves);
    }
}