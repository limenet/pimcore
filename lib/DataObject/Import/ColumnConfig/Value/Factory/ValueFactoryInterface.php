<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\DataObject\Import\ColumnConfig\Value\Factory;

use Pimcore\DataObject\Import\ColumnConfig\Value\ValueInterface;

/**
 * @deprecated since v6.9 and will be removed in Pimcore 10.
 */
interface ValueFactoryInterface
{
    public function build(\stdClass $configElement, $context = null): ValueInterface;
}
