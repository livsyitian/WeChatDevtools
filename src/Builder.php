<?php
/**
 * WeChat - Devtools by BaoJia Li
 *
 * @package     WeChatDevtools
 *
 * @author      BaoJia Li
 * @User        king/QQ:995265288
 * @Date        2019/12/6 5:25 PM
 * @link        https://gitee.com/LiBaoJia
 */

namespace BaoJiaLi\WeChatDevtools;


use BaoJiaLi\WeChatDevtools\Operates\AutoPreview;
use BaoJiaLi\WeChatDevtools\Operates\BuildNpm;
use BaoJiaLi\WeChatDevtools\Operates\Close;
use BaoJiaLi\WeChatDevtools\Operates\Login;
use BaoJiaLi\WeChatDevtools\Operates\Open;
use BaoJiaLi\WeChatDevtools\Operates\Preview;
use BaoJiaLi\WeChatDevtools\Operates\Quit;
use BaoJiaLi\WeChatDevtools\Operates\Upload;

class Builder
{
    /*
     * 打开工具或指定项目
     */
    public function open($projectPath = '')
    {
        return (new Open())->action($projectPath);
    }

    /*
     * 登录
     */
    public function login($format = '', $qrOutput = '', $resultOutput = '')
    {
        return (new Login())->action($format, $qrOutput, $resultOutput);
    }

    /*
     * 预览
     */
    public function preview($projectPath = '', $format = '', $qrOutput = '', $infoOutput = '', $compileCondition = '')
    {
        return (new Preview())->action($projectPath, $format, $qrOutput, $infoOutput, $compileCondition);
    }

    /*
     * 上传
     */
    public function upload($projectPath = '', $version = '', $desc = '', $infoOutput = '')
    {
        return (new Upload())->action($projectPath, $version, $desc, $infoOutput);
    }

    /*
     * 构建 npm
     */
    public function buildNpm($projectPath = '', $compileType = '')
    {
        return (new BuildNpm())->action($projectPath, $compileType);
    }

    /*
     * 自动预览
     */
    public function autoPreview($projectPath = '', $infoOutput = '')
    {
        return (new AutoPreview())->action($projectPath, $infoOutput);
    }

    /*
     *
     */
    public function close($projectPath = '')
    {
        return (new Close())->action($projectPath);
    }

    /*
     *
     */
    public function quit()
    {
        return (new Quit())->action();
    }

}
