<table class="dsc2item col4" cellspacing="1">
    <tbody>



        <!-- 1行目 商品名-->
        <tr>
            <th style="background-color:#7edcd6">
                <p style="text-align:center">
                    <strong>商品名</strong>
                </p>
            </th>

            <!--★★★★★★★★商品画像-->


            <th style="background-color: #fff">


                <p>
                    <img src="./img/n_img/crown_icon_01.png" width="50" alt="" />
                </p>
                <p>
                    <?php if (isset($_SESSION['switch']) && $_SESSION['switch'] == "on") { ?>
                    <a target="_blank"
                        href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">
                        <img src="./img/lakubi-new.jpg" alt="" />
                    </a>

                    <?php } elseif (isset($_SESSION['switch']) && $_SESSION['switch'] == "off") { ?>
                    <a target="_blank"
                        href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">
                        <img src="./img/lakubi-new.jpg" alt="" />
                    </a>
                    <?php } else { ?>
                    <a target="_blank"
                        href="http://xn--hdks4057bh4s.net/links/lakubi.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">
                        <img src="./img/lakubi-new.jpg" alt="" />
                    </a>
                    <?php } ?>
                </p>
                <p>
                    <?php if (isset($_SESSION['switch']) && $_SESSION['switch'] == "on") { ?>
                    <strong>
                        <span style="font-size:15px" class="lbg">
                            <a target="_blank"
                                href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">Lakubi</a>
                        </span>
                    </strong>

                    <?php } elseif (isset($_SESSION['switch']) && $_SESSION['switch'] == "off") { ?>
                    <strong>
                        <span style="font-size:15px" class="lbg">
                            <a target="_blank"
                                href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">Lakubi</a>
                        </span>
                    </strong>
                    <?php } else { ?>
                    <strong>
                        <span style="font-size:15px" class="lbg">
                            <a target="_blank"
                                href="http://xn--hdks4057bh4s.net/links/lakubi.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">Lakubi</a>
                        </span>
                    </strong>
                    <?php } ?>
                </p>
            </th>

            <th style="background-color: #fff">
                <p>
                    <img src="./img/n_img/crown_icon_03.png" width="50" alt="" />
                </p>
                <p>
                    <a target="_blank"
                        href="http://xn--hdks4057bh4s.net/links/bise.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">
                        <img src="./img/n_img/bise.jpg" alt="" />
                    </a>
                </p>
                <p>
                    <strong>
                        <span style="font-size:15px" class="lbg">
                            <a target="_blank"
                                href="http://xn--hdks4057bh4s.net/links/bise.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">ビセラ</a>
                        </span>
                    </strong>
                </p>
            </th>

            <th style="background-color: #fff">
                <p>
                    <img src="./img/n_img/crown_icon_02.png" width="50" alt="" />
                </p>
                <p>
                    <a target="_blank"
                        href="http://xn--hdks4057bh4s.net/links/beqtto.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">
                        <img src="./img/beqtto.jpg" alt="" />
                    </a>
                </p>
                <p>
                    <strong>
                        <span style="font-size:15px" class="lbg">
                            <a target="_blank"
                                href="http://xn--hdks4057bh4s.net/links/beqtto.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">リキュット</a>
                        </span>
                    </strong>
                </p>
            </th>

        </tr>


        <!-- 2行目 1日あたりの菌の量 -->

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
                <span>酪酸菌約1700万個</span>
            </td>
            <td>
                <p>
                    <img src="./img/n_img/r_check_01.png" alt="" />
                </p>
                <span>「GMP」基準に合格</span>
            </td>

            <td>
                <p>
                    <img src="./img/n_img/r_check_02.png" alt="" />
                </p>
                <span>29種の乳酸菌</span>
            </td>

        </tr>



        <!-- 3行目 生きた菌が腸まで届くか-->

        <tr>
            <td style="background-color:#7edcd6;vertical-align:middle;">
                <p>
                    <strong>生きた菌が<br>腸まで届くか</strong>
                </p>
            </td>
            <td>
                <p>
                    <img src="./img/n_img/r_check_01.png" alt="" />
                </p>
                <span>胃酸で死滅しない菌を使用</span>
            </td>

            <td>
                <p>
                    <img src="./img/n_img/r_check_02.png" alt="" />
                </p>
                <span>特殊加工カプセルを採用</span>
            </td>

            <td>
                <p>
                    <img src="./img/n_img/r_check_02.png" alt="" />
                </p>
                <span>熱や胃酸に強い有胞子性乳酸菌</span>
            </td>
        </tr>


        <!-- 4行目 入っている菌の種類の数 -->


        <tr>
            <td style="background-color:#7edcd6;vertical-align:middle;">
                <p>
                    <strong>配合されている<br>成分の種類</strong>
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
                    <img src="./img/n_img/r_check_02.png" alt="" />
                </p>
                <span>短鎖脂肪酸・ラクリス菌・EC-12・ナノ乳酸菌</span>
            </td>
            <td>
                <p>
                    <img src="./img/n_img/r_check_02.png" alt="" />
                </p>
                <span>有胞子性乳酸菌・酪酸菌・酵素など</span>
            </td>
        </tr>




        <!-- 5行目 キャンペーン価格 -->

        <tr>
            <td style="background-color:#7edcd6;vertical-align:middle;">
                <p>
                    <strong>特別オファー</strong>
                </p>

            </td>
            <td>
                <p>
                    <img src="./img/n_img/r_check_01.png" alt="" />
                </p>
                <small>初回980円(税込)</small>
            </td>
            <td>
                <p>
                    <img src="./img/n_img/r_check_01.png" alt="" />
                </p>
                <span>初回500円(税込)</span>
            </td>
            <td>
                <p>
                    <img src="./img/n_img/r_check_01.png" alt="" />
                </p>
                <span>初回500円(税込)</span>
            </td>
        </tr>





        <!-- 6行目 公式サイト-->

        <tr>

            <td style="background-color:#7edcd6; vertical-align:middle;">
                <p style="text-align:center">
                    <strong>公式サイト</strong>
                </p>
                <p></p>
            </td>

            <td>
                <?php if (isset($_SESSION['switch']) && $_SESSION['switch'] == "on") { ?>
                <a target="_blank"
                    href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                    target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_s.png" width="160" />
                </a>
                <?php } elseif (isset($_SESSION['switch']) && $_SESSION['switch'] == "off") { ?>
                <a target="_blank"
                    href="http://xn--hdks4057bh4s.net/links/lakubi_on.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                    target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_s.png" width="160" />
                </a>
                <?php } else { ?>
                <a target="_blank"
                    href="http://xn--hdks4057bh4s.net/links/lakubi.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                    target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_s.png" width="160" />
                </a>
                <?php } ?>

            </td>

            <td>
                <p>
                    <a target="_blank"
                        href="http://xn--hdks4057bh4s.net/links/bise.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">
                        <img src="./img/n_img/btn_site_go_s.png" alt="" width="160">
                    </a>
                </p>
            </td>

            <td>
                <p>
                    <a target="_blank"
                        href="http://xn--hdks4057bh4s.net/links/beqtto.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>">
                        <img src="./img/n_img/btn_site_go_s.png" alt="" width="160">
                    </a>
                </p>
            </td>

    </tbody>
</table>