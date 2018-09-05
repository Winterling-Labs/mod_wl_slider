<?php
/**
 * @package     mod_wl-slider
 * @author      Thomas Winterling
 * @email       info@winterling-labs.com
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<div id="wl-slider">
    <ul>
        <?php

        $folder = "images/wl_images";

        for($i = 0; $i < $number; $i++){
            echo "<li class=\"image\" style=\"background-image: url('$folder/$files[$i]')\"></li>";
        }

        ?>

    </ul>
    <div id="wl-scrollbar"></div>
</div>