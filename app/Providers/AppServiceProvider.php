<?php

namespace App\Providers;

use App\Parser\Parser;
use App\Parser\ParserResultSorter;
use App\Parser\ParserStrategyFactory;
use App\Parser\ParsingStrategies\TextFileStrategy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ResultSorter', function ($app) {
            return new ParserResultSorter();
        });

        $this->app->bind('TextFileStrategy', function ($app) {
            return new TextFileStrategy(app('ResultSorter'));
        });

        $this->app->bind('StrategyFactory', function ($app) {
            return new ParserStrategyFactory();
        });

        $this->app->bind('Parser', function ($app) {
            return new Parser(app('StrategyFactory'));
        });
    }
}
