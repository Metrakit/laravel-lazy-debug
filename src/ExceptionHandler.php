<?php

namespace Metrakit\LazyDebug;

use Exception;

use Illuminate\Foundation\Exceptions\Handler;

class ExceptionHandler extends Handler
{
    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $e)
    {
        $content = parent::render($request, $e);

        $test = "<script>
            [].forEach.call(document.querySelectorAll('li a'), function(el) {
                el.addEventListener('click', function() {
                    alert('test');
                }, false);
            });
        </script>";

        $response = $content->original . $test;

        return response($response);
    }
}
