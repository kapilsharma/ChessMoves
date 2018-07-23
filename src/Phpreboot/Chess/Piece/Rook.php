<?php
namespace Phpreboot\Chess\Piece;

use Phpreboot\Chess\Piece\Contract\PieceInterface;

class Rook implements PieceInterface
{
    public function getMoves($position)
    {
        return ['A2'];
    }
}