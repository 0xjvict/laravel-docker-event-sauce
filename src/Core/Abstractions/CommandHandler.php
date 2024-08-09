<?php

namespace Core;

abstract class CommandHandler
{
    abstract public function handle(Command $command): void;
}
