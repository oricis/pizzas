<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\RedirectResponse;

class WebController
{
    protected string $messageOk = 'La acción realizada con éxito';
    protected string $messageErr = 'La acción ha fallado';


    protected function goBack(
        bool $success = false,
        array $typeAndMessage = []
    ): RedirectResponse
    {
        if ($typeAndMessage
            && isset($typeAndMessage['message'])
        ) {
            $type = (isset($typeAndMessage['type']))
                ? $typeAndMessage['type']
                : 'warning';

            return redirect()
                ->back()
                ->with($type, $typeAndMessage['message']);
        }

        return ($success)
            ? redirect()
                ->back()
                ->with('success', $this->messageOk)
            : redirect()
                ->back()
                ->with('error', $this->messageErr);
    }

    protected function goTo(
        string $route = 'home',
        bool $success = false,
        array $typeAndMessage = []
    ): RedirectResponse
    {
        if ($typeAndMessage
            && isset($typeAndMessage['message'])
        ) {
            $type = (isset($typeAndMessage['type']))
                ? $typeAndMessage['type']
                : 'warning';

            return redirect()
                ->route($route)
                ->with($type, $typeAndMessage['message']);
        }

        return ($success)
            ? redirect()
                ->route($route)
                ->with('success', $this->messageOk)
            : redirect()
                ->route($route)
                ->with('error', $this->messageErr);
    }
}
