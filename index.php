<?php session_start();?>

<!doctype html>
<html class="no-js" lang="en">
    <?php require('lib/nofouc.inc');?>
    <?php require('lib/header.inc');?>
    <body class="no-fouc">
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '213194959048649',
              xfbml      : true,
              version    : 'v2.5'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
        
        <?php include('lib/slideshowfilter.inc');?>
        
        <?php include('lib/facebook.inc');?>
        
        <?php include('lib/nav.inc');?>
        
        <div class="parallax-home" id="top">            
            <div class="row home-box-row">
                <h1 class="site-title fade-in one">o photo</h1>
                <h5 class="fade-in two">photography studio est 2014</h5>
            </div>
        </div>
        
        <div class="parallax-intro">
            <h1>Your photos, your way.</h1>
            
                <img src="img/lens.jpeg">

            <p>Drew Otto - 515 402 9942<span class="contact-info-span"> |</span> drew@ophoto.org<span class="contact-info-span"> |</span> 231 E Jefferson Street, Osceola, IA 50213
            <br/>
            <br/>
                M-F 7AM - 10PM | S 8AM - 10PM | SU 8AM-10P</p>
            <br/>
            <div class="social-device">
                <ul>
                    <li><a href="http://www.facebook.com/ophotophotography"><div class="image-1"></div></a></li>
                    <li><a href="http://www.instagram.com/ophoto"><div class="image-2"></div></a></li>
                    <li><a href="http://www.pinterest.com/drewotto"><div class="image-3"></div></a></li>
                </ul>
            </div>
        </div>
        
        <div class="parallax-about" id="about">
            <h1 class="parallax-header">About</h1>
            
            <div data-wow-delay="0s" data-wow-duration="1s" class="wow bounceInLeft">
                <img class="circle-img" src="img/drewandknox.png">
            </div>
            
            <p>I'm Drew and I own and operate O Photo. I went to school for photography, and now have close to 10 years of photography experience. I have taken photos of a wide variety of subjects, and have had the opportunity to take hundreds of portraits in all kinds of settings.</p>
            
            <h3 class="paragraph-quote"><span>I capture memories and emotion</span></h3>
            
            <p>Creating, capturing, and sharing spectacular moments is what I love to do. I create a fun and relaxed atmosphere and my strength is capturing natural emotion with an artistic flair. I enjoy capturing both formal and informal pictures based on the preference of the couple.</p>
            
            <h3 class="paragraph-quote">Quick with Quality</h3>
            
            <p>I know word-of-mouth is the best marketing strategy, so I let my photos and customers do the talking. I care the most about that moment when I show you the photos and your eyes light up. I look forward to meeting you and giving you the pictures you will cherish forever.</p>
            
            <p id="signature">- Drew</p>
            
            <p class="scroll-up"><a href="#top">top</a></p>
        </div>
        
        <div class="parallax-bg1">

        </div>
        
        <div class="parallax-services" id="services">
            <h1 class="parallax-header">Services</h1>
            
            <div data-wow-delay="0s" data-wow-duration="1s" class="wow bounceInRight">
                <img class="circle-img" src="img/services.png">
            </div>
            
            <p>I offer the following types of photography services for your special events:</p>
            
            <ul>
                <li>Engagement photos</li>
                <li>Wedding photos</li>
                <li>Senior photos</li>
                <li>Athletic photos</li>
                <li>Family photos</li>
                <li>Portraits</li>
            </ul>
            
            <h3 class="parallax-header">Testimonials</h3>
            
            <div class="container cf">
                <!-- testimonial one -->
                <div class="wow bounceInLeft animation-element slide-left testimonial" data-wow-delay=".4s" data-wow-duration="1s">
                  <div class="header">
                    <div class="left">
                      <img src="img/testimonial1.jpg">
                    </div>
                    <div class="right">
                      <h3 class="testimonial">Ashlyn and Julien D</h3>
                      <h4>Bride and Groom</h4>
                    </div>
                  </div>
                  <div class="content">O Photo took care of the photos for our wedding. They made it fun and the pictures were fantastic. So many original ideas. I definitely recommend O Photo.
                  </div>
                </div>
                <!--testimonial two -->
                <div class="wow bounceInLeft animation-element slide-left testimonial" data-wow-delay="0s" data-wow-duration="1s">
                  <div class="header">
                    <div class="left">
                      <img src="img/testimonial2.png" />
                    </div>
                    <div class="right">
                      <h3>Brandon S</h3>
                      <h4>Groom</h4>
                    </div>
                  </div>
                  <div class="content">Our wedding and reception was made possible by O Photo. The photos are breathtaking, but the suggestions and assistance provided went beyond the photographer role and made our day perfect. I would recommend
O photo to any one.
                  </div>
                </div>
                <!--testimonial three -->
                <div class="wow bounceInLeft animation-element slide-left testimonial" data-wow-delay=".4s" data-wow-duration="1s">
                  <div class="header">
                    <div class="left">
                      <img src="img/testimonial3.jpg" />
                    </div>
                    <div class="right">
                      <h3>Chelsea D</h3>
                      <h4>Bride</h4>
                    </div>
                  </div>
                  <div class="content">O Photo did an awesome job for our wedding! They did unique things that I may not have been sure about at first but I'm really glad he went ahead with his ideas. I loved going through our photos and putting all of them into our book to forever remember our special day and everyone that came to share our day with us.
                    
                  </div>
                </div>
                <!--testimonial four -->
                <div class="wow bounceInLeft animation-element slide-left testimonial" data-wow-delay="0s" data-wow-duration="1s">
                  <div class="header">
                    <div class="left">
                      <img src="img/testimonial4.jpg" />
                    </div>
                    <div class="right">
                      <h3>Ashley E</h3>
                      <h4>Bride</h4>
                    </div>
                  </div>
                  <div class="content">Drew is amazing! Truly talented and very good at shooting our young children! He made it through the whole day on our wedding and gave us more than we could have ever hoped for! An he has amazing turn around time too! Won't be using anyone else.
                    
                  </div>
                </div>
            </div>
            
            <p>Please contact me via the <a href="#contact">contact</a> page, e-mail me at drew@ophoto.org, or give me a ring at 515 402 9942 with your name, telephone number, and a description of what you're interested in and when. We will respond to your submission or e-mail within 48 hours or will return your call as soon as possible. Book now before it's too late.. spots are starting to fill for Summer 2016!</p>
            <p class="scroll-up"><a href="#top">top</a></p>
        </div>
        
        <div class="parallax-bg2">
        
        </div>
        
        <div class="parallax-portfolio" id="portfolio">
            <h1 class="parallax-header">Portfolio</h1>
            
            <div class="row">
                <div class="small-4 large-4 columns">
                    <h3>WEDDINGS</h3>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding01.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding01.jpg" height="350" width="167" itemprop="thumbnail" alt="Wedding Photo 1">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding02.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding02.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 2">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding03.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding03.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 3">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding04.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding04.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 4">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding05.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding05.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 5">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding06.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding06.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 6">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="small-6 large-6 columns">
                    <h3>...</h3>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding07.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding07.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 7">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding08.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding08.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 8">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding09.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding09.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 9">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding10.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding10.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 10">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding11.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding11.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 11">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding12.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding12.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Wedding Photo 12">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-6 large-6 columns">
                    <h3>FAMILY</h3>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/family01.jpg" itemprop="contentUrl" data-size="640x960" data-index="0">
                                            <img src="img/gallery/thumbs/family01.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Family Photo 1">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/family02.jpg" itemprop="contentUrl" data-size="640x960" data-index="0">
                                            <img src="img/gallery/thumbs/family02.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Family Photo 2">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/family03.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/family03.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Family Photo 3">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/family04.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/family04.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Family Photo 4">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/family05.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/family05.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Family Photo 5">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/family06.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/family06.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Family Photo 6">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="small-6 large-6 columns">
                    <h3>PORTRAITS &amp; OTHER</h3>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/portrait01.jpg" itemprop="contentUrl" data-size="960x960" data-index="0">
                                            <img src="img/gallery/thumbs/portrait01.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Portrait Photo 1">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/misc01.jpg" itemprop="contentUrl" data-size="640x960" data-index="0">
                                            <img src="img/gallery/thumbs/misc01.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Misc Photo 1">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/misc02.jpg" itemprop="contentUrl" data-size="721x884" data-index="0">
                                            <img src="img/gallery/thumbs/misc02.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Misc Photo 2">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/misc03.jpg" itemprop="contentUrl" data-size="1884x1538" data-index="0">
                                            <img src="img/gallery/thumbs/misc03.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Misc Photo 3">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row img-block">
                        <ul>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/misc04.jpg" itemprop="contentUrl" data-size="1888x1538" data-index="0">
                                            <img src="img/gallery/thumbs/misc04.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Misc Photo 4">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="picture" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/gallery/wedding13.jpg" itemprop="contentUrl" data-size="2048x1365" data-index="0">
                                            <img src="img/gallery/thumbs/wedding13.jpg"  height="250" width="167"  itemprop="thumbnail" alt="Misc Photo 5">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <p class="scroll-up"><a href="#top">top</a></p>
        </div>
        
        <div class="parallax-bg3">
        
        </div>
        
        <div class="parallax-contact" id="contact">
            <h1 class="parallax-header">Contact</h1>
            
            <div id="map"></div>
            
            <p>Thanks for your interest in O Photography! We would love to hear from you. Please call 515-402-9942 during open hours or fill out the form below and I'll get back to you shortly.</p>
            
            <div class="row">
                <div id="contactForm" class="table">
                	<form id="form" name="emailForm" method="post" action="html_form_send.php">
                        <div class="table-row">
                            <div class="table-cell">
                                <label>Name</label>
                            </div>
                            <div class="table-cell">
                                <input type="text" name="name" id="name" maxlength="100" required />
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <label>E-Mail</label>
                            </div>
                            <div class="table-cell">
                                <input type="email" name="email" id="email" maxlength="100" required />
                            </div>
                        </div>
                        <div class="table-row">
                        	<div class="table-cell">
                            	<label>Phone #</label>
                            </div>
                            <div class="table-cell">
                            	<input type="tel" name="telephone" id="telephone" maxlength="30" required />
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <label>Wedding Date</label>
                            </div>
                            <div class="table-cell">
                                <input type="date" name="date" id="date" required />
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <label>Location</label>
                            </div>
                            <div class="table-cell">
                                <input type="text" name="location" id="location" maxlength="200" />
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">
                                <label>Message</label>
                            </div>
                            <div class="table-cell">
                                <textarea name="message" id="message" maxlength="2000" cols="50" rows="15" required></textarea>
                            </div>
                        </div>
                        <div class="table-row">
                        	<div class="table-cell">
                            	<p>&nbsp;</p>
                            </div>
                            <div class="table-cell">
                            	<input type="submit" name="submit" id="submit" value="Submit" class="button success">
                            </div>
                        </div>
                	</form>
                </div>
            </div>
            
            <p class="scroll-up"><a href="#top">top</a></p>
        </div>
        
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">

                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                              <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div> 
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        
        

        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">

                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                              <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div> 
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require('lib/scripts.inc');?>
    </body>
</html>
