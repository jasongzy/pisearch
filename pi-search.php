<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <title>Pi Search</title>
    <link rel="stylesheet" href="https://cdnjs.loli.net/ajax/libs/mdui/1.0.1/css/mdui.min.css">
    <script src="https://cdnjs.loli.net/ajax/libs/mdui/1.0.1/js/mdui.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(":submit").click(function() {
                if (!$("#input").hasClass('mdui-textfield-invalid-html5') && $("#input").hasClass('mdui-textfield-not-empty')) {
                    $("#load").show();
                }
            });
        });
    </script>
    <style>
        .mdui-toolbar>* {
            opacity: 0.5;
        }

        .mdui-toolbar>a:hover,
        a.mdui-typo-headline,
        a.active,
        a:last-child {
            opacity: 1;
        }

        .mdui-container {
            max-width: 980px;
        }
    </style>
</head>

<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
    <header class="mdui-appbar mdui-color-theme">
        <div class="mdui-toolbar mdui-container">
            <a class="mdui-typo-headline">Pi Search</a>
            <div class="mdui-toolbar-spacer"></div>
            <a href="https://jasongzy.com" class="mdui-typo-subheading">@jasongzy</a>
            <a href="https://github.com/jasongzy/pisearch" target="_blank" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '查看 GitHub'}">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" enable-background="new 0 0 36 36" xml:space="preserve" class="mdui-icon" style="width: 24px;height:24px;">
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="M18,1.4C9,1.4,1.7,8.7,1.7,17.7c0,7.2,4.7,13.3,11.1,15.5
	c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1
	c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4
	c-0.2-0.4-0.7-2.1,0.2-4.3c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7
	c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5
	c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C34.3,8.7,27,1.4,18,1.4z"></path>
                </svg>
            </a>
        </div>
    </header>

    <div class="mdui-container">
        <div class="mdui-col-md-6 mdui-col-offset-md-3">
            <p style="text-align:center;">
                <svg t="1615908430102" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="10198" width="100" height="100">
                    <path d="M668.809 351.953c0 5.534-0.326 13.51-0.977 23.926-1.953 70.964-2.93 120.93-2.93 149.902v40.04c0 55.013 2.767 89.762 8.301 104.247 5.534 14.486 15.788 21.729 30.762 21.729 18.555 0 32.47-9.44 41.748-28.32 9.277-18.88 14.73-48.666 16.357-89.356h24.903v4.883c0 53.386-8.545 92.692-25.635 117.92-17.09 25.228-43.864 37.842-80.322 37.842-38.087 0-64.779-13.102-80.078-39.307-15.3-26.205-22.95-80.973-22.95-164.307 0-10.09 0.489-36.214 1.465-78.369 0.977-42.155 1.79-76.741 2.442-103.76-12.045-0.65-28.646-1.22-49.805-1.709-21.16-0.488-46.875-0.895-77.149-1.22 0 154.297-7.568 257.65-22.705 310.058-15.136 52.41-41.91 78.614-80.322 78.614-23.438 0-40.934-9.522-52.49-28.565-11.556-19.043-17.334-47.77-17.334-86.181v-19.043h23.926c0.65 18.229 3.906 31.494 9.765 39.794 5.86 8.301 14.974 12.452 27.344 12.452 27.344 0 46.712-20.752 58.105-62.256 11.394-41.504 17.904-123.128 19.532-244.873h-21.973c-25.065 0-44.922 4.394-59.57 13.183-14.649 8.79-23.763 21.973-27.344 39.551h-22.95c2.28-45.573 14.975-77.474 38.087-95.703 23.112-18.23 63.476-27.344 121.093-27.344 11.394 0 45.329 1.058 101.807 3.174 56.478 2.116 107.178 3.174 152.1 3.174 22.135 0 38.655-2.36 49.56-7.08 10.905-4.72 16.358-11.8 16.358-21.24v-0.977h22.949v2.93c0 34.18-7.731 58.919-23.193 74.218-15.463 15.3-40.283 22.95-74.463 22.95-6.185 0-10.987-0.082-14.405-0.244a192.755 192.755 0 0 1-10.01-0.733z" fill="#2c2c2c" p-id="10199"></path>
                    <path d="M293.978 158.138c5.627 0.514 8.445-0.75 8.265-3.849-0.232-3.977-1.57-4.539-8.115-4.538H294a0.25 0.25 0 0 0 0 0.5h0.128c6.308 0 7.405 0.46 7.615 4.067 0.157 2.686-2.354 3.812-7.72 3.322a0.25 0.25 0 1 0-0.045 0.498zM293 161.25h9.523a0.25 0.25 0 0 0 0-0.5H293a0.25 0.25 0 0 0 0 0.5z" fill="#2c2c2c" p-id="10200"></path>
                    <path d="M668.809 351.953c0 5.534-0.326 13.51-0.977 23.926-1.953 70.964-2.93 120.93-2.93 149.902v40.04c0 55.013 2.767 89.762 8.301 104.247 5.534 14.486 15.788 21.729 30.762 21.729 18.555 0 32.47-9.44 41.748-28.32 9.277-18.88 14.73-48.666 16.357-89.356h24.903v4.883c0 53.386-8.545 92.692-25.635 117.92-17.09 25.228-43.864 37.842-80.322 37.842-38.087 0-64.779-13.102-80.078-39.307-15.3-26.205-22.95-80.973-22.95-164.307 0-10.09 0.489-36.214 1.465-78.369 0.977-42.155 1.79-76.741 2.442-103.76-12.045-0.65-28.646-1.22-49.805-1.709-21.16-0.488-46.875-0.895-77.149-1.22 0 154.297-7.568 257.65-22.705 310.058-15.136 52.41-41.91 78.614-80.322 78.614-23.438 0-40.934-9.522-52.49-28.565-11.556-19.043-17.334-47.77-17.334-86.181v-19.043h23.926c0.65 18.229 3.906 31.494 9.765 39.794 5.86 8.301 14.974 12.452 27.344 12.452 27.344 0 46.712-20.752 58.105-62.256 11.394-41.504 17.904-123.128 19.532-244.873h-21.973c-25.065 0-44.922 4.394-59.57 13.183-14.649 8.79-23.763 21.973-27.344 39.551h-22.95c2.28-45.573 14.975-77.474 38.087-95.703 23.112-18.23 63.476-27.344 121.093-27.344 11.394 0 45.329 1.058 101.807 3.174 56.478 2.116 107.178 3.174 152.1 3.174 22.135 0 38.655-2.36 49.56-7.08 10.905-4.72 16.358-11.8 16.358-21.24v-0.977h22.949v2.93c0 34.18-7.731 58.919-23.193 74.218-15.463 15.3-40.283 22.95-74.463 22.95-6.185 0-10.987-0.082-14.405-0.244a192.755 192.755 0 0 1-10.01-0.733z" fill="#2c2c2c" p-id="10201"></path>
                </svg>
            <div class="mdui-typo-headline" style="text-align:center;">从 π 的前 <font color="red">10 亿</font>位中寻找你的生日！</div>
            </p>
            <form action="" method="post">
                <div id="input" class="mdui-textfield mdui-textfield-floating-label">
                    <i class="mdui-icon material-icons">date_range</i>
                    <label class="mdui-textfield-label">请输入生日（格式如：20210101）</label>
                    <input name="date" class="mdui-textfield-input" type="text" pattern="^\d{8}$" required value="<?php echo $_POST['date']; ?>" />
                    <div class="mdui-textfield-error">必须为正确的 8 位年月日格式</div>
                </div>
                <br><br><br>
                <button type="submit" class="mdui-center mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme">
                    <i class="mdui-icon material-icons">search</i>
                    搜索
                </button>
                <br>
                <div id="load" style="display:none;text-align:center;" class="mdui-typo">
                    <p>
                    <div class="mdui-spinner mdui-spinner-colorful"></div>
                    </p>
                    <p><strong>搜索中...</strong></p>
                </div>
            </form>

            <br><br>
            <div class="mdui-typo" style="text-align:center;">
                <strong>
                    <p>
                        <?php
                        if (isset($_POST) && !empty($_POST['date'])) {
                            $date = SQLite3::escapeString($_POST['date']);
                            if (!checkdate((int)substr($date, 4, 2), (int)substr($date, 6, 2), (int)substr($date, 0, 2))) {
                                echo '😲 你用的是火星历？';
                            } else {
                                if (intval($date) < 19000101) {
                                    echo '☠️ 大清已经亡啦！';
                                } else if (intval($date) > 20501231) {
                                    echo '🤩 在你的时间线里，伟大复兴实现了吗？';
                                } else {
                                    $start_time = microtime(true);
                                    class MyDB extends SQLite3
                                    {
                                        function __construct()
                                        {
                                            $this->open('data/pi.db');
                                        }
                                    }
                                    $db = new MyDB();
                                    if (!$db) {
                                        echo $db->lastErrorMsg();
                                    }
                                    $result = @$db->query("SELECT POSITION from BIRTHDAY where DATE='{$date}'");
                                    if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                                        echo '<font color="blue">' . $date . '</font> 首次出现在 π 的小数点后第 <font color="red">' . $row['POSITION'] . '</font> 位！';
                                        echo '<br>';
                                        echo '<a href="http://www.subidiom.com/pi/pi.asp?s=' . $date . '&c=pi" target="blank">想要验证结果是否正确？</a>';
                                    } else {
                                        echo '🧐 那年的 2 月真的有 29 天吗？';
                                    }
                                    $db->close();
                                    $end_time = microtime(true);
                                    echo '<br><br>⚡ 查询耗时 ' . round(($end_time - $start_time) * 1000, 2) . ' ms';
                                }
                            }
                        }
                        ?>
                    </p>
                    <br>
                    <div class="mdui-divider"></div>
                    <br>
                    <a href="http://www.subidiom.com/pi/" target="blank">👉 任意数字串搜索 / 指定位数上下文显示 / 更多常数（e/√2）查询</a>
                    <br>
                </strong>
            </div>
        </div>
    </div>
</body>

</html>