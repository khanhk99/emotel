<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/datedropper/2.0/datedropper.min.css"
      integrity="sha512-b3G++vj/Z9EQMoVJaza9C48TzmHjcQKDNqXeLRoBzVD8DmFv0f6Pp/hGQW81ok1rOYxfZbpnlpoXXyJ06Aolcw=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.min.css" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="container">
        <div class="header d-flex align-items-center justify-content-between">
          <img
            class="header__logo"
            src="../resource/images/logo.png"
            alt="logo"
          />

          <div class="header__menu">
            <ul>
              <li><a href="#" class="header__menuItem active">Trang chủ</a></li>
              <li><a href="#" class="header__menuItem">Giới thiệu</a></li>
              <li><a href="#" class="header__menuItem">Hỗ trợ</a></li>
            </ul>
          </div>

          <div class="header__right">
            <a href="#" class="header__rightItem"
              >Trở thành chủ nhà/người tổ chức</a
            >
          </div>
          <div class="header__rightUser">
            <i class="fas fa-bars"></i>
            <i class="fas fa-user"></i>
            <div class="header__userMenu">
              <ul>
                <li><a href="#">Đăng ký</a></li>
                <li><a href="#">Đăng nhập</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- header bottom mobile -->
    <div class="header-mobile">
      <div class="container"></div>
    </div>

    <div
      class="singlePostBanner"
      style="
        background-image: url('https://cdn1.ivivu.com/iVivu/2020/03/05/14/bangkok-cr-370x190.jpg');
      "
    >
      <div class="container">
        <h1 class="text-light text-center">Post title</h1>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Bài viết</li>
        </ul>
      </div>
    </div>

    <div class="singlePostContent">
      <div class="container">
        <div class="s-content">
          <p>Lorem ipsum dolor sit amet, consectetur adip</p>
          <ul>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              ipsam et, provident eaque laudantium aspernatur quisquam ipsa quo
              aperiam accusantium, magni tenetur eveniet amet nulla? Recusandae
              dolore nulla totam beatae.
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              ipsam et, provident eaque laudantium aspernatur quisquam ipsa quo
              aperiam accusantium, magni tenetur eveniet amet nulla? Recusandae
              dolore nulla totam beatae.
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              ipsam et, provident eaque laudantium aspernatur quisquam ipsa quo
              aperiam accusantium, magni tenetur eveniet amet nulla? Recusandae
              dolore nulla totam beatae.
            </li>
          </ul>
          <img
            src="https://cdn1.ivivu.com/iVivu/2020/03/05/14/bangkok-cr-370x190.jpg"
          />
        </div>
      </div>
    </div>

    <div class="comments">
      <div class="container">
        <h3 class="headLine">6 bình luận</h3>
        <div class="addComment">
          <h4>Để lại bình luận</h4>
          <form action="">
            <textarea name="" id="" rows="3" class="form-control"></textarea>
            <button class="btn btn-secondary" type="submit">Gửi</button>
          </form>
        </div>
        <div class="commentsSection">
          <div class="singleComment">
            <img
              src="https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/86261405_704465800091407_4091667273901670400_n.jpg?_nc_cat=1&_nc_sid=09cbfe&_nc_ohc=oSNzdMaLfdQAX-B6cUo&_nc_ht=scontent.fhph1-1.fna&oh=154ba97bffbb7e6b6a32a415c6c0d252&oe=5F9F3427"
              class="singleComment__image"
            />
            <div class="singleComment__details">
              <h3 class="singleComment__name">Nancy</h3>
              <p class="singleComment__date">NOVEMBER 13, 2019 AT 2:21PM</p>

              <div class="singleComment__content s-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                  autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                  voluptas earum impedit necessitatibus, nihil?
                </p>
              </div>
            </div>
          </div>
          <div class="singleComment">
            <img
              src="https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/86261405_704465800091407_4091667273901670400_n.jpg?_nc_cat=1&_nc_sid=09cbfe&_nc_ohc=oSNzdMaLfdQAX-B6cUo&_nc_ht=scontent.fhph1-1.fna&oh=154ba97bffbb7e6b6a32a415c6c0d252&oe=5F9F3427"
              class="singleComment__image"
            />
            <div class="singleComment__details">
              <h3 class="singleComment__name">Nancy</h3>
              <p class="singleComment__date">NOVEMBER 13, 2019 AT 2:21PM</p>

              <div class="singleComment__content s-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                  autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                  voluptas earum impedit necessitatibus, nihil?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="relatedPost">
      <div class="container">
        <h3 class="haedLine text-center">Bài viết liên quan</h3>
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="singlePost">
                <a href="">
                  <img
                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                    alt=""
                  />
                  <div class="singlePost__content">
                    <h3 class="title">Chỗ ở độc đáo</h3>
                    <p class="rating">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </p>
                    <p class="price">$151.12/đêm</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="singlePost">
                <a href="">
                  <img
                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                    alt=""
                  />
                  <div class="singlePost__content">
                    <h3 class="title">Chỗ ở độc đáo</h3>
                    <p class="rating">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </p>
                    <p class="price">$151.12/đêm</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="singlePost">
                <a href="">
                  <img
                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                    alt=""
                  />
                  <div class="singlePost__content">
                    <h3 class="title">Chỗ ở độc đáo</h3>
                    <p class="rating">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </p>
                    <p class="price">$151.12/đêm</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="singlePost">
                <a href="">
                  <img
                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                    alt=""
                  />
                  <div class="singlePost__content">
                    <h3 class="title">Chỗ ở độc đáo</h3>
                    <p class="rating">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </p>
                    <p class="price">$151.12/đêm</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="singlePost">
                <a href="">
                  <img
                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                    alt=""
                  />
                  <div class="singlePost__content">
                    <h3 class="title">Chỗ ở độc đáo</h3>
                    <p class="rating">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </p>
                    <p class="price">$151.12/đêm</p>
                  </div>
                </a>
              </div>
            </div>
            ...
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>

    <footer class="p-3">
      <div class="container text-center">
        <p>© 2020 EMotel, Inc. All rights reserved</p>
      </div>
    </footer>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Select2 -> Custom input form -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- Isotope -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <!-- Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Datedroper -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/datedropper/2.0/datedropper.min.js"
      integrity="sha512-rskIPpxX/1P8HET+OXZ3Ng4JvluevS/qCQHDpVdRPLYVMGkMP/yWOzgRGeSy2xstRUO+FvtgSCHKiL3XXBCQ/Q=="
      crossorigin="anonymous"
    ></script>
    <script src="../js/script.js"></script>
  </body>
</html>
