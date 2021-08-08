<?php
require("common/header.php");
?>

    <main>
        <section>
            <div class="profile-container" id="about">
                <h1>About me</h1>
                <h2>Profile</h2>
                <div class="img-container">
                    <img id="my-photo" src="<?php echo get_template_directory_uri();?>/img/IMG_1875.jpg" alt="プロフィール" oncontextmenu="return false;"/>
                </div>
                <div class="article-container">
                    <h3>松原　弘樹</h3>
                    <div class="github-img"><a href="https://github.com/muffinist11"><img src="<?php echo get_template_directory_uri();?>/img/github-logo.png" alt="github"></a></div>
                    <ul>                    
                        <li><p>生年月日　1992.11.20</p></li>
                        <br>
                        <li><p>2014.3 東洋大学 経済学部 国際経済学科 卒</p></li>
                        <li><p>2014.4 大手小売業 入社 マネジメント職勤務</p></li>
                        <li><p>2021.2 プログラミングスクールTech I.S.入校</p></li>
                        <li><p>2021.3 JADP認定メンタル心理カウンセラー資格取得</p></li>
                        <li><p>2021.3 JADP認定上級心理カウンセラー取得</p></li>
                        <br>
                        <li><p>趣味</p></li>
                        <li><p>ギター・カメラ・音楽鑑賞</p></li>
                    </ul>
                    <br>
                    <p>PCスキル</p>
                    <ul>
                        <li>言語: HTML、CSS、JavaScript、PHP</li>
                        <li>ツール:Git、Visual Studio Code、Illustrator、</li>
                        <li>Photoshop、AdobeXD、Wordpress</li>
                        <li>データベース:MySQL</li>
                        <li>サーバ OS:CentOS</li>
                        <li>サーバ:Apache</li>
                    </ul>
                </div>
            </div>
        </section>


    </main>

<?php
require("common/footer.php");?>
