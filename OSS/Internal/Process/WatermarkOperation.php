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

class WatermarkOperation{
    public static function main($params) {
        $instr_name= 'watermark';
        $fileName=$params['body']['file'];
        $instruction=$params['body']['instruction'];
        if(!isset($instruction['type'])){
            throw new ObsException();
        }
        $type=$instruction['type'];
        $instruction['content']=base64_encode($instruction['content']);
        if($type)
        return $fileName.'?x-oss-process=image/'.$instr_name.','.$type.'_'.$instruction['content'].',type_'.$instruction['font']
            .',color_'.$instruction['color'].',size_'.$instruction['size'].',g_'.$instruction['position']
            .',x_'.$instruction['x'].',y_'.$instruction['y'].',t_'.$instruction['transparency'];
    }
}