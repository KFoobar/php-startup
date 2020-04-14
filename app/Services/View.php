<?php

namespace App\Services;

use Philo\Blade\Blade;

class View
{
    /**
     * Renders HTML for given Blade file.
     *
     * @param string $view
     * @param array  $data
     *
     * @return string
     */
    public function render(string $view, array $data = [])
    {
        $blade = new Blade(
            __DIR__ . '/../../resources/views',
            __DIR__ . '/../../storage/cache/views'
        );

        return $blade->view()->make($view, $data)->render();
    }
}
