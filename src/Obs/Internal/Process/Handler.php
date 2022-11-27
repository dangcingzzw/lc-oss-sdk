<?php

/**
 * Copyright 2019 Langchao Technologies Co.,Ltd.
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use
 * this file except in compliance with the License.  You may obtain a copy of the
 * License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed
 * under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations under the License.
 *
 */

namespace Obs\Internal\Process;
use Obs\ObsException;

class Handler{
    /**
     * @ActionDesc: 1.旋转rotate 2.翻转 flip:horizontal vertical
     * 3.缩放 resize,p_
     * （1）lfit：等比缩放，限制在指定长宽的矩形内的最大图片。
//    （2）mfit：等比缩放，延伸出指定长宽的矩形外的最小图片。
//    （3）fill：固定宽高，将mfit得到的图片进行居中裁剪。
//    （4）pad：固定宽高，将lfit得到的图片置于指定宽高的矩形正中，然后将空白处进行填充。
//    （5）fixed：	强制缩放到指定宽高。
     * 4.格式转换 --
     * 5.亮度 image/bright,30。
     * 6.对比度 image/contrast,50
     * 7.蜕化  image/sharpen,100。
     * 8.水印----------------
     * 9.渐进
     * 10.裁剪
     * 11.获取主色调---------------------
     * 12.获取图片的EXIF信息------------------
     * 13.多种操作合并-----------------------
     * @param $action
     * @param $params
     * @return string
     * @datetime 2022/11/25 13:32
     * @author:zhaozhiwei
     */
    public static function create($action,$params) {
        $class= "Obs\Internal\Process".'\\'.$action;
        return (new $class())->main($params);
    }
}