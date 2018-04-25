<?php  
/* 
 * 本例相关介绍及文档 
 * 接口官网 https://www.nowapi.com 
 * 接口文档 https://www.nowapi.com/api/finance.rate 
 */  
header("Content-Type:text/html;charset=UTF-8");  
function nowapi_call($a_parm){  
    if(!is_array($a_parm)){  
        return false;  
    }  
    //combinations  
    $a_parm['format']=empty($a_parm['format'])?'json':$a_parm['format'];  
    $apiurl=empty($a_parm['apiurl'])?'http://api.k780.com:88/?':$a_parm['apiurl'].'/?';  
    unset($a_parm['apiurl']);  
    foreach($a_parm as $k=>$v){  
        $apiurl.=$k.'='.$v.'&';  
    }  
    $apiurl=substr($apiurl,0,-1);  
    if(!$callapi=file_get_contents($apiurl)){  
        return false;  
    }  
    //format  
    if($a_parm['format']=='base64'){  
        $a_cdata=unserialize(base64_decode($callapi));  
    }elseif($a_parm['format']=='json'){  
        if(!$a_cdata=json_decode($callapi,true)){  
            return false;  
        }  
    }else{  
        return false;  
    }  
    //array  
    if($a_cdata['success']!='1'){  
        echo $a_cdata['msgid'].' '.$a_cdata['msg'];  
        return false;  
    }  
    return $a_cdata['result'];  
}  
  
$nowapi_parm['app']='finance.rate';  
$nowapi_parm['scur']='USD';  
$nowapi_parm['tcur']='CNY';  
$nowapi_parm['appkey']='10003';  
$nowapi_parm['sign']='b59bc3ef6191eb9f747dd4e83c99f2a4';  
$nowapi_parm['format']='json';  
if(!$result=nowapi_call($nowapi_parm)){  
    die('fail');  
}  
//var_dump($result);  
//print_r($result);  
echo "   scur : ".$result['scur']."<br>";  
echo "   tcur : ".$result['tcur']."<br>";  
echo " ratenm : ".$result['ratenm']."<br>";  
echo "   rate : ".$result['rate']."<br>";  
echo " update : ".$result['update']."<br>";  
?>