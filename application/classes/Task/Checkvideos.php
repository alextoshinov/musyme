<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Task class.
 *
 * @package    Task
 * @category   Task
 * @author     Alex Toshinov
 * @copyright  (c) 2015 
 * @license    http://kohanaframework.org/license
 */
class Task_Checkvideos extends Minion_Task 
{
    protected $_options = array(
        'foo' => 'bar',
        'bar' => NULL,
    );
    //
    protected function _execute(array $params)
    {
        Minion_CLI::write('Change status videos!');
        $video = Model_Links::updatePublish();
        //
        if($video) 
        {
            $message = "OK";
        } else {
            $message = "Error";
        }
        Log::instance()->add(Log::INFO,"Update videos task are $message"); 
        Log::instance()->write();
    }
}



