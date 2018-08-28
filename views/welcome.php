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
        <h1 style="text-align:center"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="261.15" height="71.47" viewBox="0 0 261.15 71.47"><defs><style>.cls-1{fill:#d32e27;}.cls-2{fill:#231f20;}</style></defs><title>basephp2-logo-03</title><path class="cls-1" d="M34.17,0a236.34,236.34,0,0,0-27,1.25A38.31,38.31,0,0,0,.28,2.5L0,2.6v.27L2.15,39.65c.51,8.88,8.72,16.79,16.74,22.5A105.12,105.12,0,0,0,34.8,71.39l.2.08.19-.08a96.93,96.93,0,0,0,15.29-9.23c7.67-5.71,15.45-13.62,15.66-22.51l2.15-37L68,2.51a36.34,36.34,0,0,0-6.87-1.28A224.76,224.76,0,0,0,34.17,0ZM16.08,8.69H20v3.78h4.26V8.69H28v3.78h4.26V8.69H36v3.78h4.26V8.69H44v3.78h4.3V8.69h3.91V25.56H16.08Zm0,18.38H52.21l-2,3.65H18.07Zm2.23,5.16H50V56.1q-1.5,1.23-3,2.37A90.43,90.43,0,0,1,35,66a97.8,97.8,0,0,1-12.72-7.6c-1.35-1-2.69-2-4-3.08Zm15.83,9a4.12,4.12,0,0,0-4.35,3.86V55.65h8.7V45.07a4.12,4.12,0,0,0-4.35-3.86Z"/><path class="cls-2" d="M81.13,47.63V23.41a.84.84,0,0,1,.75-.92H96.35c6.24,0,8.71,2.43,8.79,7.2v.37c0,3.06-1.26,4.5-2.7,5.39,1.48.88,2.88,2.51,2.88,5.72v.33c0,4.73-2.47,7.06-8.71,7.06H82.06a.84.84,0,0,1-.93-.76A.49.49,0,0,1,81.13,47.63ZM96.46,33.42c1.92,0,3.36-.48,3.36-2.63V30.2c0-2.21-1.44-2.8-3.81-2.8H86.23v6Zm-.19,10.26c2.29,0,3.81-.51,3.81-2.73v-.59c0-2.18-1.44-2.81-3.44-2.81H86.23v6.13Z"/><path class="cls-2" d="M108.05,42.69c0-4.21,1.59-5.77,6.61-6.28l7.75-.78a1.16,1.16,0,0,0,1.19-1.13,1.41,1.41,0,0,0,0-.2c0-1.51-.66-1.95-2.58-1.95H110.63a.84.84,0,0,1-.92-.75.54.54,0,0,1,0-.18V28.73a.84.84,0,0,1,.74-.93.54.54,0,0,1,.18,0h10.49c5.32,0,7.35,1.89,7.35,6.1V47.63a.84.84,0,0,1-.74.93h-3.19a.84.84,0,0,1-.93-.76.49.49,0,0,1,0-.17V45.9c-1,1.77-2.43,2.66-5.65,2.66H115.8C110.85,48.56,108.05,46.86,108.05,42.69Zm12.26,1.47c2.43,0,3.28-.81,3.28-3.17V39.21l-8.12.82c-2,.18-2.51.74-2.51,2.18s1,1.95,2.81,1.95Z"/><path class="cls-2" d="M132.23,47.63V44.94A.84.84,0,0,1,133,44h10.34c2,0,2.8-.44,2.8-1.73s-.55-1.63-2.51-1.85l-5.68-.62c-4.62-.52-6.13-2.29-6.13-6.13,0-4,2.36-5.88,7.42-5.88h9.89a.84.84,0,0,1,.93.74.61.61,0,0,1,0,.19v2.69a.84.84,0,0,1-.74.93h-10c-1.85,0-2.7.4-2.7,1.81,0,1.21.52,1.58,2.22,1.77l5.58.63c5.16.62,6.6,2.51,6.6,6.24,0,4.17-2.32,5.76-7.75,5.76H133.15a.84.84,0,0,1-.92-.75A.54.54,0,0,1,132.23,47.63Z"/><path class="cls-2" d="M153.79,40.36V35.89c0-5.13,1.7-8.09,7.64-8.09h5.21c6,0,7.64,3,7.64,8.09v3.32a.84.84,0,0,1-.74.93H158.66v.74c0,2.54.67,3.13,2.88,3.13H171.7a.84.84,0,0,1,.92.75.54.54,0,0,1,0,.18v2.69a.84.84,0,0,1-.74.93H161.43C155.49,48.56,153.79,45.64,153.79,40.36Zm15.62-4v-1c0-2.51-.63-3.1-2.88-3.1h-5c-2.25,0-2.88.59-2.88,3.1v1Z"/><path class="cls-2" d="M177.9,47.63V23.41a.83.83,0,0,1,.73-.92h13.6c7.53,0,10.15,3.17,10.15,9.34v.81c0,6-2.62,9.2-10.15,9.2H183v5.79a.84.84,0,0,1-.74.93h-3.47a.84.84,0,0,1-.89-.78A.38.38,0,0,1,177.9,47.63ZM191.82,37c3.8,0,5.43-.81,5.43-4.36v-.77c0-3.73-1.55-4.43-5.43-4.43H183V37Z"/><path class="cls-2" d="M206.22,47.63V23.41a.83.83,0,0,1,.73-.92h3.48a.83.83,0,0,1,.92.73.61.61,0,0,1,0,.19V33.2h14V23.41a.84.84,0,0,1,.75-.92h3.5a.83.83,0,0,1,.92.73.61.61,0,0,1,0,.19V47.63a.84.84,0,0,1-.74.93h-3.5a.84.84,0,0,1-.93-.76.49.49,0,0,1,0-.17V37.74h-14v9.89a.84.84,0,0,1-.74.93h-3.47a.84.84,0,0,1-.92-.75A.54.54,0,0,1,206.22,47.63Z"/><path class="cls-2" d="M235.16,47.63V23.41a.83.83,0,0,1,.73-.92h13.6c7.53,0,10.15,3.17,10.15,9.34v.81c0,6-2.62,9.2-10.15,9.2h-9.2v5.79a.84.84,0,0,1-.74.93h-3.47a.84.84,0,0,1-.92-.75A.54.54,0,0,1,235.16,47.63ZM249.08,37c3.81,0,5.43-.81,5.43-4.36v-.77c0-3.73-1.55-4.43-5.43-4.43h-8.79V37Z"/></svg></h1>
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
