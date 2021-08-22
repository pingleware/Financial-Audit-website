<?php require_once('./common.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     
    <title><?php echo $lang['TITLE']; ?></title>
   <link rel="icon" type="image/png" href=/>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.formstyler.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
              <div class="header__contacts">
                <a class="header__phone" href="tel:<?php echo $lang['PHONE']; ?>"><?php echo $lang['PHONE_FORMATTED']; ?></a>
                <a class="header__email" href="mailto:<?php echo $lang['EMAIL']; ?>"><?php echo $lang['EMAIL']; ?></a>
                <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#"><?php echo $lang['HEADER']; ?></a>
                </div>
            </div>
        </div>
        <div class="header__content">
            <div class="container">
              <div class="header__content-inner">
                <div class="header__logo">
                    <a href="#">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <nav class="menu">
                  <div class="header__btn-menu">
                    <span class="icon-bars"></span>
                  </div>
                    <ul>
                        <li><a href="#"><?php echo $lang['MENU_HOME']; ?></a></li>
                        <li><a href="#"><?php echo $lang['MENU_ABOUT']; ?></a></li>
                        <li><a href="#"><?php echo $lang['MENU_SERVICES']; ?></a></li>
                        <li><a href="#"><?php echo $lang['MENU_CONTACT']; ?></a></li>
                    </ul>
                </nav>
            </div>
          </div>
        </div>
    </header>
    <section class="slider"> 
      <div class="container">
        <div class="slider__inner">
          <div class="slider__item">
            <div class="slider__item-content">
            <div class="slider__title">
            <?php echo $lang['SLIDER_TITLE_1']; ?>
            </div>
            <div class="slider__text">
            <?php echo $lang['SLIDER_TEXT_1']; ?>
            </div>
              <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
              <?php echo $lang['SLIDER_BUTTON_1']; ?>
            </a>
          </div>
         </div>
           <div class="slider__item">
            <div class="slider__item-content">
            <div class="slider__title">
            <?php echo $lang['SLIDER_TITLE_2']; ?>
            </div>
            <div class="slider__text">
            <?php echo $lang['SLIDER_TEXT_2']; ?>
            </div>
              <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
              <?php echo $lang['SLIDER_BUTTON_2']; ?>
            </a>
          </div>
         </div>
           <div class="slider__item">
            <div class="slider__item-content">
            <div class="slider__title">
            <?php echo $lang['SLIDER_TITLE_3']; ?>
            </div>
            <div class="slider__text">
            <?php echo $lang['SLIDER_TEXT_3']; ?>
            </div>
            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
            <?php echo $lang['SLIDER_BUTTON_3']; ?>
            </a>
          </div>
         </div>
        </div>
      </div>
    </section>
    <section class="services">
      <div class="container">
        <div class=" services__top">
          <div class="services__title-box">
            <div class="services__title">
            <?php echo $lang['SERVICES_TOP_TITLE']; ?>
            </div>
             <div class="services__text">
             <?php echo $lang['SERVICES_TOP_TEXT']; ?>
             </div>
          </div>
          <div class="services__btn">
            <a href="#">
            <?php echo $lang['SERVICES_TOP_BUTTON']; ?>
            </a>
          </div>
        </div>
        <div class="services__items">
          <div class="services__item">
            <img src="img/about-1.png" alt="">
            <div class="services__item-title">
            <?php echo $lang['SERVICES_ITEM_1_TITLE']; ?>
            </div>
            <div class="services__item-text">
            <?php echo $lang['SERVICES_ITEM_1_TEXT']; ?>
            </div>
            <div class="services__item-btn">
              <a class="services__item-link" href="#"><?php echo $lang['SERVICES_ITEM_1_LINK']; ?></a>
              <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              <?php echo $lang['SERVICES_ITEM_1_BUTTON']; ?>
            </a>
            </div>
          </div>
          <div class="services__item">
            <img src="img/about-2.png" alt="">
            <div class="services__item-title">
            <?php echo $lang['SERVICES_ITEM_2_TITLE']; ?>
            </div>
            <div class="services__item-text">
            <?php echo $lang['SERVICES_ITEM_2_TEXT']; ?>
            </div>
            <div class="services__item-btn">
              <a class="services__item-link" href="#"><?php echo $lang['SERVICES_ITEM_2_LINK']; ?></a>
              <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              <?php echo $lang['SERVICES_ITEM_2_BUTTON']; ?>
            </a>
            </div>
          </div>
          <div class="services__item">
            <img src="img/about-3.png" alt="">
            <div class="services__item-title">
            <?php echo $lang['SERVICES_ITEM_3_TITLE']; ?>
            </div>
            <div class="services__item-text">
            <?php echo $lang['SERVICES_ITEM_3_TEXT']; ?>
            </div>
            <div class="services__item-btn">
              <a class="services__item-link" href="#"><?php echo $lang['SERVICES_ITEM_3_LINK']; ?></a>
              <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              <?php echo $lang['SERVICES_ITEM_3_BUTTON']; ?>
            </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="about__inner">
        <div class="about__title">
        <?php echo $lang['ABOUT_TITLE']; ?>
        </div>
        <div class="about__text">
          <?php echo $lang['ABOUT_TEXT']; ?>
        </div>
        <a href="#" class=" about__btn default-btn">
            <?php echo $lang['ABOUT_BUTTON']; ?>
            </a>
      </div>
    </div>
    </section>
    <section class="form">
      <div class="container">
        <div class="form__inner">
          <div class="form__content">
            <div class="form__title-box">
            <div class="form__title">
            <?php echo $lang['FORM_TITLE']; ?>
            </div>
             <div class="form__text">
             <?php echo $lang['FORM_TEXT']; ?>
              </div>
           </div>
           <div class="form__box">
             <form>
               <div class="form__box-inner">
                   <div class="form__box-left">
                     <label>
                     <?php echo $lang['FORM_EMAIL']; ?>
                       <input type="text" name="">
                     </label>
                      <label>
                      <?php echo $lang['FORM_CONTACT_PHONE']; ?>
                       <input type="text" name="">
                     </label>
                      <label>
                      <?php echo $lang['FORM_FULL_NAME']; ?>
                       <input type="text" name="">
                     </label>
                      <label>
                      <?php echo $lang['FORM_QUESTION_TOPIC']; ?>
                       <select>
                         <option value="<?php echo $lang['FORM_QUESTION_TOPIC_ITEM_1']; ?>"><?php echo $lang['FORM_QUESTION_TOPIC_ITEM_1']; ?></option>
                         <option value="<?php echo $lang['FORM_QUESTION_TOPIC_ITEM_2']; ?>"><?php echo $lang['FORM_QUESTION_TOPIC_ITEM_2']; ?></option>
                         <option value="<?php echo $lang['FORM_QUESTION_TOPIC_ITEM_3']; ?>"><?php echo $lang['FORM_QUESTION_TOPIC_ITEM_3']; ?></option>
                         <option value="<?php echo $lang['FORM_QUESTION_TOPIC_ITEM_4']; ?>"><?php echo $lang['FORM_QUESTION_TOPIC_ITEM_4']; ?></option>
                       </select>
                     </label>
                   </div>
                   <div class="form__box-right">
                    <label>
                    <?php echo $lang['FORM_MESSAGE']; ?>
                       <textarea></textarea>
                     </label>
                     <button class="default-btn" type="submit" ><?php echo $lang['FORM_BUTTON']; ?></button>                      
                   </div>
               </div>
             </form>
           </div>
         </div>
       </div>
      </div>
    </section>
    <section class="advantages">
      <div class="container">
        <div class="advantages__inner">
          <div class="advantages__item">
            <div class="advantages__title">
            <?php echo $lang['ADVANTAGES_TITLE']; ?>
            </div>
            <div class="advantages__text">
            <?php echo $lang['ADVANTAGES_TEXT']; ?>
            </div>
          </div>
          <div class="advantages__item">
            <div class="advantages__title">
            <?php echo $lang['ADVANTAGES_TITLE_ITEM_1']; ?>
            </div>
            <div class="advantages__text">
            <?php echo $lang['ADVANTAGES_TEXT_ITEM_1']; ?>
            </div>
          </div>
          <div class="advantages__item">
            <div class="advantages__title">
            <?php echo $lang['ADVANTAGES_TITLE_ITEM_2']; ?>
            </div>
            <div class="advantages__text">
            <?php echo $lang['ADVANTAGES_TEXT_ITEM_2']; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="news">
      <div class="container">
        <div class=" news__top">
          <div class="news__title-box">
            <div class="news__title">
              <?php echo $lang['NEWS_TITLE']; ?>
            </div>
             <div class="news__text">
             <?php echo $lang['NEWS_TEXT']; ?>
             </div>
          </div>
          <div class="news__btn">
            <a href="#">
            <?php echo $lang['NEWS_BUTTON']; ?>
            </a>
          </div>
        </div>
        <div class="news__inner">
          <div class="news__slider">
            <div class="news__slider-inner">
              <div class="news__slider-item">
                <div class="news__slider-title">
                <?php echo $lang['NEWS_SLIDER_TITLE_ITEM_1']; ?>
                </div>
                <div class="news__slider-text">
                <?php echo $lang['NEWS_SLIDER_TEXT_ITEM_1']; ?>
                </div>
                <div class="news__slider-author">
                <?php echo $lang['NEWS_SLIDER_AUTHOR_ITEM_1']; ?>
                </div>
              </div>
                      <div class="news__slider-item">
                <div class="news__slider-title">
                <?php echo $lang['NEWS_SLIDER_TITLE_ITEM_2']; ?>
                </div>
                <div class="news__slider-text">
                <?php echo $lang['NEWS_SLIDER_TEXT_ITEM_2']; ?>
                </div>
                <div class="news__slider-author">
                <?php echo $lang['NEWS_SLIDER_AUTHOR_ITEM_2']; ?>
                </div>
              </div>
                      <div class="news__slider-item">
                <div class="news__slider-title">
                <?php echo $lang['NEWS_SLIDER_TITLE_ITEM_3']; ?>
                </div>
                <div class="news__slider-text">
                <?php echo $lang['NEWS_SLIDER_TEXT_ITEM_3']; ?>
                </div>
                <div class="news__slider-author">
                <?php echo $lang['NEWS_SLIDER_AUTHOR_ITEM_3']; ?>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="news__blog">
            <div class="news__images">
              <img src="<?php echo $lang['NEWS_BLOG_IMAGE_ITEM_1']; ?>">
              <div class="news__date"><?php echo $lang['NEWS_BLOG_DATE_ITEM_1']; ?></div>
            </div>
            <div class="news__blog-title">
            <?php echo $lang['NEWS_BLOG_TITLE_ITEM_1']; ?>
            </div>
            <div class="news__blog-text">
            <?php echo $lang['NEWS_BLOG_TEXT_ITEM_1']; ?>
            </div>
          </a>
          <a href="#" class="news__blog">
            <div class="news__images">
              <img src="<?php echo $lang['NEWS_BLOG_IMAGE_ITEM_2']; ?>">
              <div class="news__date"><?php echo $lang['NEWS_BLOG_DATE_ITEM_2']; ?></div>
            </div>
            <div class="news__blog-title">
            <?php echo $lang['NEWS_BLOG_TITLE_ITEM_2']; ?>
            </div>
            <div class="news__blog-text">
            <?php echo $lang['NEWS_BLOG_TEXT_ITEM_2']; ?>
            </div>
          </a>
        </div>
      </div>
      </section> 
      <footer class="footer">
        <div class="footer__content">
          <div class="container"> 
            <div class="footer__inner">
            <div class="footer__info">
              <div class="footer__title">
                <?php echo $lang['FOOTER_TITLE']; ?>
              </div>
              <div class="footer__text">
                <?php echo $lang['FOOTER_TEXT']; ?>
              </div>
              <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#"><?php echo $lang['HEADER']; ?></a>
              <ul class="footer__list">
                <li><a class="footer__phone" href="tel:<?php echo $lang['PHONE']; ?>"><?php echo $lang['PHONE_FORMATTED']; ?></a></li>
                <li><a href="mailto:<?php echo $lang['EMAIL']; ?>"><?php echo $lang['EMAIL']; ?></a></li>
                <li><a class="footer__adress" href="#"><?php echo $lang['FOOTER_ADDRESS']; ?></a></li>

              </ul>
            </div>
            <div class="footer__map">
            <iframe height="250px" src="<?php echo $lang['FOOTER_MAP_URL']; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
           </div>
          </div>
        </div>
        <div class="footer__copy">
          <div class="container">
            <div class="copy__text">
               &copy; 2020-<?php echo date('Y'); ?> <?php echo $lang['COPYRIGHT_OWNER']; ?>
            </div>
          </div>
        </div>
      </footer>

    <div id="modal">
       <form>
         <input type="text" placeholder="<?php echo $lang['MODAL_DIALOG_NAME']; ?>">
         <input type="text" placeholder="<?php echo $lang['MODAL_DIALOG_PHONE']; ?>">
         <input type="submit" value="<?php echo $lang['MODAL_DIALOG_BUTTON']; ?>">
       </form>
    </div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>