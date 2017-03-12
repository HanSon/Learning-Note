<?php

namespace Hanson\Digger;

use Closure;

class Digger
{
    protected $config = [
        'interval' => 0,
        'timeout' => 5,
        'maxTry' => 0,
        'core' => 1,
        'url' => null
    ];

    protected $listUrlFunc;

    protected $contentUrlFunc;

    const AGENT_PC = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36";
    const AGENT_IOS = "Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_3 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13G34 Safari/601.1";
    const AGENT_ANDROID = "Mozilla/5.0 (Linux; U; Android 6.0.1;zh_cn; Le X820 Build/FEXCNFN5801507014S) AppleWebKit/537.36 (KHTML, like Gecko)Version/4.0 Chrome/49.0.0.0 Mobile Safari/537.36 EUI Browser/5.8.015S";

    public function __construct(array $config)
    {
        $this->config = array_merge($config, $this->config);
    }

    public function start()
    {
        
    }

    public function setListUrlFunc(Closure $closure)
    {
        if(!is_callable($closure)){
            throw new \Exception('closure is not callable in setListUrlFunc function!');
        }

        $this->listUrlFunc = $closure;
    }

    public function setContentUrlFunc(Closure $closure)
    {
        if(!is_callable($closure)){
            throw new \Exception('closure is not callable in setContentUrlFunc function!');
        }

        $this->contentUrlFunc = $closure;
    }
}