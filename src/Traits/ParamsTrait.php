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

namespace BaoJiaLi\WeChatDevtools\Traits;


trait ParamsTrait
{
    private $params = [];

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    public function addArrayParams(array $data)
    {
        $this->params = array_merge($this->params, $data);
    }
}
