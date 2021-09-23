<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
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
            // 3.2 Render json everytime an exception happens

        });
    }

    // 4.3 Render
    public function render($request, Throwable $exception){
        if ($exception instanceof ValidationException){
            return response(['errors'=> $exception->errors()], 400);
        }
        error_log('code:' . $exception->getCode());

    //  3.2 Render json everytime an exception happens - if code is not return and the response itself returns an error a default of 400 will be returned
    return response(['error'=> $exception->getMessage()], $exception->getCode() ? $exception->getCode() : 400);
    }
}
