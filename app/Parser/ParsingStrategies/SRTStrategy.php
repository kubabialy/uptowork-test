<?php

namespace App\Parser\ParsingStrategies;


use App\Parser\ParserResultSorter;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class SRTStrategy implements ParserStrategyInterface
{
    /**
     * @var ParserResultSorter
     */
    private $sorter;

    public function __construct(ParserResultSorter $sorter)
    {
        $this->sorter = $sorter;
    }

    public function parse(UploadedFile $file): array
    {
        echo $file->getClientOriginalExtension();

        return [];
    }


}