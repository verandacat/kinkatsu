<?php wp_reset_postdata();
                
                $args = array(
                  'posts_per_page' => '5',
                  'category_name' => 'l_lanking',
                  'post_type' => 'post',
                  'meta_key' => 'ranking_lakubi',
                  'orderby' => 'meta_value_num',
                  'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                
                $point= get_field('point');
                $link= get_field('link');
                $content= get_field('content');
                $catch= get_field('catch');
                $onlink= get_field('onlink');
                $offlink= get_field('offlink');
                $rprice= get_field('rprice');
                $amount= get_field('amount');
                $report= get_field('report');
                $type= get_field('type');
                $quantity= get_field('quantity');
                $dayprice= get_field('dayprice');
                $star= get_field('star');
                ?>



<div id="text<?php echo $i; ?>">

    <table class="rnk2item" cellspacing="0" width="1147">

        <tbody>
            <tr>
                <th style="position: relative;" class="ttitle" colspan="2">

                    <img style="height: 90px; width: 90px; position: absolute; top:-10px;" alt=""
                        src="./img/n_img/badge_ranking_0<?php echo $i; ?>.png" />

                    <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
                    <a target="_blank" href="<?php echo $onlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                        target="_blank">
                        <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
                        <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php }else{ ?>
                            <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <?php } ?>
                                <span style="font-size: 32px; margin-left:120px;"><?php the_title(); ?></span>
                            </a>

                </th>
            </tr>
        </tbody>

        <tr>
            <td class="timg">
                <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
                <a target="_blank" href="<?php echo $onlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                    target="_blank">
                    <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
                    <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                        target="_blank">
                        <?php }else{ ?>
                        <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php } ?>
                            <?php the_post_thumbnail(); ?>
                        </a>
            </td>

            <td class="tdesc">
                <ul class="point_txt">
                    <?php echo $point; ?>
                </ul>

        </tr>

    </table>


    <div class="point_txt_02">
        <p>
            <?php echo $content; ?>

        </p>
        <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
        <a target="_blank" href="<?php echo $onlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
            <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
            <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                target="_blank">
                <?php }else{ ?>
                <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                    target="_blank">
                    <?php } ?>

                    <span class="link_small">&gt;&gt;&gt;
                        <b><?php echo $catch; ?><?php echo date("n"); ?>月の特別キャンペーンページはこちら</b>
                    </span>
                </a>


    </div>


    <table class="ttable" cellspacing="1">
        <tbody>
            <colgroup>
                <col width="33%">
                <col width="33%">
                <col width="33%">
            </colgroup>
            <tr>
                <th>価格</th>
                <th>容量</th>
                <th>評価</th>
            </tr>
            <tr>
                <td><?php echo $rprice; ?></td>
                <td><?php echo $amount; ?></td>
                <td>
                    <img src="<?php echo $star; ?>" alt="点数">
                </td>
            </tr>
            <tr>
                <th>乳酸菌の種類</th>
                <th>
                    含有量
                </th>
                <th>
                    1日あたりの価格
                </th>
            </tr>
            <tr>
                <td><?php echo $type; ?></td>
                <td><?php echo $quantity; ?></td>
                <td><?php echo $dayprice; ?></td>
            </tr>
        </tbody>
    </table>



    <br>
    <p style="text-align: center">

        <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
        <a target="_blank" href="<?php echo $onlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
            <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
            <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                target="_blank">
                <?php }else{ ?>
                <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                    target="_blank">
                    <?php } ?>
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="70%" />
                </a>

    </p>


</div>

</td>
</tr>
</tbody>
</table>

<?php $i++; endwhile; endif; wp_reset_postdata(); ?>

</div>