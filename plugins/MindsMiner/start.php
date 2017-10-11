<?php
/**
 * MindsMiner
 * @author Minds
 */

namespace Minds\Plugin\MindsMiner;

use Minds\Core;
use Minds\Components;
use Minds\Api;

class start extends Components\Plugin
{

    public function init()
    {

        //initialise our first api
        Api\Routes::add('v1/mindsminer', 'Minds\\Plugin\\MindsMiner\\Controllers\\api\\v1\\MindsMiner');

    }

}
