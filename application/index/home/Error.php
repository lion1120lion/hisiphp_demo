<?php
// +----------------------------------------------------------------------
// | HisiPHP框架[基于ThinkPHP5.1开发]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2021 http://www.hisiphp.com
// +----------------------------------------------------------------------
// | HisiPHP承诺基础框架永久免费开源，您可用于学习和商用，但必须保留软件版权信息。
// +----------------------------------------------------------------------
// | Author: 橘子俊 <364666827@qq.com>，开发者QQ群：50304283
// +----------------------------------------------------------------------
namespace app\index\home;
use app\common\controller\Common;

class Error extends Common
{
    public function _empty()
    {
        return $this->error('这个模块是留给你自由发挥的<br>您也可以在<a href="/admin.php">后台</a>指定其他模块为默认访问首页<br>路径：后台-系统-系统扩展-本地模块-设置默认模块', '', '', 100);
    }
}
