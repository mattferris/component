<?php

/**
 * component - An application component interface
 * www.bueller.ca/component
 *
 * ComponentInterface.php
 * @copyright Copyright (c) 2016 Matt Ferris
 * @author Matt Ferris <matt@bueller.ca>
 *
 * Licensed under BSD 2-clause license
 * www.bueller.ca/component/license
 */

namespace MattFerris\Component;

interface ComponentInterface
{
    /**
     * Perform any component initialization tasks.
     */
    public function init(array $providers = []);

    /**
     * Load the component.
     */
    public function load();
}
