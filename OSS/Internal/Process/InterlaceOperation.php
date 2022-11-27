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

class InterlaceOperation{
    public static function main($params) {
        $instr_name= 'interlace';
        $fileName=$params['body']['file'];
        $instruction=$params['body']['instruction'];
        if(!isset($instruction[$instr_name])){
            throw new ObsException();
        }
        return $fileName.'?x-oss-process=image/'.$instr_name.','.$instruction[$instr_name];
    }
}