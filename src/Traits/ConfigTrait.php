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


trait ConfigTrait
{
    /**
     * @var array
     */
    private $config;

    /**
     * @param string $key
     * @param string $default
     * @return string
     */
    public function getConfig($key, $default = '')
    {
        !isset($this->config) && $this->config = $this->_getConfig();

        return isset($this->config[$key]) ? $this->config[$key] : $default;
    }

    /**
     * @return array
     */
    private function _getConfig()
    {
        return require_once __DIR__ . '../Config/config.php';
    }

}
