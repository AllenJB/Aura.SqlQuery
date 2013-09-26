<?php
/**
 *
 * This file is part of Aura for PHP.
 *
 * @package Aura.Sql
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Sql\Query\Common;

use Aura\Sql\Query\Traits;

/**
 *
 * An object for UPDATE queries.
 *
 * @package Aura.Sql
 *
 */
class Update extends AbstractCommon
{
    use Traits\UpdateTrait;
}