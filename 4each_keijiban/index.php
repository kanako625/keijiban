<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <img src="4eachblog_logo.jpg">
    <header>
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="main_box">
            <div class="left">
                <h1>プログラミングについて役立つ掲示板</h1>

                <h3>入力フォーム</h3>

                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label><br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>

                    <div>
                        <label>タイトル</label><br>
                        <input type="text" class="text" size="35" name="title">
                    </div>

                    <div>
                        <label>コメント</label><br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>

                <?php
                mb_internal_encoding("utf8");
                $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "");
                $stmt = $pdo->query("select*from 4each_keijiban");


                while ($row = $stmt->fetch()) {

                    echo "<div class='kiji'>";
                    echo "<h4>" . $row['title'] . "</h3>";
                    ;
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by" . $row['handlename'] . "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>

            <div class="right">
                <h2>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ　TOP5</li>
                    <li>HTMLの基礎</li>
                </ul>

                <h2>おすすめリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>

                <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Java Script</li>
                </ul>

            </div>
        </div>
    </main>

    <footer>
        <ul>
            <li>copyright(c)internous | 4each blog the which provides A to Z programming.</li>
        </ul>
    </footer>

</body>

</html>