<?php

declare(strict_types=1);

namespace patterns\creational\singleton;

use LogicException;

class Application
{
    public function run(): void
    {
        Logger::log('Running application');
        $this->loggerStuff();
        $this->configStuff();
        Logger::log('Application done');
    }


    private function loggerStuff(): void
    {
        $classOneLogger = Logger::getInstance();
        $classTwoLogger = Logger::getInstance();
        if ($classOneLogger === $classTwoLogger) {
            $message = 'Logger is unique';
            Logger::log($message);
            print $message . PHP_EOL;
        } else {
            throw new LogicException('Loggers are different.');
        }
    }


    private function configStuff(): void
    {
        /** @var \patterns\creational\singleton\Config $configA */
        $configA = Config::getInstance();
        $user = 'someUsername';
        $path = 'some/Path';
        $configA->setValue('user', $user);
        $configA->setValue('lalaPath', $path);

        $configB = Config::getInstance();
        if ($user === $configB->getValue('user') &&
            $path === $configB->getValue('lalaPath')
        ) {
            Logger::log('Config singleton also works fine.');
            print 'Config singleton also works fine.' . PHP_EOL;
        }
    }
}
