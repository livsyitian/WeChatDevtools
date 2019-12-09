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

class BuildNpm
{
    use CurlTrait;

    public function action($projectPath = '', $compileType = '')
    {
        return $this->send('/buildnpm', [
            strtolower('compileType') => $compileType,
            strtolower('projectPath') => $projectPath
        ]);
    }
}
