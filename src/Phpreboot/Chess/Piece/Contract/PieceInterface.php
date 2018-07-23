<?php

namespace Phpreboot\Chess\Piece\Contract;

interface PieceInterface
{
    public function getMoves($position);
}