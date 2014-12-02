<?php

/*
 * This file is part of the WeCMSUserBundle package.
*
* (c) Wepala LLC 
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace WeCMS\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Akeem Philbert <akeem.philbert@wepala.com>
 */
class WeCMSAdminBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}
