<?php

namespace App\Parser\ParsingStrategies;


use App\Parser\ParserResultSorter;
use Illuminate\Http\UploadedFile;

class TextFileStrategy implements ParserStrategyInterface
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
        $fileContent = $file->openFile();

        $words = $this->fetchWordsFromFile($fileContent);

        return $this->sorter->sortByOccurrence($words);
    }

    /**
     * @param \SplFileObject $fileObject
     *
     * @return array
     */
    private function fetchWordsFromFile(\SplFileObject $fileObject) : array
    {
        $text = $fileObject->fread($fileObject->getSize());

        $string = preg_replace("/[^\w\]|[\']/", ',', $text);

        $stringExploded = explode(',', $string);

        $i = 0;

        foreach ($stringExploded as $item) {
            if ($this->isNotWord($item)) {
                unset($stringExploded[$i]);
            } else {
                $stringExploded[$i] = strtoupper($item);
            }
            $i++;
        }

        return $stringExploded;
    }

    /**
     * @param string $word
     *
     * @return bool
     */
    private function isNotWord(string $word): bool
    {
        return empty($word)
               || preg_match(
                   '/\d/',
                   $word
               );
    }

}