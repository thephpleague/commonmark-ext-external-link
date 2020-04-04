<?php

/*
 * This file is part of the league/commonmark-ext-external-link package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Ext\ExternalLink;

use League\CommonMark\EnvironmentInterface;
use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Extension\ExternalLink\ExternalLinkProcessor as CoreProcessor;

/**
 * @deprecated The league/commonmark-ext-external-link extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class ExternalLinkProcessor
{
    private $coreProcessor;

    /**
     * @param EnvironmentInterface $environment
     */
    public function __construct(EnvironmentInterface $environment)
    {
        @trigger_error(sprintf('league/commonmark-ext-external-link is deprecated; use %s from league/commonmark 1.3+ instead', CoreProcessor::class), E_USER_DEPRECATED);
        $this->coreProcessor = new CoreProcessor($environment);
    }

    /**
     * @param DocumentParsedEvent $e
     */
    public function __invoke(DocumentParsedEvent $e)
    {
        $this->coreProcessor->__invoke($e);
    }

    /**
     * @param string $host
     * @param mixed  $compareTo
     *
     * @return bool
     *
     * @internal This method is only public so we can easily test it. DO NOT USE THIS OUTSIDE OF THIS EXTENSION!
     */
    public static function hostMatches(string $host, $compareTo)
    {
        @trigger_error(sprintf('league/commonmark-ext-external-link is deprecated; use %s from league/commonmark 1.3+ instead', CoreProcessor::class), E_USER_DEPRECATED);

        return CoreProcessor::hostMatches($host, $compareTo);
    }
}
