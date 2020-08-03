<?php

/*
 * This file is part of philipsc/flarum-ext-player.
 *
 * Copyright (c) 2020 Jason Chen.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
               '[weplay src={URL?}][/weplay]',
               '<span style="display:inline-block;width:100%"><span style="display:block;overflow:hidden;position:relative;padding-bottom:56.25%"><iframe allowfullscreen="" loading="lazy" scrolling="no" <iframe src="https://dev.wedog.cc/flarum/DPlayer/?url={URL}" style="border:0;height:100%;left:0;position:absolute;width:100%"></iframe></span></span>'
            );
        })
];
