<?php
declare(strict_types=1);

namespace Autoframe\Components\FileMime;

use Autoframe\DesignPatterns\Singleton\AfrSingletonAbstractClass;

class AfrFileMimeClass  extends AfrSingletonAbstractClass implements AfrFileMimeInterface
{
    use AfrFileMimeTrait;
}