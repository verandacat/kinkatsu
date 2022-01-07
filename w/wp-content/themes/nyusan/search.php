<?php get_header();
$s = $_GET['s'];
$price = $_GET['price'];
$onedayprice = $_GET['onedayprice'];
$contv = $_GET['contv'];
$jenre = $_GET['jenre'];
$plan = $_GET['plan'];
$ranking = $_GET['ranking'];
if(isset($_GET['rules'])){
$rules = $_GET['rules'];
}



function number_unit($int){
 
  $unit = array('万','億','兆','京');
  krsort($unit);
 
  if(is_numeric($int)){
 
    $tmp = '';
    $count = strlen($int);
    foreach($unit as $k => $v){
      if($count > (4 * ($k + 1))){
        if($int!==0) $tmp .= number_format(floor( $int /pow(10000,$k+1))).$v;
        $int = $int % pow(10000,$k+1);
      }
    }
    if($int!==0) $tmp .= number_format($int % pow(10000,$k+1));
 
    return $tmp;
 
  }else{
 
    return false;
 
  }
}
 ?>



<?php wp_reset_query();
if(!empty($_GET['metakey'])){
$metakey = $_GET['metakey'];
}
else{
$metakey = "ex";
}
if(empty($_GET['order'])){
$order = "desc";
}

if(!empty($_GET['jenre'])){
            $metaquerysp[] = array(
            'key'=>'jenre',
            'value'=>$_GET['jenre'],
            'compare'=>'LIKE',
            'type'=>'CHAR'
            );
}
if($_GET['contv'] == "5000000000"){
            $metaquerysp[] = array(
            'key'=>'contv',
            'value'=>'4999999999',
            'compare'=>'>',
            'type'=>'NUMERIC'
            );
}elseif($_GET['contv'] == "10000000000"){
            $metaquerysp[] = array(
            'key'=>'contv',
            'value'=>'9999999999',
            'compare'=>'>',
            'type'=>'NUMERIC'
            );
}


if($_GET['onedayprice'] == "150"){
            $metaquerysp[] = array(
            'key'=>'onedayprice',
            'value'=>'150',
            'compare'=>'<=',
            'type'=>'NUMERIC'
            );
}elseif($_GET['onedayprice'] == "200"){
            $metaquerysp[] = array(
            'key'=>'onedayprice',
            'value'=>'200',
            'compare'=>'<=',
            'type'=>'NUMERIC'
            );
}elseif($_GET['onedayprice'] == "250"){
            $metaquerysp[] = array(
            'key'=>'onedayprice',
            'value'=>'250',
            'compare'=>'<=',
            'type'=>'NUMERIC'
            );
}elseif($_GET['onedayprice'] == "300"){
            $metaquerysp[] = array(
            'key'=>'onedayprice',
            'value'=>'300',
            'compare'=>'<=',
            'type'=>'NUMERIC'
            );
}

if($_GET['price'] == "3000"){
            $metaquerysp[] = array(
            'key'=>'price',
            'value'=>'3000',
            'compare'=>'<=',
            'type'=>'NUMERIC'
            );
}elseif($_GET['price'] == "6000"){
            $metaquerysp[] = array(
            'key'=>'price',
            'value'=>'6000',
            'compare'=>'<=',
            'type'=>'NUMERIC'
            );
}elseif($_GET['price'] == "10000"){
            $metaquerysp[] = array(
            'key'=>'price',
            'value'=>'10000',
            'compare'=>'<=',
            'type'=>'NUMERIC'
            );
}

if($plan){
            $metaquerysp[] = array(
            'key'=>'plan',
            'value'=>$plan,
            'compare'=>'LIKE',
            'type'=>'CHAR'
            );
}


if(is_array($rules)){
    foreach($rules as $val){
        $metaquerysp[] = array(
                'key'=>'rules',
                'value'=> $val,
                'compare'=>'LIKE',
                );
    }
}else{
        $metaquerysp[] = array(
                'key'=>'rules',
                'value'=> $rules,
                'compare'=>'LIKE',
                );
}


$metaquerysp['relation'] = 'AND';
?>

<?php
if($ranking == "1"){
      $args = array(
          'meta_query' => array($metaquerysp),
          'posts_per_page' => 3,
          'orderby' =>'meta_value_num',
          'order' => 'desc',
          'post_status' => 'publish',
          'meta_key' => $metakey,
          'post__not_in' => array(33),
      );
}elseif($ranking == "2"){
      $args = array(
          'meta_query' => array($metaquerysp),
          'offset' => 3,
          'orderby' =>'meta_value_num',
          'order' => 'desc',
          'post_status' => 'publish',
          'meta_key' => $metakey,
          'post__not_in' => array(33),
      );
}elseif($ranking == ""){
    if(!empty($order) || !empty($metakey)){
      $args = array(
          'meta_query' => array($metaquerysp),
          'orderby' =>'meta_value_num',
          'post_status' => 'publish',
          'order' => $order,
          'meta_key' => $metakey,
          'post__not_in' => array(33),
      );
    }else{
      $args = array(
          'meta_query' => array($metaquerysp),
          'orderby' =>'meta_value_num',
          'post_status' => 'publish',
          'post__not_in' => array(33),
      );
    }
}
//echo "<pre>";
//print_r($args);
//echo "</pre>";


$query = new WP_Query($args);
$get_num = $query->post_count;
?>
  <div stlye="margin-top:30px;">
  <?php get_search_form(); ?>
  </div>


  <div class="resultvalue"> 検索結果：<span><?php echo $get_num; ?></span>件 </div>

<ul class="bread">
  <li><a href="http://xn--hdks4057bh4s.net?logid=<?php echo $_GET['logid']; ?>&cam=<?php echo $_GET['cam']; ?>&gr_no=<?php echo $_GET['gr_no']; ?>&key=<?php echo $_GET['key']; ?>&ad_no=<?php echo $_GET['ad_no']; ?>&link_no=<?php echo $_GET['link_no']; ?>&pat=<?php echo $_GET['pat']; ?>&switch=<?php echo $_GET['switch']; ?>">TOP</a></li>
<li><?php if($price){ echo $price."・"; } ?><?php if($onedayprice){ echo $onedayprice."・"; } ?><?php if($contv){ echo number_unit($contv)."以上・"; } ?><?php if($jenre){ echo $jenre."・"; } ?><?php if($plan){ echo $plan."・"; } ?><?php if($ranking == "1"){ echo "1～3位・"; }elseif($ranking == "2"){ echo "4位以下・"; } ?>
    <?php 
    if(isset($_GET['rules'])){
      if(is_array($rules)){
          foreach($rules as $value){
          echo $value."/";
          } 
      }else{
      echo $rules."/";
      }
    } 
    ?>
    </li>

</ul> 


<form class="table" id="sort_form1" action="<?php echo home_url( '/' ); ?>" method="get">
<?php foreach ($_GET as $k => $v){
                   if($k != "order") {
                   if($k != "metakey") {
                             if(is_array($v)){ 
                                  foreach ($v as $n) { ?>
                                <input type="hidden" value="<?php echo $n; ?>" name="<?php echo $k; ?>[]">
                                  <?php } ?>
                       <?php }else{ ?>
                   <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">
                   <?php     }
                         }
                         }
} ?>
<input type="hidden" value="ex" name="metakey">
<input type="hidden" value="<?php if($order == "desc"){ echo "asc"; }elseif($order == "asc"){ echo "desc"; } ?>" name="order">
</form>
<form class="table" id="sort_form2" action="<?php echo home_url( '/' ); ?>" method="get">
<?php foreach ($_GET as $k => $v){
                   if($k != "order") {
                   if($k != "metakey") {
                             if(is_array($v)){ 
                                  foreach ($v as $n) { ?>
                                <input type="hidden" value="<?php echo $n; ?>" name="<?php echo $k; ?>[]">
                                  <?php } ?>
                       <?php }else{ ?>
                   <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">
                   <?php     }
                         }
                         }
} ?>
<input type="hidden" value="price" name="metakey">
<input type="hidden" value="<?php if($order == "desc"){ echo "asc"; }elseif($order == "asc"){ echo "desc"; } ?>" name="order">
</form>
<form class="table" id="sort_form3" action="<?php echo home_url( '/' ); ?>" method="get">
<?php foreach ($_GET as $k => $v){
                   if($k != "order") {
                   if($k != "metakey") {
                             if(is_array($v)){ 
                                  foreach ($v as $n) { ?>
                                <input type="hidden" value="<?php echo $n; ?>" name="<?php echo $k; ?>[]">
                                  <?php } ?>
                       <?php }else{ ?>
                   <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">
                   <?php     }
                         }
                         }
} ?>
<input type="hidden" value="onedayprice" name="metakey">
<input type="hidden" value="<?php if($order == "desc"){ echo "asc"; }elseif($order == "asc"){ echo "desc"; } ?>" name="order">
</form>
<form class="table" id="sort_form4" action="<?php echo home_url( '/' ); ?>" method="get">
<?php foreach ($_GET as $k => $v){
                   if($k != "order") {
                   if($k != "metakey") {
                             if(is_array($v)){ 
                                  foreach ($v as $n) { ?>
                                <input type="hidden" value="<?php echo $n; ?>" name="<?php echo $k; ?>[]">
                                  <?php } ?>
                       <?php }else{ ?>
                   <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">
                   <?php     }
                         }
                         }
} ?>
<input type="hidden" value="contv" name="metakey">
<input type="hidden" value="<?php if($order == "desc"){ echo "asc"; }elseif($order == "asc"){ echo "desc"; } ?>" name="order">
</form>
<form class="table" id="sort_form5" action="<?php echo home_url( '/' ); ?>" method="get">
<?php foreach ($_GET as $k => $v){
                   if($k != "order") {
                   if($k != "metakey") {
                             if(is_array($v)){ 
                                  foreach ($v as $n) { ?>
                                <input type="hidden" value="<?php echo $n; ?>" name="<?php echo $k; ?>[]">
                                  <?php } ?>
                       <?php }else{ ?>
                   <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">
                   <?php     }
                         }
                         }
} ?>
<input type="hidden" value="jenre" name="metakey">
<input type="hidden" value="<?php if($order == "desc"){ echo "asc"; }elseif($order == "asc"){ echo "desc"; } ?>" name="order">
</form>
<form class="table" id="sort_form6" action="<?php echo home_url( '/' ); ?>" method="get">
<?php foreach ($_GET as $k => $v){
                   if($k != "order") {
                   if($k != "metakey") {
                             if(is_array($v)){ 
                                  foreach ($v as $n) { ?>
                                <input type="hidden" value="<?php echo $n; ?>" name="<?php echo $k; ?>[]">
                                  <?php } ?>
                       <?php }else{ ?>
                   <input type="hidden" value="<?php echo $v; ?>" name="<?php echo $k; ?>">
                   <?php     }
                         }
                         }
} ?>
<input type="hidden" value="regularly" name="metakey">
<input type="hidden" value="<?php if($order == "desc"){ echo "asc"; }elseif($order == "asc"){ echo "desc"; } ?>" name="order">
</form>



<div class="sortbox">
  <div class="sortname pc">商品名</div>
  <div id="sort1" class="sortrate">評価<br>ランキング <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton.png" width="11" class="middle pc"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton2.png" width="11" class="middle sp"></div>
  <div id="sort2" class="sortprice">初回価格<br><span class="pc">(税込)</span> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton.png" width="11" class="middle pc"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton2.png" width="11" class="middle sp"></div>
  <div id="sort6" class="sortreguprice">定期価格<br><span class="pc">(税込)</span> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton.png" width="11" class="middle pc"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton2.png" width="11" class="middle sp"></div>
  <div id="sort3" class="sortspecialprice">1日あたりの<br>価格<span class="pc">(税込)</span> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton.png" width="11" class="middle pc"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton2.png" width="11" class="middle sp"></div>
     <p style="clear:both" class="pc"></p>
  <div id="sort4" class="sortonday">菌の含有量 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton.png" width="11" class="middle pc"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton2.png" width="11" class="middle sp"></div>
  <div id="sort5" class="sortvolume pc">菌の種類 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton.png" width="11" class="middle pc"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sortbutton2.png" width="11" class="middle sp"></div>
 <div style="clear:both" class="pc"></div>
</div>

<script>
jQuery(".sortrate").on('click',function(){
  jQuery("#sort_form1").submit();
})
jQuery(".sortprice").click(function(){
  jQuery("#sort_form2").submit();
})
jQuery(".sortspecialprice").click(function(){
  jQuery("#sort_form3").submit();
})
jQuery(".sortreguprice").click(function(){
  jQuery("#sort_form6").submit();
})
jQuery(".sortonday").click(function(){
  jQuery("#sort_form4").submit();
})
jQuery(".sortvolume").click(function(){
  jQuery("#sort_form5").submit();
})
</script>


  <?php $i = 0;if($query->have_posts()): ?>
  <?php while ($query->have_posts()) : $query->the_post(); $i++;
  $image_id = get_post_thumbnail_id ();
  $image_url = wp_get_attachment_image_src ($image_id, true);
  $price = number_format((int)get_field('price'));
  $regularly = number_format((int)get_field('regularly'));
  $onedayprice = number_format((int)get_field('onedayprice'));
  $contv = get_field('contv');
  $copy = get_field('copy');
  $jenre = get_field('jenre');
  $coolingoff = get_field('coolingoff');
  $url = get_field('url');
  $ex = get_field('ex');
  $rank = get_field('rank');
   ?>


<div class="detailbox">
  <div class="sp detailnamesp"><a href="http://xn--hdks4057bh4s.net/<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank"><span><?php the_title(); ?></span></a></div>
  <div class="detailimg"><img src="<?php echo $image_url[0]; ?>" width="100%"><br class="pc"><a class="pc" target="_blank" href="http://xn--hdks4057bh4s.net/<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"><?php the_title(); ?></a></div>
  <div class="sp detailnameex">
    <div class="detailrate"><p class="rankno<?php echo $rank; ?>"><span><?php echo $rank; ?></span>位</p><p class="ratesp<?php echo $i; ?> marbo0"><span></span></p><p style="color:#000;font-style:normal;font-weight:normal;">(<?php echo $ex; ?> / 5.0)</p></div>
  </div>
  <div class="sp" style="clear:both"></div>
    <div class="detail">
      <div class="detailrate pc"><p class="rankno<?php echo $i; ?>"><span><?php echo $i; ?></span>位</p><p class="ratesp<?php echo $i; ?>"><span></span></p><p style="color:#000;font-style:normal;font-weight:normal;">(<?php echo $ex; ?> / 5.0)</p></div>
      <div class="detailprice"><div class="sp dtitle2">初回価格</div>￥<?php echo $price; ?></div>
      <div class="detailreguprice"><div class="sp dtitle2">定期価格</div>￥<?php echo $regularly; ?></div>
      <div class="detailonedayprice"><div class="sp dtitle2">1日あたりの<br>価格(税込)</div>￥<?php echo $onedayprice; ?></div>
      <div class="detailspecialprice"><div class="sp dtitle2">菌の保有量</div><?php echo number_unit($contv); ?></div>
      <div class="detailvolume"><div class="sp dtitle2">菌の種類</div><?php if(is_array($jenre)){
          foreach($jenre as $value){
          echo $value.",";
          } 
      }else{ 
      echo $jenre;
      } ?></div>
      <div class="detailurl pc"><a href="http://xn--hdks4057bh4s.net/<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/searchlinkbutton.png" width="100%"></a></div>
     <p style="clear:both"></p>
      <div class="detailcomment"><p style="border-bottom:1px solid #ccc;padding:0 0 5px;margin:0 0 5px;"><?php echo $copy; ?></p><?php the_content(); ?></div>
      <div class="detailurl sp"><a href="http://xn--hdks4057bh4s.net/<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/spsearchlinkbutton.png" width="100%"></a></div>
    </div><!--detail-->

 <p style="clear:both"></p>
</div><!--detailbox-->

<style>
.ratesp<?php echo $i; ?>{
padding:0 !important;
width:86px;
height:19px;
margin:0px auto 0;
background:url(<?php print get_template_directory_uri(); ?>/img/off.png) no-repeat;
background-size:contain;
}
.ratesp<?php echo $i; ?> span{
display:block;
width:<?php echo $ex*20; ?>%;
height:19px;
background:url(<?php print get_template_directory_uri(); ?>/img/on.png) no-repeat;
}
</style>


  <?php endwhile; endif; wp_reset_query(); ?>

 
 <!-- <?php include("pickup.php"); ?> -->


<?php get_footer(); ?>
