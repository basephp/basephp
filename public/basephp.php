<?php

$success = true;

error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', '1');

$requirements = [
    'PHP >= 7.0.0' => version_compare(PHP_VERSION, '7.0.0', '>=')
        ? ['s' => true, 't' => PHP_VERSION. ' ✔']
        : ['s' => false, 't' => PHP_VERSION.' ✘'],
    // 'PHP Extension (OpenSSL)' => extension_loaded('openssl'),
    // 'PHP Extension (Mbstring)' => extension_loaded('mbstring'),
    // 'PHP Extension (ZipArchive)' => class_exists('ZipArchive')
];

$recommendations = [
    /*'Mod Rewrite' => hasModRewrite('mod_rewrite')
        ? ['s' => true, 't' => 'Pass']
        : ['s' => false, 't' => 'Unknown*'],*/
    /*'Memory Limit at least 256M' => ini_get('memory_limit') >= 256
        ? ['s' => true, 't' => ini_get('memory_limit')]
        : ['s' => false, 't' => ini_get('memory_limit')],*/
    'Timezone Set' => ini_get('date.timezone') !== ''
];

foreach ($requirements as $item) {
    if (! $item) {
        $success = false;
        break;
    }
}


?>
<!doctype html>
<head>
    <meta charset="utf-8" />
    <title>BasePHP - Installation</title>
    <link href="//fonts.googleapis.com/css?family=Lato:700,400,400italic,700italic" rel="stylesheet" />
    <style>
        body { width: 555px; margin: 0 auto; font: normal 14px/1.42 "Lato", sans-serif;     background: #344f65; padding-top: 75px; }
        .logo { width: 100px; display: block; fill: rgba(0, 0, 0, .3); margin: 0 auto 50px; }
        .card { background: white; border-radius: 2px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.24); margin: 0 auto; }
        h1 { font: normal 21px/1.1 "Lato", sans-serif; padding: 15px 30px; margin: 0; }
        table { width: 100%; border-collapse: collapse; }
        tr { border-top: 1px solid #e0e0e0; }
        td { padding: 10px 30px; }
        td.result { text-align: right; }
        th { text-align: left; padding: 30px 30px 10px 30px; }
        th small { display: block; font-weight: normal; color: #777; }
        p { text-align: center; }
        .fail { color: #E75650; font-weight: bold; }
        .asterisk { margin: 20px auto 0; font-size: 11px; }
        .install { font-size: 20px; text-decoration: none; display: block; margin-top: 20px; padding: 10px 20px; background: #3aa3e3; color: white; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.24); }
        .fail-message { font-size: 20px; background: #E75650; color: white; padding: 10px 20px; border-radius: 3px; }
        code {color: #de1515;}
    </style>
</head>
<body>

    <div class="logo">

    </div>

    <div class="card">
        <h1>BasePHP - Installation</h1>
        <table>

            <tr>
                <td colspan="2">
                    You're seeing this message because the <code>/vendor</code> directory is missing and you need to run <code>composer install</code> to complete the installation.
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    If you are unsure how to install the php framework dependencies, please visit <a href="http://basephp.org">basephp.org</a> for more details.
                </td>
            </tr>

            <tr>
                <th colspan="2">
                    Server Requirements
                </th>
            </tr>
            <?php foreach ($requirements as $name => $result): ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td class="result">
                        <?php if (is_array($result)): ?>
                            <?php if ($result['s']): ?>
                                <?= $result['t']; ?>
                            <?php else: ?>
                                <span class="fail"><?= $result['t']; ?></span>
                            <?php endif; ?>
                        <?php else: ?>
                            <?= ($result) ? '✔' : '<span class="fail">✘</span>' ?>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <th colspan="2">
                    Recommendations
                </th>
            </tr>
            <?php foreach ($recommendations as $name => $result): ?>
                <tr>
                    <td><?= $name ?></td>
                    <td class="result">
                        <?php if (is_array($result)): ?>
                            <?php if ($result['s']): ?>
                                <?= $result['t']; ?>
                            <?php else: ?>
                                <span class="fail"><?= $result['t']; ?></span>
                            <?php endif; ?>
                        <?php else: ?>
                            <?= ($result) ? '✔' : '<span class="fail">✘</span>' ?>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <?php if ($success): ?>
        <p><a href="./" class="install">Ready? Reload &rarr;</a></p>
    <?php else: ?>
        <p class="fail-message">There was a problem!</p>
    <?php endif; ?>

    <?php /*if (!$recommendations['Mod Rewrite']): ?>
        <p class="asterisk">* mod_rewrite can't be detected when PHP is running as CGI</p>
    <?php endif;*/ ?>

</body>
</html>
