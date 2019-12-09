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

class Login
{
    use CurlTrait;

    public function action($format = 'image', $qrOutput = '', $resultOutput = '')
    {
        return $this->send('/login', [
            strtolower('format')       => $this->format($format),
            strtolower('qrOutput')     => $qrOutput,
            strtolower('resultOutput') => $this->resultOutput($resultOutput)
        ]);
    }

    /**
     * @param string $format
     * @return string
     */
    private function format($format)
    {
        return in_array($format, $this->defaultFormat()) ? $format : 'image';
    }

    /**
     * @param string $resultOutput
     * @return string
     */
    private function resultOutput($resultOutput)
    {
        !$resultOutput && $resultOutput = $this->getConfig('devtools_login_output');

        return $resultOutput;
    }

    /**
     * @return array
     */
    private function defaultFormat()
    {
        return ['image', 'base64', 'terminal'];
    }
}
