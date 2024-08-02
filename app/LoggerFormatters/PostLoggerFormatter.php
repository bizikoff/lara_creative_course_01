<?php

namespace App\LoggerFormatters;

use Illuminate\Log\Logger;
use Monolog\Formatter\LineFormatter;

class PostLoggerFormatter
{
    /**
     * Customize the given logger instance.
     */
    public function __invoke(Logger $logger): void
    {
        foreach ($logger->getHandlers() as $handler) {
            $handler->setFormatter(new LineFormatter(
                '%message% %context% %extra%' . PHP_EOL
            ));
        }
    }
}
