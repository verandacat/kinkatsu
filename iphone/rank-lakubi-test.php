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



<div id="text<?php echo $i; ?>" style="position: relative;">
    <table class="rnk2item" cellspacing="0">

        <tbody>
            <tr>
                <th class="ttitle" colspan="2">
                    <div class="img-center badge">
                        <img src="./img/no1-badge.png" width="70" />
                    </div>

                    <h1 class="itemtitle">
                        <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
                        <a target="_blank" href="<?php echo $onlink; ?><?php echo "?".$query2; ?>" target="_blank">
                            <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
                            <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$query2; ?>" target="_blank">
                                <?php }else { ?>
                                <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$query2; ?>"
                                    target="_blank">
                                    <?php } ?>
                                    <?php echo the_title(); ?>
                                </a>
                    </h1>???
                </th>
            </tr>

            <tr>
                <td class="timg">
                    <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
                    <a target="_blank" href="<?php echo $onlink; ?><?php echo "?".$query2; ?>" target="_blank">
                        <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
                        <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$query2; ?>" target="_blank">
                            <?php }else { ?>
                            <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$query2; ?>" target="_blank">
                                <?php } ?>
                                <?php the_post_thumbnail(); ?>
                            </a>
                </td>
            </tr>
        </tbody>
    </table>

    <ul class="point_txt">
        <?php echo $point; ?>
    </ul>


    <div class="point_txt_02">
        <p>
            <?php echo $content; ?>
        </p>

        <br><br>

        <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
        <a target="_blank" href="<?php echo $onlink; ?><?php echo "?".$query2; ?>" target="_blank">
            <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
            <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$query2; ?>" target="_blank">
                <?php }else { ?>
                <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$query2; ?>" target="_blank">
                    <?php } ?>
                    <span class="link_txt">
                        <?php echo $catch; ?><?php echo date("n"); ?>???????????????????????????????????????????????????</span>
                </a>

                </p>
                </td>
                </tr>
    </div>
    <tr>
        <td colspan="2">
            <table class="ttable" cellspacing="1">
                <tbody>
                    <colgroup>
                        <col width="33%">
                        <col width="33%">
                        <col width="33%">
                    </colgroup>
                    <tr>
                        <th>??????</th>
                        <th>??????</th>
                        <th>??????</th>
                    </tr>
                    <tr>
                        <td><?php echo $rprice; ?></td>
                        <td><?php echo $amount; ?></td>
                        <td>
                            <img src="<?php echo $star; ?>" alt="??????">
                        </td>
                    </tr>
                    <tr>
                        <th>??????????????????</th>
                        <th>
                            ?????????
                        </th>
                        <th>
                            1?????????????????????
                        </th>
                    </tr>
                    <tr>
                        <td><?php echo $type; ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td>
                            <?php if($i == 1) : ?>
                            ???<?php echo $dayprice; ?>    
                            <?php else : ?>
                            <?php echo $dayprice; ?>
                            <?php endif; ?>
                        </td>
                    </tr>

                </tbody>
            </table>



            <p style="text-align: center">
                <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
                <a target="_blank" href="<?php echo $onlink; ?><?php echo "?".$query2; ?>" target="_blank">
                    <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
                    <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$query2; ?>" target="_blank">
                        <?php }else { ?>
                        <a target="_blank" href="<?php echo $offlink; ?><?php echo "?".$query2; ?>" target="_blank">
                            <?php } ?>
                            <img alt="" src="./img/n_img/btn_site_go_01.png" />
                        </a>
            </p>


        </td>
    </tr>
    </tbody>
    </table>
</div>


<?php $i++; endwhile; endif; wp_reset_postdata(); ?>