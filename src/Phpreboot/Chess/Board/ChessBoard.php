<?php

namespace Phpreboot\Chess\Board;

class ChessBoard
{
    const DIRECTION_TOP   = 1;
    const DIRECTION_DOWN  = 2;
    const DIRECTION_LEFT  = 3;
    const DIRECTION_RIGHT = 4;

    const DIRECTION_TOP_LEFT = 5;
    const DIRECTION_TOP_RIGHT = 6;
    const DIRECTION_BOTTOM_LEFT = 7;
    const DIRECTION_BOTTOM_RIGHT = 8;

    private $board;

    public function __construct()
    {
        $this->initializeBoard();
    }

    public function initializeBoard()
    {
        $this->board = [];

        $rows = range('A', 'H');

        for ($i = 8; $i > 0; $i--) {
            $this->board[8-$i] = [];
            for ($j = 0; $j < 8; $j++) {
                $this->board[8 - $i][$j] = $rows[$j] . $i;
            }
        }
    }

    public function getSquare($currentSquare, $direction, $squares = 7)
    {
        $index = $this->getIndex($currentSquare);
    }

    public function getIndex($position)
    {
        $this->isValidPosition($position);

        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {
                if ($position == $this->board[$i][$j]) {
                    return [$i, $j];
                }
            }
        }

        return new ChessBoardException("Not a valid Square");
    }

    public function isValidPosition($position)
    {
        if (!is_string($position)) {
            throw new ChessBoardException("Position must be String");
        }

        if (strlen($position) !== 2) {
            throw new ChessBoardException("Position string length must be 2");
        }

        $row = substr($position, 0, 1);
        $column = substr($position, -1);

        $rows = range('A', 'H');

        if (!in_array($row, $rows)) {
            throw new ChessBoardException("Row must be A-H");
        }

        if ($column < 1 || $column > 8) {
            throw new ChessBoardException("Column must be between 1-8");
        }

        return true;
    }
}