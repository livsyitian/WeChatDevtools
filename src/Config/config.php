<?php

return [

    /*
    |--------------------------------------------------------------------------
    | WeChat applet project path
    |--------------------------------------------------------------------------
    |
    | Store WeChat Applet Code Path
    |
    */

    'applet_path' => '***',

    /*
    |--------------------------------------------------------------------------
    | WeChat devtools installation path
    |--------------------------------------------------------------------------
    |
    | macOS: <Installation Path>/Contents/MacOS/cli
    |
    | Windows: <Installation Path>/cli.bat
    |
    */

    'devtools_path' => '/Applications/wechatwebdevtools.app/Contents/MacOS/cli',

    /*
    |--------------------------------------------------------------------------
    | WeChat devtools port number file location
    |--------------------------------------------------------------------------
    |
    | macOS : ~/Library/Application Support/微信开发者工具/Default/.ide
    |
    | Windows : ~/AppData/Local/微信开发者工具/User Data/Default/.ide

    */

    'devtools_port_path' => '~/Library/Application Support/微信开发者工具/Default/.ide',

    /*
    |--------------------------------------------------------------------------
    | WeChat devtools default http url
    |--------------------------------------------------------------------------
    |
    */

    'devtools_http_url' => 'http://127.0.0.1',

    /*
    |--------------------------------------------------------------------------
    | WeChat devtools default http url
    --------------------------------------------------------------------------
    |
    | Exists in the project directory by default
    |
    | Please replace the path where you want to store the login results
    |
    */

    'devtools_login_output' => __DIR__ . '/../../../devtools_login_output.txt',
];
