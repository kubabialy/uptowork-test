<?php

namespace App\Parser;


use App\Parser\ParsingStrategies\ParserStrategyInterface;

class ParserStrategyFactory
{
    const SRT_TYPE = 'srt';

    const TXT_TYPE = 'txt';

    public function buildStrategyFromExtension(string $extension) : ParserStrategyInterface
    {
        switch ($extension) {
            case self::SRT_TYPE || self::TXT_TYPE:
                return app('TextFileStrategy');
            default:
                throw new \BadMethodCallException('Extension provided cannot be handled.');
        }
    }
}