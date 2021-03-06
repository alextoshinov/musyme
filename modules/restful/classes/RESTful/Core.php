<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package     RESTful
 * @author      Michał Musiał
 * @copyright   (c) 2012 Michał Musiał
 */
class RESTful_Core
{
    /**
     * PHP error handler, converts all errors into ErrorExceptions. This handler
     * doesn't respect error_reporting settings.
     *
     * @throws  ErrorException
     * @return  TRUE
     */
    const VERSION = '2.0.0-beta3';

    public static function error_handler($code, $error, $file = NULL, $line = NULL)
    {
        if (error_reporting() & $code)
        {
            // This error is not suppressed by current error reporting settings
            // Convert the error into an ErrorException
            throw new ErrorException($error, 500, 0, $file, $line);
        }

        // Do not execute the PHP error handler
        return TRUE;
    }
}
