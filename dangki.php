<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Thức ăn chăn nuôi gia súc</title>
            <link href="./css/style.css" rel="stylesheet">
            <link href="./css/megamenu.css" rel="stylesheet">
            <link href="./css/theme.css" rel="stylesheet">
            <link rel="stylesheet" href="./css/form.css">
            <script src="js/form.js"></script>
            <link rel="stylesheet" href=".https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
            <script type="text/javascript" src="./js/jquery.js"></script>
            <script type="text/javascript" src="./js/jquery-migrate.js"></script>
            <script type="text/javascript" src="./js/plugins.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3887203-14"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-3887203-14');
        </script>
        <script>
            document.addEventListener('DOMContentLoaded',function(){
                // Validator chúng ta mong muốn nhận lại, xây dựng JavaScript ở file riêng
                Validator({
                    // tìm và lấy form khi chúng ta nhập vào mỗi ô input riêng
                    form: '#form-1',
                    formGroupSelector: '.form-group',
                    errorSelector: '.form-message',
                    // Tạo ra Rules để bên file JavaScript riêng chúng ta sẽ định nghĩa từng hàm
                    rules: [
                        // Rules lấy id fullname của thẻ input
                        Validator.isRequired('#fullname', 'Vui long nhap day du ho va ten cua ban'),
                        // Rules lấy id email của thẻ input
                        Validator.isEmail('#email'),
                        // Rules lấy id password của thẻ input
                        Validator.minLength('#password', 6),
                        Validator.isRequired('#password_confirmation'),
                        // Dò tìm mật xem mật khẩu có nhập đúng với thể input đã nhập trước đó hay không để xác nhận
                        Validator.isConfirmed('#password_confirmation', function(){
                            return document.querySelector('#form-1 #password').value;
                        }, 'Mat khau nhap lai khong chinh xac')
                    ],
                    // Khi nhấn xác nhận sẽ được dữ liệu vào cơ sở dữ liệu, tạo tài khoản người dùng
                    onSubmit: function(data){
                        console.log(data);
                    }
                });
            });
        
            </script>
        <script>
var current = null;
document.querySelector('#email').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#password').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#submit').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '530 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0]
                  , j = d.createElement(s)
                  , dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            }
            )(window, document, 'script', 'dataLayer', 'GTM-TQFLQNS');
        </script>
        <!-- End Google Tag Manager -->
    </head>
    <body class="dark-header org-dark-header sticky_header">
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQFLQNS" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div id="fb-root"></div>
        <script type="application/ld+json">
             { "@@context": "https://schema.org", "@@type": "Company", "name": "CP Sản xuất & Thương mại Hoàn Dương - ALASKA Feedmill", "url": "https://hoanduong.com", "logo": "https://hoanduong.com/img/logo0.png", "contactPoint": { "@@type": "ContactPoint", "telephone": "02263582027", "contactType": "customer service", "areaServed": "VN", "availableLanguage": "Vietnamese" }, "sameAs": [ "https://www.facebook.com/alaskafeedmill/", "https://www.youtube.com/channel/UCb_wgMxF4_L86fIrbf-9Ptg", "https://hoanduong.com/" ] } 
        </script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=1387291875003558&autoLogAppEvents=1"></script>
        <div id="wrapper">
            <div class="header-wrapper before-sticky">
                <div id="top-bar">
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="right-text right">
                                <ul class="top-bar-nav">
                                    <li>
                                        <a href="./index.php">Trang chủ</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="./gioithieu.php">Giới thiệu</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="./tintuc.php">Tin tức</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="./doitac.php">Đối tác</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="./lienhe.php">Liên hệ</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="./tuyendung.php">Tuyển dụng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Đã sử lý đến đây -->
                <header id="masthead" class="site-header">
                    <div class="row">
                        <div class="large-12 columns header-container">
                            <div id="logo">
                                <a href="./" title="Cái tên nhóm" rel="home">
                                    <img src="./img/logo0.png" alt="Tên nhóm"/>
                                </a>
                            </div>
                            <div class="right-links">
                                <div class="mobile-menu show-for-small">
                                    <a href=".#jPanelMenu" class="off-canvas-overlay" data-pos="left" data-color="light">
                                        <span class="fa fa-bars"></span>
                                    </a>
                                </div>
                                <div class="wide-nav-search hide-for-small right">
                                    <div class="row collapse search-wrapper">
                                        <form role="search" method="get" action="/tim-kiem/">
                                            <div class="lang-nav">
                                                <a href="./?lang=en">English</a>
                                                <a class="active" href="./?lang=vn">Việt Nam</a>
                                            </div>
                                            <div class="large-10 small-10 columns">
                                                <input type="search" value="" name="s" placeholder="Tìm kiếm"/>
                                            </div>
                                            <div class="large-2 small-2 columns">
                                                <button type="submit" class="button secondary postfix">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <content>
                <div class="content__page">
                    <div class="content__container">
                      <div class="content__container-left">
                        <div class="content__container-left-login">Đăng kí</div>
                        <div class="content__container-left-eula">Đăng kí để trở thành những thành viên nhỏ của team chúng tôi nhé</div>
                      </div>
                      <div class="content__container-right">
                        <div class="login">
                            <form action="/action_page.php" method="post" class="login" id="form-1">
                                <h1 class="login-heading">Đăng kí nhé!</h1>
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Họ và tên:</label>
                                    <input id="fullname" name="fullname" type="text" placeholder="VD: Nguyen Van A" class="form-control">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Số điện thoại:</label>
                                    <input id="fullname" name="sdt" type="tel" placeholder="VD: 079XXXXXXX" class="form-control">
                                    <!-- <span class="form-message"></span> -->
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email:</label>
                                    <input id="email" name="email" type="text" placeholder="VD: ...@gmail.com" class="form-control">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Mật khẩu:</label>
                                    <input id="password" name="password" type="password" placeholder="******" class="form-control">
                                    <span class="form-message"></span>
                                </div>

                                <div class="form-group">
                                    <label for="fullname" class="form-label">Ngày sinh:</label>
                                    <input id="fullname" name="fullname" type="date" placeholder="~~    " class="form-control">
                                    <span class="form-message"></span>
                                </div>
                                <!-- Option -->
                                <div class="form-group-op"> 
                                    <label for="fullname" class="form-label">Địa chỉ:</label>
                                    <div>
                                        <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
                                            <option value="" selected >Chọn tỉnh thành</option>    
                                            </select>
                                                      
                                            <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
                                            <option value="" selected>Chọn quận huyện</option>
                                            </select>
                                            
                                            <select class="form-select form-select-sm mb-3" id="ward" aria-label=".form-select-sm">
                                            <option value="" selected>Chọn phường xã</option>
                                            </select>
                                    </div>
                                </div>
                                <!--  -->
                                
                                <button onclick="myFunction()" class="form-submit">Xác nhận</button>
                                <label for="password" class="form-label" style="padding-left: 36%;">Bạn đã có tài khoản?<a href="./dangnhap.php">Đăng nhập</a></label>
                                
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </content>
                <a id="top-link" class="animated fadeInUp" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
                    <span class="fa fa-angle-up"></span>
                </a>
                <script type="text/javascript" src="/js/flatsome.js"></script>
                <script type="text/javascript" src="/js/frontend.js"></script>
        </body>
</html>