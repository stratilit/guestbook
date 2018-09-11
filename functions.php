<?php
function readOfDataGust($psth, $size = 10000)
{
    if (file_exists($psth) && (filesize($psth) <= $size)) {
        return  file($psth, FILE_IGNORE_NEW_LINES);
    } else {
        return false;
    }

}

assert('<?php' == (readOfDataGust('rtest.txt'))[0]);
assert(null == readOfDataGust('rtest.txt', 2));
assert(null == readOfDataGust('rtest1.txt'));
