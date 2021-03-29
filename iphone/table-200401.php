
                <table class="dsc2item col4" cellspacing="1">
                  <tbody>


                    <!-- 1行目 商品名-->

                    <tr>
                      <th style="background-color:#7edcd6">
                        <p style="text-align:center">
                          <strong>商品名</strong>
                        </p>
                      </th>


                      <th style="background-color: #fff;">
                        <p style="text-align:center">
                          <img src="./img/n_img/crown_icon_01.png" width="30" alt="" />
                        </p>
                        <p style="text-align: center">
                        <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
                             <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?".$query2; ?>">
                            <img src="./img/lakubi-new.jpg" alt="" />
                          </a>
                       <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
                             <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?".$query2; ?>">
                            <img src="./img/lakubi-new.jpg" alt="" />
                          </a>
                      <?php }else{ ?>
                             <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi.php<?php echo "?".$query2; ?>">
                            <img src="./img/lakubi-new.jpg" alt="" />
                            </a>
                      <?php } ?>
                        </p>
                        <p style="text-align: center">
                        <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
                          <strong>
                            <span style="font-size:13px" class="lbg">
                              <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?".$query2; ?>">Lakubi<br>(ラクビ)</a>
                            </span>
                          </strong>
                       <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
                           <strong>
                            <span style="font-size:13px" class="lbg">
                              <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?".$query2; ?>">Lakubi<br>(ラクビ)</a>
                            </span>
                          </strong>
                      <?php }else{ ?>
                            <strong>
                            <span style="font-size:13px" class="lbg">
                              <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi.php<?php echo "?".$query2; ?>">Lakubi<br>(ラクビ)</a>
                            </span>
                          </strong>
                      <?php } ?>
                        </p>
                        <p>&nbsp;</p>
                      </th>


                      <th style="background-color: #fff;">
                        <p style="text-align:center">
                          <img src="./img/n_img/crown_icon_02.png" width="30" alt="" />
                        </p>
                        <p style="text-align: center">
                        
                             <a target="_blank" href="http://xn--hdks4057bh4s.net/links/genki.php<?php echo "?".$query2; ?>">
                            <img src="./img/n_img/genki.png" alt="" />
                            </a>
  
                        </p>
                        <p style="text-align: center">
                        
                            <strong>
                            <span style="font-size:13px" class="lbg">
                              <a target="_blank" href="http://xn--hdks4057bh4s.net/links/genki.php<?php echo "?".$query2; ?>">善玉元気</a>
                            </span>
                          </strong>
                     
                        </p>
                        <p>&nbsp;</p>
                      </th>



                      <th style="background-color: #fff">
                        <p style="text-align:center">
                          <img src="./img/n_img/crown_icon_03.png" width="30" alt="" />
                        </p>
                        <p style="text-align: center">
                          <a target="_blank" href="http://xn--hdks4057bh4s.net/links/bise.php<?php echo "?".$query2; ?>">
                            <img src="./img/n_img/bise.jpg" alt="" />
                          </a>
                        </p>
                        <p style="text-align: center">
                          <strong>
                            <span style="font-size:13px" class="lbg">
                              <a target="_blank" href="http://xn--hdks4057bh4s.net/links/bise.php<?php echo "?".$query2; ?>">ビセラ</a>
                            </span>
                          </strong>
                        </p>
                        <p>&nbsp;</p>
                      </th>



                    <!-- 2行目 1日あたりの菌の量-->

                    <tr>
                      <td style="background-color:#7edcd6;vertical-align:middle;">
                        <p style="text-align: center">
                          <strong>乳酸菌の質</strong>
                        </p>
                      </td>
                      <td>
                        <p>
                            <img src="./img/n_img/r_check_01.png" alt="" />
                        </p>
                        <span>酪酸菌1700万個(1粒)</span>

                      </td>
                      <td>
                        <p style="text-align:center">
                          <img src="./img/n_img/r_check_01.png" alt="" />
                        </p>
                        <span>特許取得の乳酸菌発酵エキス</span>
                      </td>
                      <td>
                        <p style="text-align:center">
                          <img src="./img/n_img/r_check_02.png" alt="" />
                        </p>
                        
                      </td>
                    </tr>




                    <!-- 3行目 生きた菌が腸まで届くか-->

                    <tr>
                      <td style="background-color:#7edcd6;vertical-align:middle;">
                        <p style="text-align:center">
                          <strong>生きた菌が腸まで届くか</strong>
                        </p>
                      </td>
                      <td>
                      <p>
                        <img src="./img/n_img/r_check_01.png" alt="" />
                      </p>
                      <span>胃酸で死滅しない菌を使用</span>
                      </td>
                      <td>
                        <p style="text-align: center">
                          <img src="./img/n_img/r_check_01.png" alt="" />
                        </p>
                      <span>乳酸菌発酵エキスは胃酸の影響を受けない</span>
                      </td>
                      <td>
                        <p style="text-align: center">
                          <img src="./img/n_img/r_check_02.png" alt="" />
                        </p>
                        

                      </td>
                    </tr>



                    <!-- 4行目 科学的な根拠-->

                    <tr>
                      <td style="background-color:#7edcd6;vertical-align:middle;">
                        <p style="text-align:center">
                          <strong>配合されている成分の種類</strong>
                        </p>
                      </td>
                      <td>
                        <p>
                            <img src="./img/n_img/r_check_02.png" alt="" />
                        </p>
                        <span>酪酸菌・オリゴ糖・ビフィズス菌など</span>
                      </td>
                      <td>
                        <p>
                            <img src="./img/n_img/r_check_01.png" alt="" />
                        </p>
                        <span>有用成分752種、短鎖脂肪酸、水溶性食物繊維、ポリフェノールなど</span>
                      </td>
                      <td>
                      <p>
                            <img src="./img/n_img/r_check_02.png" alt="" />
                        </p>
                      <!-- <span>有胞子性乳酸菌・酪酸菌・酵素など</span> -->
                      <span>短鎖脂肪酸</span>
                      </td>
                    </tr>


                    <!-- 5行目 コストパフォーマンス-->

                    <tr>
                      <td style="background-color:#7edcd6;vertical-align:middle;">
                        <p style="text-align:center">
                          <strong>キャンペーン価格</strong>
                        </p>
                        <p style="text-align: center"></p>
                      </td>
                      <td>
                        <p style="text-align:center">
                          <img src="./img/n_img/r_check_01.png" alt="" />
                        </p>
                        <span>初回500円</span>

                      </td>
                      <td>
                        <p style="text-align:center">
                          <img src="./img/n_img/r_check_03.png" alt="" />
                        </p>
                        <span>初回2700円</span>
                      </td>
                      <td>
                        <p style="text-align:center">
                          <img src="./img/n_img/r_check_01.png" alt="" />
                        </p>
                        <span>初回500円</span>

                      </td>
                    </tr>
                   



                    <!-- 6行目 公式サイト-->

                    <tr>

                      <td style="background-color:#7edcd6;vertical-align:middle;">
                        <p style="text-align:center">
                          <strong>公式サイト</strong>
                        </p>
                        <p style="text-align: center"></p>
                      </td>

                      <td>
                        <p style="text-align:center">
                        <?php if(isset($_SESSION['switch']) && $_SESSION['switch'] == "on"){ ?>
                          <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?".$query2; ?>">
                            <img src="./img/n_img/btn_site_go_s.png" width="100%">
                          </a>
                       <?php }elseif(isset($_SESSION['switch']) && $_SESSION['switch'] == "off"){ ?>
                          <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?".$query2; ?>">
                            <img src="./img/n_img/btn_site_go_s.png" width="100%">
                          </a>
                      <?php }else{ ?>
                           <a target="_blank" href="http://xn--hdks4057bh4s.net/links/lakubi.php<?php echo "?".$query2; ?>">
                            <img src="./img/n_img/btn_site_go_s.png" width="100%">
                          </a>
                      <?php } ?>
                        </p>
                      </td>


                      <td>
                        <p style="text-align:center">
                       
                           <a target="_blank" href="http://xn--hdks4057bh4s.net/links/genki.php<?php echo "?".$query2; ?>">
                            <img src="./img/n_img/btn_site_go_s.png" width="100%">
                          </a>
                        </p>
                      </td>

                      <td>
                        <p style="text-align:center">
                          <a target="_blank" href="http://xn--hdks4057bh4s.net/links/bise.php<?php echo "?".$query2; ?>">
                            <img src="./img/n_img/btn_site_go_s.png" width="100%">
                          </a>
                        </p>
                      </td>



                    </tr>

                  </tbody>
                </table>