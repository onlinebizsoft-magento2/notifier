<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\Notifier\Model\AdapterEngine;

interface AdapterEngineInterface
{
    /**
     * Execute engine and return true on success. Throw exception on failure.
     * @param string $message
     * @param array $params
     * @return bool
     */
    public function execute(string $message, array $params = []): bool;
}
