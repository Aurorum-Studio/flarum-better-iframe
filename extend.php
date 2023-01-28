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
           '[iframe={URL} width={INT1} height={INT2} frameborder={INT3} marginwidth={INT4} marginheight={INT5} scrolling={SIMPLETEXT2} allowtransparency={SIMPLETEXT1}]',
           '<div class="iframe">
           <iframe 
             src="{URL}"
             width="{INT1}"
             height="{INT2}"
             frameborder="{INT3}"
             marginwidth="{INT4}"
             marginheight="{INT5}"
             vspace="0"
             hspace="0"
             allowtransparency="{SIMPLETEXT1}"
             scrolling="{SIMPLETEXT2}"
             allowfullscreen="true"
           >
           </iframe>
         </div>'
        );
    })
];
