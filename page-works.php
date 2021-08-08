<?php
    require("common/header.php");
?>

    <main>
        <section>
            <div class="profile-container">
                <h1>Works<div class="github-img"><a href="https://github.com/muffinist11"><img src="<?php echo get_template_directory_uri();?>/img/github-logo.png" alt="github"></a></div></h1>

                <div class="itemlist">
                  <div class="img-container">
                      <img id="works-photo" src="<?php echo get_template_directory_uri();?>/img/nadir.png" alt="NADiR">
                  </div>
                  <div class="article-container">
                      <br>
                      <h3><a href="https://nadir-hair.com/" style="color:#000;">hair salon NADiR様</a></h3>
                      <h4>実案件として、ヘアサロンのホームページをデザイン・制作しました。</h4>
                      <p>レンタルサーバーからFTPまでの環境構築<br>
                          google serch console対応<br>
                          Web Fonts 対応<br>
                          JavaScriptに　swiperを使用</p>
                  </div>
                </div>

                <div class="itemlist">
                  <div class="img-container">
                      <img id="works-photo" src="<?php echo get_template_directory_uri();?>/img/admincontrol.png" alt="admin">
                  </div>
                  <div class="article-container">
                      <br>
                      <h3>Inventory Control</h3>
                      <h4>外部案件を想定した在庫管理システムです。</h4>
                      <h4>オフィスなどで発注した在庫の名前、数量、保管場所、日時、<br>備考を管理する事ができます。</h4>

                      <p>CodeIgniterによるPHPのCRUD開発<br>
                        ログイン・会員登録機能<br>
                        在庫管理機能<br>
                        adminLTE使用<br>
                        Illustratorによるロゴ制作
                        </p>
                  </div>
                </div>
            </div>
        </section>
    </main>  

<?php
    require("common/footer.php");
?>