<?php

namespace App\Parser;

use Illuminate\Http\UploadedFile;

final class Parser
{
    /**
     * @var ParserStrategyFactory
     */
    public $factory;

    /**
     * Parser constructor.
     *
     * @param ParserStrategyFactory $factory
     */
    public function __construct(ParserStrategyFactory $factory)
    {
        $this->factory = $factory;
    }

    public function parse(UploadedFile $file) : array
    {
        $strategy =  $this
            ->factory
            ->buildStrategyFromExtension(
                $file->getClientOriginalExtension()
            );

        return $strategy->parse($file);
    }
}