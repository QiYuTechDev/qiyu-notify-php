<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiDdLinkUniqueId extends ApiBase
{


    /**
     * 发送通知消息
     * @param $path_args = ["unique_id" => "xxx"]
     * @param $query_args = ["text" => "xxx""url" => "xxx"]
     */
    public static function do_get(
        $path_args
        , $query_args
    ): ?array
    {
        $method = "GET";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/dd/link/{unique_id}";
        $header = [];
        $body_args = [];
        $bearer = "";
        $ret =
            self::doSendRequest($method, $base_url, $path_url, $path_args, $query_args, $header, $body_args, $bearer);
        if (empty($ret)) {
            return null;
        }
        return $ret;
    }


}

