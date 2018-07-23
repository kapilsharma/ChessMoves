<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

use Phpreboot\Chess\ChessCommand;

$application = new Application('echo', '1.0.0');
$command = new ChessCommand();

$application->add($command);

$application->setDefaultCommand($command->getName(), true);

$application->run();