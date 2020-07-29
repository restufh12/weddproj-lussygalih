<?php  
require("connection.php");
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta charset="UTF-8">
    <title>Lussy & Galih wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Momen spesial untuk mengiringi pernikahan kami. Lussy-Galih" />
    <meta name="keywords" content="undangan digital, undangan online, undangan nikah, website undangan, pernikahan, wedding, marriage" />
    <meta name="author" content="weddingproject.my.id" />
    <meta name="robots" content="follow, index" />
    <meta property="og:image" content="assets/images/gallery/ogthumbnail.jpg">
    <meta property="og:image" itemprop="image" content="assets/images/gallery/ogthumbnail.jpg">
    <link itemprop="thumbnailUrl" href="assets/images/gallery/ogthumbnail.jpg"> <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> <link itemprop="url" href="assets/images/gallery/ogthumbnail.jpg"> </span>
    <meta property="og:image" content="assets/images/gallery/ogthumbnail.jpg" />
    <meta property="og:title" content="Pernikahan Lussy-Galih" />
    <meta property="og:description" content="Momen spesial untuk mengiringi pernikahan kami. Lussy-Galih" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <script type="text/javascript" src="vendor/jquery/jquery-1.8.2.js"></script>
    <script type='text/javascript'>
        $(function(){
            var overlay = $('<div id="overlay"></div>');
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').show();
            $('.close').click(function(){
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
        $('.x').click(function(){
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
            });
        });
    </script>
</head>

<body>
    <!-- POPUP LANDING -->
    <div class='popup'>
      <div class='cnt223'>
          <p><img src="assets/images/listvintopener.png" width="60%" style="text-align: center"></p>
          <p class="imgopenint"><img class='close' src="assets/images/gallery/openerimg.png" style="text-align: center"></p>
          <p style="text-align: center; line-height: normal;">Kepada Yth.<br><span style="font-size:12px">Bapak/Ibu/Saudara/i</span></p>
          <p style="color: #404040; font-size: 20px; font-weight:bold; padding-bottom:10px; border-radius:4px; text-align: center" id="write"></p>
      </p>
      <p><a href='#' id="unmute-sound" class='close'>Buka</a></p>
      <div style="clear: both;"></div>
      <p><img src="assets/images/listvintopener.png" width="60%" style="transform: rotate(180deg); text-align: center"></p>
      </div>
    </div>

    <!-- MUSIC -->
    <div class="music-box">
      <button class="music-box-toggle-btn">
        <audio id='song' loop>
            <source src="assets/audio/song_inlovewithyou_chrisbautistaangelinequinto.mp3">
        </audio>
        <button type="button" class="music" id="unmute2-sound">
            <img border="0" alt="" src="assets/images/soundgoldmusicoffwd.png"
                width="20" height="20">
        </button>
        <button type="button" class="music" id="mute-sound">
            <img border="0" alt="" src="assets/images/soundgoldmusicwd.png"
                width="20" height="20">
        </button>
      </button>
    </div>

    <div class="iconbar">
      <a class="tablink" onclick="openPage('Cover', this, '#1d3252')" id="defaultOpen"><img src="assets/images/de9tab1cover.png" width="35"><br><span>Home</span></a>
      <a class="tablink" onclick="openPage('Couple', this, '#1d3252')"><img src="assets/images/de9tab2couple.png" width="35"><br><span>Couple</span></a>
      <a class="tablink" onclick="openPage('Eventwd', this, '#1d3252')"><img src="assets/images/de9tab3event.png" width="35"><br><span>Event</span></a>
      <a class="tablink" onclick="openPage('Moment', this, '#1d3252')"><img src="assets/images/de9tab4moment.png" width="35"><br><span>Gallery</span></a>
      <a class="tablink" onclick="openPage('Quotewd', this, '#1d3252')"><img src="assets/images/de9tab5story.png" width="35"><br><span>Story+Wish</span></a>
    </div>

    <!-- Home -->
    <div id="Cover" class="tabcontent">
      <div class="corner1">
          <img src="assets/images/de9oraset1.png" alt="" width="100%">
      </div>

      <div class="corner2">
          <img src="assets/images/de9oraset2.png" alt="" width="100%">
      </div>

      <div class="corner3">
          <img src="assets/images/de9oraset3.png" alt="" width="100%">
      </div>

      <div class="corner4">
          <img src="assets/images/de9oraset4.png" alt="" width="100%">
      </div>

      <div id="homewd" class="contentwd">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
          <img src="assets/images/de9vintopwd.png" alt="" style="display: inline-block;" width="100%">
        </div>
        <div>
          <h2 style="color: #404040; font-size: 35px; font-family: Angelface; padding-top: 10px">The Wedding<br><span style="font-size:12px" class="explainbride">Wedding Announcement</span></h2>
        </div>
          <div class="borderpair">
                  <div class="namepair" style="line-height:210%; padding-top:60px; padding-bottom:60px">
                      <div style="padding-right:30px"><span class="fontfront">Lussy</span></div>
                      <div class="explainbride">dan</div>
                      <div style="padding-left:30px"><span class="fontfront">Galih</span></div>
                  </div>
          </div>
          <p style="color: #404040; font-weight:bold; padding-top:10px; padding-bottom:10px; border-radius:4px" id="write"></p>
        <div>
          <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=MnJzYTRpNTUybWluZzVycTgydGxicjd2dXAgYmxrb2M5ZHFvcGs3a2trNm9nNnAzNDlzaDRAZw&amp;tmsrc=blkoc9dqopk7kkk6og6p349sh4%40group.calendar.google.com" target="_blank" style="background-color: #404040; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>Save The Date</strong></a>
          <p style="color: #404040; font-size: 30px; font-family: Angelface; padding-top: 1px"> 20 Agustus 2020 <br><span style="font-size:12px"
                  class="explainbride">Bandung, Jawa Barat</span></p>
        </div>

        <div class="ornamentbg" style="width: 100%; margin: 0px; text-align: center;">
          <img src="assets/images/de9swirlwd.png" alt="" style="display: inline-block;">
        </div>

        <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="assets/images/de9vinbtmwd.png" alt="" style="display: inline-block;">
        </div>
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Couple -->
    <div id="Couple" class="tabcontent">
      <div class="corner1">
          <img src="assets/images/de9oraset1.png" alt="" width="100%">
      </div>

      <div class="corner2">
          <img src="assets/images/de9oraset2.png" alt="" width="100%">
      </div>

      <div class="corner3">
          <img src="assets/images/de9oraset3.png" alt="" width="100%">
      </div>

      <div class="corner4">
          <img src="assets/images/de9oraset4.png" alt="" width="100%">
      </div>

      <div id="bridewd" class="contentwd">

          <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
              <img src="assets/images/de9vintopwd.png" alt="" style="display: inline-block;">
          </div>

          <div>
              <p style="font-size: 30px; font-family: Angelface; padding-top: 30px; color: #404040">Bismillahirrahmanirrahim</p>
              <div class="explainbride">Assalamu`alaikum Warahmatullahi Wabarakatuh<br><br>
                  Maha Suci Allah<br>yang telah menciptakan makhluk-Nya<br>berpasang-pasangan.<br>Ya Allah semoga ridho-Mu tercurah<br>mengiringi pernikahan putra-putri kami:</div>
          </div>
          <br>
          <div><img src="assets/images/gallery/wdbride.png" width="40%" alt=""><br><span class="bridefont">Lussy Zilviani S.Sos<span style="font-size: 14px"></span></span>
          </div>
          <div class="explainbride">Putri dari<br>Bpk. XXX & Ibu XXX</div>
          <br>
          <div class="explainbride">dan</div>
          <br>
          <div><img src="assets/images/gallery/wdgroom2.png" width="40%" alt=""><br><span class="bridefont">Galih Faishal S.H., M.H.<span style="font-size: 14px"></span></span>
          </div>
          <div class="explainbride">Putra dari<br>Bpk. XXX & Ibu XXX</div>
          <br>
          <br>
          <br>
          <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
              <img src="assets/images/de9vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
          </div>
          <br>
          <br>
          <br>
      </div>
    </div>

    <!-- Event -->
    <div id="Eventwd" class="tabcontent">
      <div class="corner1">
          <img src="assets/images/de9oraset1.png" alt="" width="100%">
      </div>

      <div class="corner2">
          <img src="assets/images/de9oraset2.png" alt="" width="100%">
      </div>

      <div class="corner3">
          <img src="assets/images/de9oraset3.png" alt="" width="100%">
      </div>

      <div class="corner4">
          <img src="assets/images/de9oraset4.png" alt="" width="100%">
      </div>

      <div id="homewd" class="contentwd">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="assets/images/de9vintopwd.png" alt="" style="display: inline-block;" width="100%">
        </div>

        <h3 style="font-family: Angelface; font-size: 35px; color: #404040">Event</h3>
        <p class="explainbride">The Happy Day!</p>
        <br>
        <p style="font-family: dosis; color: #404040">Dengan memohon Rahmat & ridho Allah SWT , serta tanpa mengurangi rasa hormat, mengingat dalam kondisi pandemi saat ini, izinkan kami memohon do'a restu pada acara akad putra-putri kami</p>

        <div class="cardevent">
          <div class="row">
            <div class="column">
              <div class="card">
                <div class="containerijabwd">
                  <table style="color: #404040">
                      <tr>
                          <th style="width: 20%"><img src="assets/images/de9wdakad.png" width="100%"></th>
                          <th></th>
                          <th style="width: 80%"><p style="font-size: 18px; font-family: dosis; color: #404040"><b>Akad Pernikahan</b></p></th>
                      </tr>
                      <tr>
                          <td></td>
                          <td><img src="assets/images/de9tab1cover.png" width="15"></td>
                          <td>Kamis, 20 agustus 2020</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><br></td>
                          <td><br></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><img src="assets/images/de9tab1cover.png" width="15"></td>
                          <td>15.30 WIB</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><br></td>
                          <td><br></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><img src="assets/images/de9tab1cover.png" width="15"></td>
                          <td>Hotel Malaka,</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td>Jl. Halimun No.36, Malabar,</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td>Kec. Lengkong,</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td>Kota Bandung,</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td>Jawa Barat</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="containerweddingwd">
                  <table align="right" style="color: #404040">
                      <tr>
                          <th  align="right" style="width: 80%;"><p style="font-size: 18px; font-family: dosis; color: #404040"><b>Resepsi Pernikahan</b></p></th>
                          <th></th>
                          <th style="width: 20%"><img src="assets/images/de9wdresepsi.png" width="100%"></th>
                      </tr>
                      <tr align="right">
                          <td>Kamis, 20 agustus 2020</td>
                          <td><img src="assets/images/de9tab1cover.png" width="15"></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><br></td>
                          <td><br></td>
                          <td></td>
                      </tr>
                      <tr align="right">
                          <td>17.00 WIB - Selesai</td>
                          <td><img src="assets/images/de9tab1cover.png" width="15"></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><br></td>
                          <td><br></td>
                          <td></td>
                      </tr>
                      <tr align="right">
                          <td>Hotel Malaka,</td>
                          <td><img src="assets/images/de9tab1cover.png" width="15"></td>
                          <td></td>
                      </tr>
                      <tr align="right">
                          <td>Jl. Halimun No.36, Malabar,</td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr align="right">
                          <td>Kec. Lengkong,</td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr align="right">
                          <td>Kota Bandung,</td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr align="right">
                          <td>Jawa Barat</td>
                          <td></td>
                          <td></td>
                      </tr>
                  </table>
                  <div style="clear: both;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div style="clear:both"></div>

        <br>

        <p class="explainbride">Mohon maaf, Sehubungan dengan adanya wabah Covid-19, kami akan menyelenggarakan acara pernikahan dengan mengundang saudara dan kerabat terdekat saja. Semoga wabah Covid-19 segera berlalu dan kita semua diberikan kesehatan. Terima kasih.</p>

        <br>
        <div id="clockdiv">
          <div>
              <span class="days" id="day"></span>
              <div class="smalltext">Days</div>
          </div>
          <div>
              <span class="hours" id="hour"></span>
              <div class="smalltext">Hours</div>
          </div>
          <div>
              <span class="minutes" id="minute"></span>
              <div class="smalltext">Minutes</div>
          </div>
          <div>
              <span class="seconds" id="second"></span>
              <div class="smalltext">Seconds</div>
          </div>
        </div>

        <p id="demo"></p>

        <p class="explainbride">Merupakan suatu kehormatan dan kebahagiaan<br>bagi kami apabila Bapak/Ibu/Saudara(i)<br>berkenan untuk memberikan do'a restu<br>kepada kedua mempelai.</p>
        <br>
        <br>

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.696276832866!2d107.6210723!3d-6.9268616!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d537abcfc3%3A0x19846e4e4f79b829!2sHotel%20Malaka!5e0!3m2!1sid!2sid!4v1595998907102!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <br>
        <div><a href="https://g.page/malakahotel?share" target="_blank" style="background-color: #404040; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>Open Map</strong></a>
        </div>
        <br>

        <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="assets/images/de9vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
        </div>
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Gallery -->
    <div id="Moment" class="tabcontent">
      <div class="corner1">
          <img src="assets/images/de9oraset1.png" alt="" width="100%">
      </div>

      <div class="corner2">
          <img src="assets/images/de9oraset2.png" alt="" width="100%">
      </div>

      <div class="corner3">
          <img src="assets/images/de9oraset3.png" alt="" width="100%">
      </div>

      <div class="corner4">
          <img src="assets/images/de9oraset4.png" alt="" width="100%">
      </div>

      <div id="homewd" class="contentwd">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="assets/images/de9vintopwd.png" alt="" style="display: inline-block;" width="100%">
        </div>

        <h3 style="font-family: Angelface; font-size: 35px; color: #404040">Gallery</h3>
        <p class="explainbride">Momen Bahagia Lussy-Galih</p>

        <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">
          <div class="w3-row w3-grayscale-min">
            <div class="w3-half">
              <img src="assets/images/gallery/gal01.jpg" style="width:100%" onclick="onClick(this)" alt="Lussy-Galih">
              <img src="assets/images/gallery/gal03.jpg" style="width:100%" onclick="onClick(this)" alt="Lussy-Galih">
              <img src="assets/images/gallery/gal05.jpg" style="width:100%" onclick="onClick(this)" alt="Lussy-Galih">
            </div>
            <div class="w3-half">
              <img src="assets/images/gallery/gal02.jpg" style="width:100%" onclick="onClick(this)" alt="Lussy-Galih">
              <img src="assets/images/gallery/gal04.jpg" style="width:100%" onclick="onClick(this)" alt="Lussy-Galih">
              <img src="assets/images/gallery/gal06.jpg" style="width:100%" onclick="onClick(this)" alt="Lussy-Galih">
            </div>
          </div>
        </div>

        <div>
          <br>
          <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="assets/images/de9vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
    </div>


    <!-- Story And Wish -->
    <div id="Quotewd" class="tabcontent">
      <div class="corner1">
          <img src="assets/images/de9oraset1.png" alt="" width="100%">
      </div>
      <div class="corner2">
          <img src="assets/images/de9oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
          <img src="assets/images/de9oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
          <img src="assets/images/de9oraset4.png" alt="" width="100%">
      </div>
      <div id="homewd" class="contentwd">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="assets/images/de9vintopwd.png" alt="" style="display: inline-block;" width="100%">
        </div>

        <h3 style="font-family: Angelface; font-size: 35px; color: #404040">Story</h3>
        <p class="explainbride">Kisah Bahagia Lussy-Galih</p>
        <p class="explainbride">--</p>
        <p class="explainbride">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</p>
        <p class="explainbride"><b>QS. Ar-Rum: 21</b></p>
        <p class="explainbride">--</p>

        <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">
          <div class="timeline">
            <div class="container left">
              <div class="content">
                <h2><span style="font-size: 13px">Maret</span> 2019</h2>
                <p>Pertemuan pertama kami super klasik , bertemu di salah satu area kerja kami, dia duduk tepat di sampingku sementara aku sebagai pendatang baru masih celingukan.. dan kami berdua hanya sempat saling berkenalan dan berpisah</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h2><span style="font-size: 13px">April</span> 2019</h2>
                <p>1 bulan kemudian kami baru bertemu lagi di area kerja yang berbeda dari sebelumnya.. dia langsung meminta kontak ku dengan dalih butuh ahli gizi untuk club sepak bola yang dia ikuti.. yang pada akhirnya membuat kami akrab dan sharing banyak hal..</p>
              </div>
            </div>
            <div class="container left">
              <div class="content">
                <h2><span style="font-size: 13px">September</span> 2019</h2>
                <p>4 bulan berlalu tanpa status, kabar baiknya kami langsung memantapkan niat kami untuk ke jenjang yang lebih serius.. kami memutuskan untuk bertunangan terlebih dahulu..</p>
              </div>
            </div>
            <div class="container right">
              <div class="content">
                <h2><span style="font-size: 13px">Juli</span> 2019</h2>
                <p>Hari yang baik ini adalah hari yang sudah kami bicarakan sejak setelah pertunangan berlangsung.. hari ini petualangan kami akan dimulai.. semoga Allah SWT memberikan keberkahan untuk pernikahan kami..</p>
              </div>
            </div>
          </div>


          <br>

          <div class="">
              <p class="explainbride">Ucapan Selamat & Doa untuk<br>Lussy-Galih</p>
          </div>

          <div class="wishspace">
            <div class="wishcontainer">
              <form action="#" method="post">
                <label for="nama">Nama</label>
                <input type="text" id="Nama" name="Nama" placeholder="Nama.." required>

                <label for="ucap" class="tooltip">Ucapan<span class="tooltiptext">Sampaikan ucapan selamat /doa / harapan terbaik untuk kedua mempelai</span></label>
                <textarea id="Komentar" name="Komentar" placeholder="Ucapan Doa & Harapan.." style="height:100px" required></textarea>

                <button type="button" name="submit" class="btnsubmit" onclick="fnSendMessage()">Kirim</button>
              </form>
            </div>
            <br>
            <div class="wishdisplay" id="divwishdisplay">
              <?php  
              $vStrSQL  = "SELECT * FROM comment ORDER BY RunNo DESC";
              $vExecute = $conn->query($vStrSQL);
              while($vData = $vExecute->fetch_assoc()) : ?>
                <div class="wishdisplayname"><?= $vData['Nama']?></div>
                <div class="" style="padding-bottom: 10px"><?= $vData['Komentar']?></div>
              <?php endwhile; ?>
            </div>
          </div>

          <div>
            <br>
            <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="assets/images/de9vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>

      </div>
    </div>

    <script>
      function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
      document.getElementById('mute-sound').style.display = 'none';
      document.getElementById('unmute-sound').addEventListener('click', function (event) {
          document.getElementById('unmute2-sound').style.display = 'none';
          document.getElementById('mute-sound').style.display = 'inline-block';
          document.getElementById('song').play();
      });
          
      document.getElementById('unmute2-sound').addEventListener('click', function (event) {
          document.getElementById('unmute2-sound').style.display = 'none';
          document.getElementById('mute-sound').style.display = 'inline-block';
          document.getElementById('song').play();
      });

      document.getElementById('mute-sound').addEventListener('click', function (event) {
          document.getElementById('mute-sound').style.display = 'none';
          document.getElementById('unmute2-sound').style.display = 'inline-block';
          document.getElementById('song').pause();
      });


      // Script to open and close sidebar
      function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("myOverlay").style.display = "block";
      }

      function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("myOverlay").style.display = "none";
      }

      var deadline = new Date("august 20, 2020 15:30:00").getTime();
      var x = setInterval(function () {

          var now = new Date().getTime();
          var t = deadline - now;
          var days = Math.floor(t / (1000 * 60 * 60 * 24));
          var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((t % (1000 * 60)) / 1000);
          document.getElementById("day").innerHTML = days;
          document.getElementById("hour").innerHTML = hours;
          document.getElementById("minute").innerHTML = minutes;
          document.getElementById("second").innerHTML = seconds;
          if (t < 0) {
              clearInterval(x);
              document.getElementById("demo").innerHTML = "HAPPY WEDDING";
              document.getElementById("day").innerHTML = '0';
              document.getElementById("hour").innerHTML = '0';
              document.getElementById("minute").innerHTML = '0';
              document.getElementById("second").innerHTML = '0';
          }
      }, 1000);


      function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
      }

      var sn = getParameterByName('to');

      document.getElementById("write").innerHTML = sn;

      function fnSendMessage() {
        let Nama     = $("#Nama").val();
        let Komentar = $("#Komentar").val();
        if(Nama==""){
          $("#Nama").focus();
          return false;
        }
        if(Komentar==""){
          $("#Komentar").focus();
          return false
        }
        $.ajax({
          type: "POST",
          url : "sendmessage.php",
          data: {
            Nama : Nama,
            Komentar : Komentar
          },
          dataType: "json",
          success: function (response) {
            if(response.status=="1"){
              let commentcontent = '<div class="wishdisplayname">'+response.Nama+'</div><div class="" style="padding-bottom: 10px">'+response.Komentar+'</div>';
              $("#divwishdisplay").prepend(commentcontent);

              $("#Nama").prop('disabled', true);
              $("#Komentar").prop('disabled', true);
              $("#Nama").val('');
              $("#Komentar").val('');
            } else {
              alert("Gagal Kirim Pesan");
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
          }
        });
      }
    </script>
    <script type="text/javascript" src="vendor/jquery/jquery-1.10.1.min.js"></script>
</body>
</html>
