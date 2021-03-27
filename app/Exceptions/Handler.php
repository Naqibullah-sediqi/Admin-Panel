<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Redirect;
Use Session;
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
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($exception instanceof PostTooLargeException){
             //return response('File too large',422);
             // return response()->view('Backend/Home/Dashboard');
             // return  Redirect::back()->with('error_code', 5)->withInput();
             // Session::flash('Success','Files are to large');
             // return  Redirect::back()->withErrors('too large file');

            Session::flash('file_size','File Size is too big ,Try again');
            return  Redirect::back()->with('file_error', 5)->withInput();
          // return \Illuminate\Support\Facades\Redirect::back()->withErrors('Warning','Too Long file '); 
        }
        return parent::render($request, $exception);
    }
   
}
