<!doctype html>
<head>
    <meta charset="utf-8" />
    <title>BasePHP - Users</title>
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
        <h1 style="text-align:center">Welcome to BasePHP</h1>
        <table>

            <tr>
                <td colspan="2" style="text-align:center">
                    This is the default welcome controller. For more information, visit <a href="http://basephp.org">basephp.org</a>.
                </td>
            </tr>

            <tr>
                <th colspan="2">
                    Benchmark
                </th>
            </tr>
			<tr>
				<td>
					Memory Used
				</td>
				<td class="result">
					{APP_MEMORY}
				</td>
			</tr>

			<tr>
				<td>
					Execution
				</td>
				<td class="result">
					{APP_TIME}
				</td>
			</tr>

        </table>
    </div>

</body>
</html>
