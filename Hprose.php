<?php
/**********************************************************\
|                                                          |
|                          hprose                          |
|                                                          |
| Official WebSite: http://www.hprose.com/                 |
|                   http://www.hprose.org/                 |
|                                                          |
\**********************************************************/

/**********************************************************\
 *                                                        *
 * Hprose.php                                             *
 *                                                        *
 * hprose for php 5.3+                                    *
 *                                                        *
 * LastModified: Apr 10, 2015                             *
 * Author: Ma Bingyao <andot@hprose.com>                  *
 *                                                        *
\**********************************************************/

namespace {
    if (!extension_loaded('hprose')) {
        require('Hprose/Tags.php');
        require('Hprose/ResultMode.php');
        require('Hprose/BytesIO.php');
        require('Hprose/ClassManager.php');
        require('Hprose/Writer.php');
        require('Hprose/RawReader.php');
        require('Hprose/Reader.php');
        require('Hprose/Formatter.php');
        require('Hprose/Filter.php');
        require('Hprose/Client.php');
        require('Hprose/Service.php');

        class_alias('Hprose\\Tags', 'HproseTags');
        class_alias('Hprose\\ResultMode', 'HproseResultMode');
        class_alias('Hprose\\BytesIO', 'HproseBytesIO');
        class_alias('Hprose\\ClassManager', 'HproseClassManager');
        class_alias('Hprose\\Writer', 'HproseWriter');
        class_alias('Hprose\\RawReader', 'HproseRawReader');
        class_alias('Hprose\\Reader', 'HproseReader');
        class_alias('Hprose\\Formatter', 'HproseFormatter');
        class_alias('Hprose\\Filter', 'HproseFilter');
        class_alias('Hprose\\Client', 'HproseClient');
        class_alias('Hprose\\Service', 'HproseService');

        function hprose_serialize($var, $simple = false) {
            return HproseFormatter::serialize($var, $simple);
        }

        function hprose_unserialize($data, $simple = false) {
            return HproseFormatter::unserialize($data, $simple);
        }
    }

    require('Hprose/Http/Client.php');
    require('Hprose/Http/Service.php');
    require('Hprose/Swoole/Client.php');
    require('Hprose/Swoole/Service.php');
    require('Hprose/Swoole/Http/Service.php');
    require('Hprose/Filter/JSONRPC/ClientFilter.php');
    require('Hprose/Filter/JSONRPC/ServiceFilter.php');
    require('Hprose/Filter/XMLRPC/ClientFilter.php');
    require('Hprose/Filter/XMLRPC/ServiceFilter.php');

    class_alias('Hprose\\Http\\Client', 'HproseHttpClient');
    class_alias('Hprose\\Http\\Service', 'HproseHttpService');
    class_alias('Hprose\\Http\\Server', 'HproseHttpServer');
    class_alias('Hprose\\Swoole\\Client', 'HproseSwooleClient');
    class_alias('Hprose\\Swoole\\Service', 'HproseSwooleService');
    class_alias('Hprose\\Swoole\\Server', 'HproseSwooleServer');
    class_alias('Hprose\\Swoole\\Http\\Service', 'HproseSwooleHttpService');
    class_alias('Hprose\\Swoole\\Http\\Server', 'HproseSwooleHttpServer');
    class_alias('Hprose\\Filter\\JSONRPC\\ClientFilter', 'HproseJSONRPCClientFilter');
    class_alias('Hprose\\Filter\\JSONRPC\\ServiceFilter', 'HproseJSONRPCServiceFilter');
    class_alias('Hprose\\Filter\\XMLRPC\\ClientFilter', 'HproseXMLRPCClientFilter');
    class_alias('Hprose\\Filter\\XMLRPC\\ServiceFilter', 'HproseXMLRPCServiceFilter');
}
