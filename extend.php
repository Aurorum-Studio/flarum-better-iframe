<?php

/*
 * This file is part of Aurorum-Studio/flarum-better-iframe.
 *
 * Copyright © 2022 Aurorum.co.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Aurorum-Studio\Iframe;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [ 
  (new Extend\Frontend('forum'))
  ->css(__DIR__.'/less/forum.less'),
    (new Extend\Formatter)
    ->configure(function (Configurator $config) {
         $config->BBCodes->addCustom(
           '[iframe={URL}{width}{height}{fr}{ma}{mh}{scro}]',
           '<div class="iframe">
           <iframe 
             src="{URL}"
             width="{width}"
             height="{height}"
             frameborder="{fr}"
             marginwidth="{ma}"
             marginheight="{mh}"
             vspace="0"
             hspace="0"
             allowtransparency="true"
             scrolling="{scro}"
             allowfullscreen="true"
           >
           </iframe>
         </div>'
        );
    })
];