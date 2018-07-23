<?php

namespace Phpreboot\Chess\Board;

use Phpreboot\Chess\Board\ChessBoard;

use PHPUnit\Framework\TestCase;

class ChessBoardTest extends TestCase
{
    /**
     * @var ChessBoard
     */
    private $board;

    public function setUp()
    {
        $this->board = new ChessBoard();
    }

    public function tearDown()
    {
        $this->board = null;
    }

    public function testSquareIndexCanBeFatched()
    {
        $index = $this->board->getIndex('A8');

        $this->assertTrue(is_array($index));
        $this->assertSame(0, $index[0]);
        $this->assertSame(0, $index[1]);
    }

    /**
     * @param $position
     * @dataProvider validPositionDateProvider
     */
    public function testPositionCanBeValidated($position) {
        $this->assertTrue($this->board->isValidPosition($position));
    }

    /**
     * @expectedException Phpreboot\Chess\Board\ChessBoardException
     */
    public function testInvalidPositionThrowsException()
    {
        $this->board->isValidPosition('I9');
    }

    /* ****************/
    /* Data providers */
    /* ****************/

    public function validPositionDateProvider()
    {
        return [
            ['A1'],
            ['B5'],
            ['C3'],
            ['D8']
        ];
    }
}