<?php
/**
 *Test
 * @author tan bing
 * @date 2021-04-20 16:36
 */


namespace Tab\Test;

use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class Test
{
    /**
     * @var SessionManager
     */
    protected $session;

    /**
     * @var Repository
     */
    protected $config;

    /**
     * test constructor.
     *
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($msg = '')
    {
        $config_arr = $this->config->get('test.options');
        return $msg.' <strong>from your custom develop package!</strong>>';
    }
}