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
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/assets/forum/forum.css'),

    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
               '[weplay src={URL?}][/weplay]',
               '<span style="display:block;overflow:hidden;position:relative;padding-bottom:56.25%"><iframe src="https://dev.wedog.cc/flarum/DPlayer/?url={URL}" allowfullscreen="" scrolling="no" style="border:0;height:100%;left:0;position:absolute;width:100%"></iframe></span>'
            );
            $config->BBCodes->addCustom(
               '[audio src={URL?}][/audio]',
               '<audio class="weplayer" controls><source src="{URL}">Your browser does not support the audio element.</audio>'
            );
        })
];
