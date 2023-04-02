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
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'allowfullscreen');
            $configurator->HTMLElements->allowUnsafeAttribute('iframe', 'allow');
        }),
 
];
