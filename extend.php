<?php

/*
 * This file is part of Aurorum-Studio/flarum-better-iframe.
 *
 * Copyright © 2022 Aurorum.co.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace AurorumStudio\Iframe;

use Flarum\Extend;

return [
    (new Extend\Formatter)
        ->configure(function (\s9e\TextFormatter\Configurator $configurator) {
            $configurator->HTMLElements->allowUnsafeElement('iframe');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'style');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'src');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'scrolling');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'allow');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'allowpaymentrequest');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'credentialless');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'csp');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'height');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'loading');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'name');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'referrerpolicy');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'sandbox');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'width');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'align');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'frameborder');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'longdesc');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'marginheight');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'marginwidth');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'scrolling');
        }),
 
];
