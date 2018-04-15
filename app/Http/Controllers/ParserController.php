<?php
/**
 * Created by PhpStorm.
 * User: kubabialy
 * Date: 13.04.2018
 * Time: 17:34
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ParserController
{
    const PARSER_MAIN_VIEW = 'parser';

    const PARSER_RESULTS_VIEW = 'results';

    const REQUESTED_FILE_NAME = 'parsed_file';

    public function index() : View
    {
        return \view('main', [
            'includedView' => self::PARSER_MAIN_VIEW
        ]);
    }

    public function parse(Request $request) : View
    {
        if (!$request->hasFile(self::REQUESTED_FILE_NAME)) {
            $message = 'File not found. Please try again.';

            return \view('main', [
                   'includedView' => self::PARSER_MAIN_VIEW,
                   'message' => $message
                ]);
        }

        $file = $request->file('parsed_file')[0];

        $parser = app('Parser');

        $results = $parser->parse($file);

        return \view('main', [
            'includedView' => self::PARSER_RESULTS_VIEW,
            'results' => $results
        ]);
    }
}