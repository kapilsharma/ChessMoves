<?php

namespace Phpreboot\Chess;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Phpreboot\Chess\Board\ChessBoard;

class ChessCommand extends Command
{
    public function configure()
    {
        $this->setName('move')
            ->setDescription('Calculates the move')
            ->addArgument('piece', InputArgument::REQUIRED, 'Enter piece name')
            ->addArgument('position', InputArgument::REQUIRED, 'Initial position');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $piece = $input->getArgument('piece');
        $position = $input->getArgument('position');

        $output->writeln('Piece = ' . $piece);
        $output->writeln('Initial position = ' . $position);

        $chessBoard = new ChessBoard();

    }
}