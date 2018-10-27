<?php

namespace app\index\model;

use think\Model;

class Im extends Model
{
    public function GetCheckSum()
    {
        $AppKey = "0104486e4ae91ad22b5c84b5786afbe5";
        $Nonce = mt_rand(10000000,99999999);
        $CurTime = time();
        $CheckSum = bin2hex(sha1($AppKey.$Nonce.$CurTime));

        return $CheckSum;
    }

    public function getImId()
    {
        $AppKey = "0104486e4ae91ad22b5c84b5786afbe5";
        $AppSecret = "78d9e9be9870";
        $Nonce = mt_rand(10000000,99999999);
        $CurTime = time();
//        return $AppSecret.$Nonce.$CurTime;
        $CheckSum =sha1($AppSecret.$Nonce.$CurTime);
//        return $CheckSum;
//        $Headers['AppKey'] = $AppKey;
//        $Headers['Nonce'] = $Nonce;
//        $Headers['CurTime'] = $CurTime;
//        $Headers['CheckSum'] = $CheckSum;
//        $Params['accid'] = 'abcde';
//        $Headers['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
        $Headers = [
            "AppKey:".$AppKey,"Nonce:".$Nonce,"CurTime:".$CurTime,"CheckSum:".$CheckSum,"Content-Type:application/x-www-form-urlencoded;charset=utf-8"
        ];
        $Params['accid'] = 'abcde';
//        $Headers = json_encode($Headers);
        $acc_id = 'abcde';
        $returnArr = curlHttp("https://api.netease.im/nimserver/user/create.action",$Params,'POST',$Headers);
        return $returnArr;

    }
}