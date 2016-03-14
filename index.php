<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta property="wb:webmaster" content="ae884e09bc02b700" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="description" content="weibo oauth demo"/>
    <meta name="keywords" content="weibo oauth demo"/>

    <title>weibo oauth demo</title>
</head>
<body>
    <div class="wrapper">
        <div class="navbar-collapse">
            <ul class="navbar-nav navbar-list">
                <li class="active"><a href="/index.php">主页</a></li>
                <li><a href="/about.html">About</a></li>
            <?php
            if (isset($_COOKIE["user"])) {?>
                <li><img src="<?php echo $_COOKIE["avatar"]?>" alt="" width="24px" height="24px" />
                    <span style="color:white"><?php echo $_COOKIE["user"]?></span>
                    <a href="/logout.php" style="color:#2a6496;">Logout</</li>
            <?php } else { ?>
                <li><a href="<?php echo AUTH_URL?>?client_id=<?php echo WB_AKEY?>&redirect_uri=<?php echo CA_URL?>&scope=all" target="_self">
                        <img src="http://img.t.sinajs.cn/t4/appstyle/open/images/website/loginbtn/loginbtn_03.png" alt=""/>
                    </a>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>
</body>>