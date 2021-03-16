<?php


namespace Helpers;


class ResponseHelper
{

    /**
     * @param $message
     * @param $data
     * @return array
     */
    public static function created($message, $data): array
    {
       return [
           'code' => 201,
           'success' => true,
           'params' => [
               'message' => $message,
               $data
           ],
       ];
    }
}