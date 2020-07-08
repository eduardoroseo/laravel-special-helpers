<?php
/**
 * Created by Visual Studio Code.
 * User: Eduardo Roseo
 * Date: 08/07/2020
 * Time: 11:15
 */

if (!function_exists('artisanBackgroundTask')) {

    /**
     * @param string $signature
     */
    function artisanBackgroundTask($signature)
    {
        $base_path = base_path('artisan');

        return exec(
            "nohup php {$base_path} {$signature} > /dev/null 2>&1 & echo $!");
    }

}
