<?php 
header('Content-disposition: attachment; filename=image.jpg');
header('Content-type: image/jpeg');
readfile('/server/path/to/image.jpg');

function save_image($inPath,$outPath)
{ //Download images from remote server
    $in=    fopen($inPath, "rb");
    $out=   fopen($outPath, "wb");
    while ($chunk = fread($in,8192))
    {
        fwrite($out, $chunk, 8192);
    }
    fclose($in);
    fclose($out);
}

save_image('http://hks-intlgroup.com/images/logo.png','image.jpg');

echo "Hai";

echo "sdfsdf";
echo "New Merge";