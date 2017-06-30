<?php
// +----------------------------------------------------------------------
// | TPR [ Design For Api Develop ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2017 http://hanxv.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: axios <axioscros@aliyun.com>
// +----------------------------------------------------------------------

namespace example\index\middleware;

use example\index\service\File;
use think\Controller;
use think\Log;

class Index extends Controller {
    public function after(){
        Log::record('test'.time(),'debug');
        File::save(ROOT_PATH.'test.txt',time());
    }
}