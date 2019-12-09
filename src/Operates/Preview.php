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

namespace BaoJiaLi\WeChatDevtools\Operates;


use BaoJiaLi\WeChatDevtools\Traits\CurlTrait;

class Preview
{
    use CurlTrait;

    public function action($projectPath = '', $format = '', $qrOutput = '', $infoOutput = '', $compileCondition = '')
    {
        return $this->send('/preview', [
            strtolower('format')           => $format,
            strtolower('qrOutput')         => $qrOutput,
            strtolower('infoOutput')       => $infoOutput,
            strtolower('projectPath')      => $projectPath,
            strtolower('compileCondition') => $compileCondition
        ]);
    }

}
