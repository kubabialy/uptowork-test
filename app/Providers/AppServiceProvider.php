<?php

namespace App\Providers;

use App\Parser\Parser;
use App\Parser\ParserResultSorter;
use App\Parser\ParserStrategyFactory;
use App\Parser\ParsingStrategies\ParserStrategyInterface;
use App\Parser\ParsingStrategies\SRTStrategy;
use App\Parser\ParsingStrategies\TXTStrategy;
use function foo\func;
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

        $this->app->bind('TXTStrategy', function ($app) {
            return new TXTStrategy(app('ResultSorter'));
        });

        $this->app->bind('SRTStrategy', function ($app) {
            return new SRTStrategy(app('ResultSorter'));
        });

        $this->app->bind('StrategyFactory', function ($app) {
            return new ParserStrategyFactory();
        });

        $this->app->bind('Parser', function ($app) {
            return new Parser(app('StrategyFactory'));
        });
    }
}
