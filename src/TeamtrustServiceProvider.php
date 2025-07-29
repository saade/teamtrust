<?php

namespace Saade\Teamtrust;

use Saade\Teamtrust\Commands\TeamtrustCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TeamtrustServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('teamtrust')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_teamtrust_table')
            ->hasCommand(TeamtrustCommand::class);
    }
}
