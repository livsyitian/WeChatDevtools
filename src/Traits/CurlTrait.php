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


use Ixudra\Curl\Builder;
use Ixudra\Curl\Facades\Curl;

trait CurlTrait
{
    use ParamsTrait, ConfigTrait;

    private $routePath;

    public function send($routePath, $params = [])
    {
        $this->setRoute($routePath);
        $this->addArrayParams($params);
        /**
         * @see Builder
         */
        return Curl::to($this->url())->withData($this->getParams())->get();
    }

    /**
     * WeChat devtools request action
     *
     * @param string $routePath
     */
    private function setRoute($routePath)
    {
        $this->routePath = $routePath;
    }

    /**
     * WeChat devtools complete http url
     *
     * @return string
     */
    private function url()
    {
        return "{$this->configUrl()}:{$this->configPort()}{$this->routePath}";
    }

    /**
     * WeChat devtools http url, default 'http://127.0.0.1'
     *
     * @return string
     */
    private function configUrl()
    {
        return $this->getConfig('devtools_http_url', "http://127.0.0.1");
    }

    /**
     * WeChat devtools port number
     *
     * @return string
     */
    private function configPort()
    {
        try{
            $port = file_get_contents($this->getConfig('devtools_port_path'));
        } catch (\Exception $exception) {
            $port = '';
        }
        return $port;
    }
}
