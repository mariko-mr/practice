<?php

require_once __DIR__ . '/../lib/mysqli.php';
require_once __DIR__ . '/../lib/escape.php';

function listCompanies($link)
{
    $sql =  <<< EOT
SELECT name,establishment_date,founder
FROM companies
EOT;

    $results = mysqli_query($link, $sql);

    $companies = [];
    // mysqli_fetch_assoc() 結果セットから1行ずつデータを取得する
    while ($company = mysqli_fetch_assoc($results)) {
        $companies[] = $company;
    }

    mysqli_free_result($results);

    return $companies;
}

$link = dbConnect();
$companies = listCompanies($link);

$title = '会社情報の一覧';
$content = __DIR__ . '/views/index.php';

include __DIR__ . '/views/layout.php';
