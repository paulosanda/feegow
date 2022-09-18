<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        $message = $e->getMessage();
        $errors = method_exists($e, 'errors') ? $e->errors() : [];
        if (method_exists($e, 'getStatusCode')) {
            $status_code = $e->getStatusCode();
        } else {
            $status_code = $e->status ?? array_search(get_class($e), $this->status);
        }

        if (!$status_code) {
            $status_code = Response::HTTP_INTERNAL_SERVER_ERROR;
        }

        $data = array_filter(compact('message', 'errors')) ?: null;

        return new JsonResponse($data, $status_code);
    }
}
