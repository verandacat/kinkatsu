
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
<!-- <link href="fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css" > -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">





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


<script>

$(document).ready(function(){
    $('.arc-button').on('click', function () {
    if ($(this).hasClass('on')) {
        slideUp();
        $(this).find('span').text('+');
    } else {
        slideUp();
        $(this).addClass('on').next().slideDown('slow');
        $(this).find('span').text('-');
    }
    function slideUp() {
        $('.arc-button').removeClass('on').next().slideUp('slow');
    };
});

})
</script>
