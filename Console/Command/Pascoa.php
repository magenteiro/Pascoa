<?php

namespace Magenteiro\Pascoa\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Pascoa extends Command
{
    /**
     * Initialization of the command.
     */
    protected function configure()
    {
        $this->setName('magenteiro:pascoa');
        $this->setDescription('Feliz Pascoa :)');
        parent::configure();
    }

    /**
     * CLI command description.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $bunny = <<<EOF
Art by Blazej Kozlowski

                              __
                     /\    .-" /
                    /  ; .'  .'
                   :   :/  .'
                    \  ;-.'
       .--""""--..__/     `.
     .'           .'    `o  \
    /                    `   ;
   :                  \      :
 .-;        -.         `.__.-'
:  ;          \     ,   ;
'._:           ;   :   (
    \/  .__    ;    \   `-.
  ;     "-,/_..--"`-..__)
     '""--.._:


  _____    _ _       ____
 |  ___|__| (_)____ |  _ \ __ _ ___  ___ ___   __ _
 | |_ / _ \ | |_  / | |_) / _` / __|/ __/ _ \ / _` |
 |  _|  __/ | |/ /  |  __/ (_| \__ \ (_| (_) | (_| |
 |_|  \___|_|_/___| |_|   \__,_|___/\___\___/ \__,_|
  _    _
 |  \/  | __ _  __ _  ___ _ __ | |_ ___(_)_ __ ___
 | |\/| |/ _` |/ _` |/ _ \ '_ \| __/ _ \ | '__/ _ \
 | |  | | (_| | (_| |  __/ | | | ||  __/ | | | (_) |
 |_|  |_|\__,_|\__, |\___|_| |_|\__\___|_|_|  \___/
               |___/


EOF;
    $output->writeln($bunny);
    return 0;
    }
}
