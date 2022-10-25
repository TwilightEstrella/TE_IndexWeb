<?PHP 
/*
 * TwilightEstrella - TE_WebApi
 * 隶属于 TwilightEstrella 团队
 * 如未授权，禁止商用
 * 
 * API - 检查网站是否在线
 */

// 前置组件
include($_SERVER['DOCUMENT_ROOT'].'/include.php');

// 定义变量
$data_ssid = htmlspecialchars($_GET['ssid']);

// 输出函数
if (!empty($data_ssid) and $data_ssid == $sql_ssid) {
    // 输出编译
    $data = array(
        'output'=>'ONLINE',
        'code'=>200,
        'info'=>'API项目运行正常',
        'data'=>array(
            'online_index_web'=>'ONLINE',
            'online_api'=>'ONLINE',
        ),
    );
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
} else {
    // 输出编译
    $data = array(
        'output'=>'ONLINE',
        'code'=>200,
        'info'=>'API项目运行正常',
    );
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
}