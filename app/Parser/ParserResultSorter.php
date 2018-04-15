<?php

namespace App\Parser;

class ParserResultSorter
{
    public function sortByOccurrence(array $listOfWords) : array
    {
        $results = array_count_values($listOfWords);

        $sortedValues = $results;

        rsort($sortedValues);

        $arrayOfValues = [];

        foreach ($sortedValues as $value) {
            foreach ($results as $key => $val) {
                if ($val === $value) {
                    $arrayOfValues[$key] = $val;
                }
            }
        }

        return $arrayOfValues;
    }
}