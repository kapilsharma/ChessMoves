# Chess Simulation

A simple chess simulation program, supposed to suggest possible moves of a piece.

# Current status:

## Plan for chess board:

We have `ChessBoard`, which represents the Chess board, and is supposed to return valid squares.

Incomplete function `getSquare` is supposed to return an array of possible squares in a given direction (defined as constants)

## Board pieces:

There is a PieceInterface, which will be implemented by all Piece class. Started example with the `Rook` class.

This concrete Piece class is supposed to define the direction of the piece and `getSquare` from board will return an array of all possible moved in given direction.

## Overall application

Created application as Symfony console application, as it provide many helper methods for console application. After `composer install`, we should run `php chess piece currentSquare` command. Currently, it is just displaying command line arguments. However, it is supposed to do following:

- Create an instance of PieceFactory
- Get Piece instance (implementing PieceInterface) from factory and call `getMoves` function.

## Knight special case

For Knight, there will be special case, which can be handled through getMoves method. It is supposed to call Board's `getSquare` method thrice for each move.