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
           '[iframe={URL}]',
           '<div class="iframe">
           <iframe 
             src="{URL}"
             width="100%"
             height="600"
             frameborder="0"
             marginwidth="0"
             marginheight="0"
             vspace="0"
             hspace="0"
             allowtransparency="true"
             scrolling="true"
             allowfullscreen="true"
           >
           </iframe>
         </div>'
        );
    })
];
