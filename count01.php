<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>カウントダウンタイマー01</title>
</head>

<body>


    <div class="countdown cdt">
    <?php
        $nowMonth = date("n")."月";
        ?>
        
        <p class="blinking">
        <?php echo $nowMonth; ?>
        限定！</p><br>
        <p class=""><span style="font-size:24px;">初回500円の特別キャンペーン</span></p><br>
        
        <div class="countdown_wrapper">
        <span class="cdt_date" id="cdt_txt"></span>
        <span class="cdt_date" id="cdt_date"></span>

        </div> 
</div>

  
<script>
       function CountdownTimer(elm, tl, mes) {
          this.initialize.apply(this, arguments);
        }
        CountdownTimer.prototype = {
          initialize: function (elm, tl, mes) {
            this.elem = document.getElementById(elm);
            this.tl = tl;
            this.mes = mes;
          },
          countDown: function () {
            var timer = '';
            var today = new Date();
            var day = Math.floor((this.tl - today) / (24 * 60 * 60 * 1000));
            var hour = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
            var min = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / (60 * 1000)) % 60;
            var sec = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / 1000) % 60 % 60;
            var milli = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / 10) % 100;
            var me = this;

            if ((this.tl - today) > 0) {
              if (day) timer += '<span class="cdt_num">' + day + '</span><span class="cdt_day">日</span>';
              if (hour) timer += '<span class="cdt_num">' + hour + '</span><span class="cdt_day">時間</span>';
              timer += '<span class="cdt_num">' + this.addZero(min) + '</span><span class="cdt_day">分</span><span class="cdt_num">' +
                this.addZero(sec) + '</span><span class="cdt_day">秒</span><span class="cdt_num">' + this.addZero(milli) + '</span>';
              this.elem.innerHTML = timer;
              tid = setTimeout(function () {
                me.countDown();
              }, 10);
            } else {
              this.elem.innerHTML = this.mes;
              return;
            }
          },
          addZero: function (num) {
            return ('0' + num).slice(-2);
          }
        }

        // ▼ 開始日時と終了日時を入力
        function CDT() {

          var today = new Date();
          var myD = today.getTime(); // 1970/1/1午前0時から現在までのミリ秒
          var start = new Date('2019/3/18/ 0:00:00'); // 開始日時を入力
          var myS = start.getTime(); // 1970/1/1午前0時からの開始日時までのミリ秒
          var end = new Date('2019/3/31/ 23:59:59'); // 終了日時を入力
          var myE = end.getTime(); // 1970/1/1午前0時から終了日時までのミリ秒



          // 開始までor終了までor終了後のカウントダウンタイマー前テキスト
          if (myS <= myD && myE >= myD) {
            var text = '<span>終了</span><span>まで</span>';
            var tl = new Date(end);
          } // 終了まで
          else if (myS > myD) {
            var text = '<span>開催</span><span>まで</span>';
            var tl = new Date(start);
          } // 開始まで
          else {
            var text = '';
          } // 終了後

          var timer = new CountdownTimer('cdt_date', tl, '<small>終了しました。</small>');
          timer.countDown();
          target = document.getElementById("cdt_txt");
          target.innerHTML = text;
        }

        window.onload = function () {
          CDT();
        }
        </script>


</body>
</html>
