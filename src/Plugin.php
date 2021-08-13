<?php

declare(strict_types=1);

namespace Nederdirk\PsalmRedisStubs;

final class Plugin implements \Psalm\Plugin\PluginEntryPointInterface
{
    public function __invoke(
        \Psalm\Plugin\RegistrationInterface $reg,
        //phpcs:ignore SlevomatCodingStandard.Functions.UnusedParameter
        ?\SimpleXMLElement $config = null
    ): void {
        $reg->addStubFile(__DIR__ . '/../vendor/ukko/phpredis-phpdoc/src/Redis.php');
    }
}
