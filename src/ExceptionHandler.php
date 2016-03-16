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
        $url_handler = "subl://open?url=";
        $local_path = "/Users/jordanejouffroy/Projects/minetop";
        $js = "
            <script>
                var reg = new RegExp('[ ]+', 'g');
                [].forEach.call(document.querySelectorAll('li a'), function(el) {
                    el.addEventListener('click', function() {
                        if (el.title.indexOf('" . base_path() . "') > -1) {
                            parts = el.title.split(reg);
                        } else {
                            parts = el.innerHTML.split(reg);
                        }

                        console.log(parts);

                        var file_path = parts[0].replace('" . base_path() . "', '" . $local_path . "');
                        var line = parts[2];
                        var url_handler = '" . $url_handler ."' + file_path + '&line=' + line;
                        
                        window.location.href = url_handler;
                        
                    }, false);
                });
            </script>
        ";

        $response = $content->original . $js;

        return response($response);
    }
}
