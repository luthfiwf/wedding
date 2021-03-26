<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>A & L </title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- fontawesome -->
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <!-- main css -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  <!-- default skin -->
  <link rel="stylesheet" class="alternate-style" type="text/css" href="assets/css/skins/pink.css">
  <!-- thema -->
  <link rel="stylesheet" type="text/css" href="assets/css/setting.css">
  <!-- aos -->
  <link rel="stylesheet" type="text/css" href="assets/css/aos.css">
</head>

<body>
  <?php
  include "admin/koneksi/koneksi.php";
  ?>
  <!-- preloader -->
  <div class="preloader">
    <div class="loader">
      <i class="fas fa-heart "></i>
    </div>
  </div>
  <!-- end preloader -->

  <!-- header -->
  <div class="header">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="logo">
          <a href="index.html"> A & L</a>
        </div>
        <div class="hamburger-btn">
          <span></span>
        </div>
        <div class="nav">
          <ul>
            <li> <a href="" data-scroll-nav="0" class="active">Home</a></li>
            <li> <a href="" data-scroll-nav="1">Pasangan</a></li>
            <li> <a href="" data-scroll-nav="2">Cerita</a></li>
            <li> <a href="" data-scroll-nav="3">Acara</a></li>
            <li> <a href="" data-scroll-nav="4">Gallery</a></li>
            <li> <a href="" data-scroll-nav="5">Buku tamu </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- endheader -->

  <!-- home -->
  <section class="home-section" data-scroll-index="0">
    <!-- slide -->
    <div class="slide active" style="background-image: url('assets/img/slides/slide-1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="home-content">
            <p>Kami Akan Menikah</p>
            <h1>Amel & Lutfi</h1>
            <span>1 Agustus 2021</span>

          </div>

        </div>
      </div>
    </div>

    <!-- endslide -->
    <!-- slide -->
    <div class="slide" style="background-image: url('assets/img/slides/slide-2.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="home-content">
            <p>Kami Akan Menikah</p>
            <h1>Amel & Lutfi</h1>
            <span>1 Agustus 2021</span>

          </div>

        </div>
      </div>
    </div>
    <!-- endslide -->
    <!-- slide -->
    <div class="slide" style="background-image: url('assets/img/slides/slide-3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="home-content">
            <p>Kami Akan Menikah</p>
            <h1>Amel & Lutfi</h1>
            <span>1 Agustus 2021</span>

          </div>
        </div>
      </div>
    </div>
    <!-- endslide -->

  </section>
  <!-- endhome -->

  <!-- countdown -->
  <section class="countdown">
    <div class="container">
      <div class="row">
        <div class="section-tittle" data-aos="zoom-in">
          <div class="con">
            <div class="count">
              <span id="hari">00</span>
              HARI
            </div>
            <div class="count">
              <span id="jam">00</span>
              JAM
            </div>
            <div class="count">
              <span id="menit">00</span>
              MENIT
            </div>
            <div class="count">
              <span id="detik">00</span>
              DETIK
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- endcountdown -->




  <!-- couple -->
  <section class="couple-section" data-scroll-index="1">
    <div class="container">
      <div class="row">
        <div class="section-tittle" data-aos="zoom-in">
          <h2 class="samb">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ </h2>
          <p> Assalamu`alaikum Warahmatullohi Wabarakatuh <br> <span>Maha Suci Allah yang telah menciptakan Makhluk-nya berpasang-pasangan. Ya Allah semoga ridhomu tercurah mengiringi pernikahan kami</span></p>
        </div>
      </div>

      <div class="row">
        <div class="couple">
          <img src="assets/img/bride.jpg" alt="Happy Couple" data-aos="fade-down">
          <h3 data-aos="fade-down">Amel Purnamasari</h3>
          <p data-aos="fade-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti a veritatis corrupti facere voluptates.
            Consequuntur maxime quasi delectus obcaecati eveniet beatae deleniti veritatis, doloribus suscipit eos amet molestiae, officia commodi!</p>
          <div class="social-icons" data-aos="fade-up">
            <a href=" #" title="facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" title="twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" title="instagram">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
        <div class="couple">
          <i class="fas fa-heart"></i>
          <img src="assets/img/groom.jpg" alt="Happy Couple" data-aos="fade-up">
          <h3 data-aos="fade-up">Lutfi Waziirul Fazri</h3>
          <p data-aos="fade-down">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti a veritatis corrupti facere voluptates.
            Consequuntur maxime quasi delectus obcaecati eveniet beatae deleniti veritatis, doloribus suscipit eos amet molestiae, officia commodi!</p>
          <div class="social-icons" data-aos="fade-down">
            <a href="#" title="facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" title="twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" title="instagram">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- end couple -->

  <!-- story -->
  <section class="story-section" data-scroll-index="2">
    <div class="container">
      <div class="row">
        <div class="section-tittle" data-aos="zoom-in">
          <h2> Our Love Story</h2>
        </div>
      </div>
      <div class="row">
        <div class="story-content">
          <div class="row">
            <!-- story item start -->
            <div class="story-item">
              <i class="fas fa-heart"></i>
              <div class="story-text" data-aos="fade-up" data-aos-duration="2000">
                <h3> First Meet</h3>
                <span class="date"> 22 Feb 2016</span>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit molestias ratione totam soluta distinctio exercitationem excepturi id praesentium accusantium nostrum!</p>
              </div>
              <div class="story-img" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                <img src="assets/img/story/story-1.jpg" alt="couple love story">
              </div>
            </div>
            <!-- story item end -->
            <!-- story item start -->
            <div class="story-item">
              <i class="fas fa-heart"></i>
              <div class="story-text" data-aos="fade-up" data-aos-duration="2000">
                <h3> First Date</h3>
                <span class="date"> 25 Feb 2016</span>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit molestias ratione totam soluta distinctio exercitationem excepturi id praesentium accusantium nostrum!</p>
              </div>
              <div class="story-img" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                <img src="assets/img/story/story-2.jpg" alt="couple love story">
              </div>
            </div>
            <!-- story item end -->
            <!-- story item start -->
            <div class="story-item">
              <i class="fas fa-heart"></i>
              <div class="story-text" data-aos="fade-up" data-aos-duration="2000">
                <h3> Proposal</h3>
                <span class="date"> 22 Feb 2017</span>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit molestias ratione totam soluta distinctio exercitationem excepturi id praesentium accusantium nostrum!</p>
              </div>
              <div class="story-img" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                <img src="assets/img/story/story-3.jpg" alt="couple love story">
              </div>
            </div>
            <!-- story item end -->
            <!-- story item start -->
            <div class="story-item">
              <i class="fas fa-heart"></i>
              <div class="story-text" data-aos="fade-up" data-aos-duration="2000">
                <h3> Engangement</h3>
                <span class="date"> 10 Okt 2020</span>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit molestias ratione totam soluta distinctio exercitationem excepturi id praesentium accusantium nostrum!</p>
              </div>
              <div class="story-img" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                <img src="assets/img/story/story-4.jpg" alt="couple love story">
              </div>
            </div>
            <!-- story item end -->
          </div>
        </div>
      </div>
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -10 1430 320">
      <path fill="#fff" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,229.3C384,213,480,139,576,106.7C672,75,768,85,864,106.7C960,128,1056,160,1152,192C1248,224,1344,256,1392,272L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg> -->

  </section>
  <!-- endstrory -->

  <!-- event -->
  <section class="event-section" data-scroll-index="3">

    <div class="container">
      <div class="row">
        <div class="section-tittle" data-aos="zoom-in">
          <h2>Celebrate our love</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- item event start -->
        <div class="event-item">
          <div class="event-item-inner" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="600" data-aos-offset="0">
            <h3>Akad</h3>
            <span class="date">1 Agustus 2021</span>
            <span class="time">08:00 - 09:00 PM</span>
            <p>{ Villa Joglo }</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint molestiae labore quae sunt doloremque ut, at veniam fugit maiores iure.</p>
            <img src="assets/img/icons/flower.svg" alt="event">
          </div>
        </div>
        <!-- item event end -->
        <!-- item event start -->
        <div class="event-item">
          <div class="event-item-inner" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="700" data-aos-offset="0">
            <h3>Resepsi</h3>
            <span class="date">1 Agustus 2021</span>
            <span class="time">10:00 - 14:00 PM</span>
            <p>{ Villa Joglo }</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint molestiae labore quae sunt doloremque ut, at veniam fugit maiores iure.</p>
            <img src="assets/img/icons/flower.svg" alt="event">
          </div>
        </div>
        <!-- item event end -->
      </div>

    </div>
  </section>

  <!-- end-event -->
  <!-- maps -->
  <section class="maps">
    <div class="container">
      <div class="row">
        <div class="section-tittle" data-aos="zoom-in">
          <h2>Find Us on Maps</h2>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="maps-detail">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15845.318206171962!2d107.5751869!3d-6.8510426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc4e9cf6c4d9b638f!2sVilla%20Joglo%20Sariwangi!5e0!3m2!1sid!2sid!4v1616058592523!5m2!1sid!2sid" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- endmaps -->

  <!-- gallery -->
  <section class="gallery-section" data-scroll-index="4">

    <div class="container">
      <div class="row">
        <div class="section-tittle" data-aos="zoom-in">
          <h2>Our Memories</h2>
        </div>
      </div>
      <div class="row">
        <!-- gallery item start -->
        <div class=" gallery-item">
          <div class="gallery-item-inner" data-aos="fade-in" data-aos-duration="3000">
            <img src="assets/img/gallery/thumb/1.jpg" alt="couple gallery" data-large="assets/img/gallery/large/1.jpg">
          </div>
        </div>
        <!-- gallery item end -->
        <!-- gallery item start -->
        <div class="gallery-item">
          <div class="gallery-item-inner" data-aos="fade-in" data-aos-duration="3000">
            <img src="assets/img/gallery/thumb/2.jpg" alt="couple gallery" data-large="assets/img/gallery/large/2.jpg">
          </div>
        </div>
        <!-- gallery item end -->
        <!-- gallery item start -->
        <div class="gallery-item">
          <div class="gallery-item-inner" data-aos="fade-in" data-aos-duration="3000">
            <img src="assets/img/gallery/thumb/3.jpg" alt="couple gallery" data-large="assets/img/gallery/large/3.jpg">
          </div>
        </div>
        <!-- gallery item end -->
        <!-- gallery item start -->
        <div class="gallery-item">
          <div class="gallery-item-inner" data-aos="fade-in" data-aos-duration="3000">
            <img src="assets/img/gallery/thumb/4.jpg" alt="couple gallery" data-large="assets/img/gallery/large/4.jpg">
          </div>
        </div>
        <!-- gallery item end -->
        <!-- gallery item start -->
        <div class="gallery-item">
          <div class="gallery-item-inner" data-aos="fade-in" data-aos-duration="3000">
            <img src="assets/img/gallery/thumb/5.jpg" alt="couple gallery" data-large="assets/img/gallery/large/5.jpg">
          </div>
        </div>
        <!-- gallery item end -->
        <!-- gallery item start -->
        <div class="gallery-item">
          <div class="gallery-item-inner" data-aos="fade-in" data-aos-duration="3000">
            <img src="assets/img/gallery/thumb/6.jpg" alt="couple gallery" data-large="assets/img/gallery/large/6.jpg">
          </div>
        </div>
        <!-- gallery item end -->

      </div>
    </div>
    <div class="container">
    </div>
  </section>

  <!-- end gallery -->


  <!-- rspv -->
  <section class="rspv-section" data-scroll-index="5">
    <div class="container">
      <div class="row">
        <div class="section-tittle" data-aos="zoom-in">
          <h2> You Are Invited</h2>
          <!-- <p>Please Kindly Response Before 1 Agustus</p> -->
        </div>
      </div>

      <?php
      if (isset($_POST['tambah'])) {
        $simpan = mysqli_query($konek, "INSERT INTO pesan (nama,pesan) VALUES ('" . $_POST[nama] . "','" . $_POST[pesan] . "')");
        if ($simpan) {
          echo "<script>alert ('Pesan Berhasil di Simpan'); document.location='index'</script>";
        } else {
          echo "<script>alert ('gagal'); document.location='index'</script>";
        }
      }
      ?>
      <div class="row">
        <div class="rspv-form" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2500">
          <form action="" class="form" method="POST">
            <div class="row">
              <div class="input-group ">
                <input type="text" placeholder="Nama" class="input-control" name="nama">
              </div>
              <!-- <div class="input-group w50">
                <input type="text" placeholder="Email" class="input-control">
              </div> -->
            </div>
            <!-- <div class="row">
              <div class="input-group">
                <select name="" id="" class="input-control">
                  <option value=""> Number of Guest</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div> -->
            <!-- <div class="row">
              <div class="input-group">
                <select name="" id="" class="input-control">
                  <option value="datang">I am Attending</option>
                  <option value="tidak">I am not Attending</option>
                </select>
              </div>
            </div> -->
            <div class="row">
              <div class="input-group">
                <textarea name="pesan" id="" placeholder="Pesan Untuk Pasangan" class="input-control"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="input-group">
                <button type="submit" name="tambah" class="btn-1">Kirim</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- endrspv -->

  <!-- footer -->
  <footer class="footer">
    <div class="container">
      <div class="row" data-aos="zoom-in" data-aos-duration="2000">
        <div class="footer-content">
          <div class="couple-name">
            <img src="assets/img/flower-circle.png" alt="Wedding Couple">
            <h2>Amel <span>&</span> Lutfi </h2>
          </div>
          <p>Thank You</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- endfooter -->

  <!-- copyrigth -->

  <!-- endcopyrigth -->
  <p class="copyright-text"> <?php echo "Copyright &copy;" . (int)date('Y') . " | Created By - Lutfi Waziirul Fazri"; ?></p>
  <!-- gallery popup -->
  <div class="gallery-popup">
    <div class="gp-container">
      <div class="gp-counter"></div>
      <div class="gp-close">&times;</div>
      <img src="assets/img/gallery/large/1.jpg" class="gp-img" alt="gallery img">
      <div class="gp-controls">
        <div class="prev">
          <i class="fas fa-angle-left"></i>
        </div>
        <div class="next">
          <i class="fas fa-angle-right"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- gallery popup end -->
  <!-- thema -->
  <div class="setting">
    <div class="s-toogle-btn">
      <i class="fas fa-cog fa-spin"></i>
    </div>
    <h4>Theme Color</h4>
    <div class="colors">
    </div>
    <h4>Theme Mode</h4>
    <label for="">
      <input type="radio" name="ld" value="light" class="theme-mode" checked> Light
    </label>
    <label for="">
      <input type="radio" name="ld" value="dark" class="theme-mode"> Dark
    </label>
  </div>
  <!-- endthema -->

  <!-- audio -->
  <audio src="assets/audio/law.mp3" id="myAudio" loop="loop" type="audio/mp3"></audio>
  <i class="fa fa fa-music pause"></i>
  <!-- audioend -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/scrollIt.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/setting.js"></script>
  <script src="assets/js/aos.js"></script>

  <script>
    AOS.init({
      duration: 1000,
    });
  </script>


</body>

</html>