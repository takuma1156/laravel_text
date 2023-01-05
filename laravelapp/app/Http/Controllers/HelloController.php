<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return <<<EOF

<html>
<head>
<title>Hello</title>
<style>
body {font-size:16; color:#999;}
<h1> font-size:100</h1>
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これはHelloコントローラーのindexアクションです</p>
</body>
</html>
EOF;

    }
}
