<?php
    require("common/header.php");
?>


    <main>

        <section>
            <div class="catch" id="home">
                <h1>Web design & Coding</h1>
                <h2>お客様の欲しいデザインや仕組みを一緒に考え、一緒に作ります。</h2>            
            </div>
        </section>
        <br>
        <section>
            <div class="service-items catch">
                <h2>Service</h2>
                <div class="service-list">
                    <h4>Webデザイン・コーディング</h4>
                    <br>
                    <img src="<?php echo get_template_directory_uri();?>/img/htmlcss.png" alt="HTMLの画像" oncontextmenu="return false;"/>
                    <img src="<?php echo get_template_directory_uri();?>/img/JavaScripticon.png" alt="JavaScriptの画像" oncontextmenu="return false;"/>
                    <br>
                    <div class="service-article">
                        <p>お客様の要望に対してヒアリングを行い、理想的なデザインを作成します。</p>
                        <p>レスポンシブデザイン（PC,スマートフォン）にも対応しております。</p>
                        <p>また、JavaScriptを用いた動的デザインの制作も承ります。</p>
                    </div>
                </div>
    
                <div class="service-list">
                    <h4>データベースを用いたサービス制作</h4>
                    <br>
                    <img src="<?php echo get_template_directory_uri();?>/img/phpicon.png" alt="phpの画像" oncontextmenu="return false;"/>
                    <br>
                    <div class="service-article">
                        <p>ログイン機能・メールマガジン機能・登録機能を用いたサービスを制作します。</p>
                        <p>（サーバー構築は対象外となります。他業者様へご依頼くださいませ。）</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
    require("common/footer.php");
?>