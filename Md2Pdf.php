<?php
require __DIR__ . '/vendor/autoload.php';

if (empty($argv[1]) && empty($argv[2])) {
    echo "Md2Pdf.php\n";
    echo "    [arg1] => Output file name\n";
    echo "    [arg2] => Name of document\n";
    echo "    [arg*] => Md file for convertion\n";
    
    exit;
}

$fileName = $argv[1] . '.pdf';
$html = file_get_contents('assets/template.html');
$css = file_get_contents('assets/github-markdown.css');
$Parsedown = new Parsedown();

foreach($argv as $key => $item) {
    if ($key == 1) {
        $html .= $Parsedown->text('# ' . $argv[2]);
    } else if ($key > 2) {
        $file = file_get_contents($item) . "\n";
        $html .= $Parsedown->text($file);
    }
}

$html .= "</div></body></html>";

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML($html, 2);
$datas = $mpdf->Output($fileName, 'S');

file_put_contents($fileName, $datas);
return 0;