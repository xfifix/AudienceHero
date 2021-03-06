<?php

/*
 * This file is part of the AudienceHero project.
 *
 * (c) Marc Weistroff <marc@weistroff.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace AudienceHero\Bundle\CoreBundle\Bridge\Sylius\Mailer\Model;

use Sylius\Component\Mailer\Model\EmailInterface;

/**
 * TransactionalEmailInterface.
 *
 * @author Marc Weistroff <marc@weistroff.net>
 */
interface TransactionalEmailInterface extends EmailInterface
{
}
