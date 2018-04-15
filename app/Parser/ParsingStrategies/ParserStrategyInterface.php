<?php

namespace App\Parser\ParsingStrategies;

use App\Parser\ParserResultSorter;
use Illuminate\Http\UploadedFile;

interface ParserStrategyInterface
{
    public function __construct(ParserResultSorter $sorter);

    public function parse(UploadedFile $file) : array;
}