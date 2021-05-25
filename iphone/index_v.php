<?php include_once("header.php") ?>


<style>


        </style>




  <div id="wrapper">
    <div class="inner">


                <!--検索フォーム-->

      <div class="seachinnerbox">

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" >
  <input type="hidden" name="s" class="s" />
  <?php if(0){if(isset($_GET)){ 
          foreach($_GET as $key => $val){ ?>
          <input type="hidden" name="<?php echo $key; ?>" value="<?php echo $val; ?>">
    <?php } ?>
  <?php }} ?>


  <div class="check-wrap">
    <label class="check-contents"><input class="checkbox" type="checkbox" name="rules[]" value="生きてる菌配合">生きてる菌配合</label>
    <label class="check-contents"><input class="checkbox" type="checkbox" name="rules[]" value="菌の含有量が多い">菌の含有量が多い</label>
    <label class="check-contents"><input class="checkbox" type="checkbox" name="rules[]" value="生きたまま腸まで届く">生きたまま腸まで届く</label>
    <label class="check-contents"><input class="checkbox" type="checkbox" name="rules[]" value="機能性表示食品">機能性表示食品</label>
  </div>

  <div style="clear:both"></div>

  <div class="arc-button">こだわり条件を探す<span>+</span></div>

  <div class="select-wrap">

      <div class="selectbox">
        <select name="price">
        <option style="color:#000;" value="">価格</option>
        <option style="color:#000;" value="3000">3000円以内</option>
        <option style="color:#000;" value="6000">6000円以内</option>
        <option style="color:#000;" value="10000">10000円以内</option>
        </select>
        
      </div>
    
      <div class="selectbox">
        <select name="onedayprice">
        <option value="">1日あたりの価格</option>
        <option style="color:#000;" value="150">150円以内</option>
        <option style="color:#000;" value="200">200円以内</option>
        <option style="color:#000;" value="250">250円以内</option>
        <option style="color:#000;" value="300">300円以内</option>
        </select>
      </div>
    
      <div class="selectbox">
        <select name="contv">
        <option style="color:#000;" value="">乳酸菌の含有量</option>
        <option style="color:#000;" value="5000000000">50億以上</option>
        <option style="color:#000;" value="10000000000">100億以上</option>
        </select>
      </div>
    
      <div class="selectbox">
        <select name="jenre">
        <option style="color:#000;" value="">乳酸菌の種類</option>
        <option style="color:#000;" value="ビフィズス菌">ビフィズス菌</option>
        <option style="color:#000;" value="フェカリス菌">フェカリス菌</option>
        <option style="color:#000;" value="酪酸菌">酪酸菌</option>
        <option style="color:#000;" value="スマート乳酸菌">スマート乳酸菌</option>
        </select>
      </div>
    
      <div class="selectbox">
        <select name="plan">
        <option style="color:#000;" value="">割引プラン</option>
        <option style="color:#000;" value="初回限定価格あり">初回限定価格あり</option>
        <option style="color:#000;" value="定期コース割引あり">定期コース割引あり</option>
        </select>
      </div>
    
      <div class="selectbox end">
        <select name="ranking">
        <option style="color:#000;" value="">ランキング</option>
        <option style="color:#000;" value="1">1～3位</option>
        <option style="color:#000;" value="2">4位以下</option>
        </select>
      </div>
  
</div><!--.select-wrap end-->

<div style="clear:both"></div>

  <div class="searchbutton">
    <button type="submit">
    この条件で検索する</button>
  </div>

<div class="searchresult" style="display:none;">検索結果：<span>00</span>件</div>

</div><!--end .seachinnerbox -->

 
</form>
<!--検索フォーム-->


      <span class="img-center">
        <img src="./img/n_img/top_banner_01_new.png" width="100%" />


        

        <div id="header">
        </div>
        <div id="column1">
          <div id="contents">
            <div id="layoutbox">
              <div id="main">

                <div id="text1">

                    <p class="main_text_01">「痩せ菌を増やしダイエットしたい」</p>
                    <p class="main_text_01">「便秘を解消してスッキリしたい」</p>
                    
                    <p class="main_text_02" style="padding-left:10px;"> とお悩みの方へ！</p>
                    
                    <p class="main_text_03"><b>本当に腸内フローラを整えてくれる乳酸菌サプリBEST5を公開！</b></p>
               </div>

                  <div class="point_txt_top">

                      <span style="color:red;">菌活をする女性がいま増えています。</span><br>

                      <b>善玉菌（やせ菌）を増やし、悪玉菌（でぶ菌）を減らして</b>
                      <span style="color:red;font-weight: bold;" class="mk">“腸内フローラ”のバランスを
                          整えることがダイエットや美容、健康のために大事</span>なのはもはや常識ですよね！
                      <br><br>
                      <b>“腸内フローラ”を整えるビフィズス菌や乳酸菌、酪酸菌などの菌は<span style="color:blue;">加齢と共に減少</span></b>していきます。<br><br>
                      なので、 <span style="color:red;font-weight: bold;">サプリメントを<span class="mk">毎日摂取する</span>のがおすすめ</span>です！
                      <br><br>
                      ですが、サプリメントによって品質はまちまち。<br><br>
                      <span style="color:blue;font-weight: bold;">「乳酸菌が配合されていればなんでも同じ」って安易に選んで失敗したら意味がありません…。</span>
　　　　　　　　　　　　<br><br>

                    <!-- <h3><span>重要な4つのポイント！大事なのはどんな乳酸菌サプリを選ぶか</span></h3> -->
                      <!-- 
                    美容や健康のためには、<span style="color:red;font-weight: bold;" class="mk">“腸内フローラ”を整えることが大事</span>なのは、もはや常識ですよね！<br><br>
                     <b>“腸内フローラ”を整えるビフィズス菌や乳酸菌は</b><span style="color:blue;font-weight: bold;font-size:18px;">加齢と共に減少</span>していきます。 <br>
                     なので、手ごろな<span style="color:red;">サプリメントを<span style="color:red;font-weight: bold;" class="mk">毎日摂取する</span>のがおすすめ</span>です！ <br><br>
                     
                     サプリメントを選ぶ上で<span style="font-weight: bold;font-size:18px;">１番大事</span>なこと。<br>
                    <b>それはサプリメントは</b><span style="color:red;font-weight: bold;font-size:18px;">ちゃんとしたサプリメントなのか。</span><br><br>
                    サプリメントによって品質はまちまち。<br>
                    <span style="color:blue;font-weight: bold; text-decoration: underline;">価格が安いからってだけで選んで失敗したら意味がないので･･･。</span><br><br>
                     
                    ドラッグストアやネット上で探せば<span style="color:blue;font-weight: bold;" class="mk">サプリメントは星の数ほど。</span><br>
                    <b>それを全て自分で試すわけにはいきませんよね？</b> <br>
                    どれが一番自分に合うのか調べるなんて難しいのが現実です。<br>-->

                    <!-- <p>乳酸菌には数百～数千もの種類があり、それぞれび動物由来、植物由来、ヒト由来など様々な種類の乳酸菌があります。
                      <strong>
                        <span style="color: #ff0a0a">より有用性があると言われているのはヒト由来と植物由来の乳酸菌です</span>
                      </strong>。そして最も重要なのは、</p>
                    <p>&nbsp;</p>
                    <p>
                      <span style="font-size:20px;">
                        <span style="color:#0A15FF">その乳酸菌はちゃんとした乳酸菌かどうか</span>です。</span>
                    </p>
                    <p>&nbsp;</p>
                    <p>とは言ってもドラッグストアやインターネット上で
                      <span style="text-decoration: underline">探せば星の数ほどあるサプリメントを全て自分で試すわけにはいきませんし</span>、
                      <span style="color: blue">パッと見てどれを最初に試せばいいのか、どれが一番自分に合うのか調べるなんて難しいですよね</span>。</p> -->
                  </div>
         
                <img src="./img/n_img/title_point_01_new.png" width="100%">



                <ul class="point_list">
                  <li>
                    <strong>利用者の満足度が高い</strong>
                  </li>
                  <li>
                    <strong>配合されている菌の量が豊富</strong>
                  </li>
                  <li>
                    <strong>菌が胃で死滅せずに腸内へ届くようになっているか</strong>
                  </li>
                  <li>
                    <strong>試しやすい価格設定になっているかどうか</strong>
                  </li>
                </ul>

                <div class="point_txt_middle">

                    <p>乳酸菌サプリメントを選ぶ際のポイントをまとめてみました。<br><br>

                      上記の <span style="color:red;font-weight: bold;">４つのポイントを満たした乳酸菌サプリメントを選べば安心</span>です。<br><br>
                      
                      しかし、ドラッグストアやネット上で探せば<span style="color:blue;font-weight: bold;"><span class="mk">サプリメントは星の数ほど。</span></span><br><br>
                      <b>それをすべて自分で試すわけにはいきませんよね？</b><br>
                      どれが一番自分に合うのか調べるなんて難しいのが現実です。<br><br>
                      
                      そこで上記のチェック項目を元に<span style="color:red;font-weight: bold;">
                      「本当に飲んで満足できる乳酸菌サプリメント」</span>を当サイトが独自調査しました。<br><br>
                      調査の結果選ばれた<span class="mk" style="font-weight: bold;"><br>利用者からの満足度が高い優良乳酸菌サプリメントを発表</span>いたしますので、<br><br>
                      この中から<span style="text-decoration: underline;font-weight: bold;">自分に合った乳酸菌サプリメントを選んでください。</span><br><br>
                      <span style="color:blue;font-weight: bold;">
                      明日から変わり始めるあなたの健康生活のお手伝いをしてくれますので是非その満足度を体験してください！</span>
                      <br><br>
                      
                    </p>

                  <!-- <p>&nbsp;</p>
                  <p>そこで上記のチェック項目を元に「本当に飲んで満足できる乳酸菌サプリメント」を当サイトが独自調査しました。調査の結果選ばれた
                    <span class="mk">利用者からの満足度が高い優良乳酸菌サプリメントを発表</span>いたしますので、この中から
                    <u>自分に合った乳酸菌サプリメントを選んでください</u>。</p>
                  <p>&nbsp;</p>
                  <p>
                    <strong>
                      <span style="color: #0a15ff">必ずや明日から変わり始めるあなたの健康生活のお手伝いをしてくれますので是非その満足度を体験してください。</span>
                    </strong>
                  </p>
                  <p>&nbsp;</p> -->
                  <p style="text-align:center;">
                    <img src="./img/n_img/new_arrow.png" />
                  </p>
                </div>



                <!--比較表START-->

                <?php include_once("table.php"); ?>

                <!--比較表END-->




              <!--
                ランキングSTART
              -->

              <div class="img-center">
                <img src="./img/n_img/title_ranking_01_new.png" width="100%">
              </div>

               <?php include_once("rank-lakubi-test.php"); ?>

              <!--
                ランキングEND
              -->



                    <!-- <div>
                    <img src="./img/n_img/last_banner.png" alt="" width="100%">
                    <div class="last_container bg-y">
                    <div class="last_txt bg-wh border-r">

                           <p>当サイトでご紹介している乳酸菌サプリは、効果はもちろんですが、 
                            <span style="font-weight: bold;" class="mk">できるかぎり多くのダイエットや便秘に悩む方に試していただきたい</span>という気持ちから、
                            <span style="color:red;text-decoration: underline;font-weight: bold;">お得に試せるかどうか</span>、という点も重要視して選ばせていただきました。
                           </p> <br>

                            <p>第１位の<span style="font-weight: bold;">LAKUBI（ラクビ）</span>は今なら<span style="color:red; font-weight: bold;">
                            初回５００円モニター募集中！</span>なんと、<span style="color:red; font-weight: bold;" class="mk">１日わずか１０円</span>
                            で試すことが出来ちゃいます。</span></p><br>
                            
                            <p>このめっちゃお得なキャンペーンは、
                            <span style="text-decoration: underline;font-weight: bold;">今だけのキャンペーンなのですぐに募集が終了してしまう可能性が高い</span>です。</p><br>
                            
                            <p>さらに、<span style="color:red; font-weight: bold;">今だけAmazonギフト券（５００円分）応募券付き！</span>
                            試してみようとお考えの方は、<span style="color:red; font-weight: bold;" class="mk">
                                お得なキャンペーンが終了する前に手に入れてくださいね！</span></p><br>

                                <img src="./img/n_img/last_lakubi.png" width="100%">

                            <p style="text-align: center">
                                <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
                                  <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?".$query2; ?>" target="_blank">
                                     <img alt="" src="./img/n_img/btn_site_go_last.png" width="100%" />
                                   </a>
                            <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
                                  <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?".$query2; ?>" target="_blank">
                                     <img alt="" src="./img/n_img/btn_site_go_last.png" width="100%" />
                                   </a>
                           <?php }else{ ?>
                                  <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi.php<?php echo "?".$query2; ?>" target="_blank">
                                     <img alt="" src="./img/n_img/btn_site_go_last.png" width="100%" />
                                   </a>
                           <?php } ?>                              
                          </p>
                        </div>
                            </div>
                          </div>


                  </div> -->
              

      </div>

<?php include_once("footer.php"); ?>