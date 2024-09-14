<?php 
    include('config.php'); 
    include('includes/captcha-config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TFTZRSZ4');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Lisa Flowers, founder of Communication Acceleration - <?php echo $website_name; ?></title>
    <meta name="description" content="Social Skills and Speech Therapy Worksheets, Games and Activities" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="googlebot" content="noindex,nofollow" />
    <meta content="global" name="distribution" />
    <meta name="author" content="Lisa Flowers, Communication Acceleration">
    <meta name="category" content="Social Skills Worksheets and Activities in PDF for Autism" />
    <meta name="theme-color" content="#FFFFFF"/>
	<link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <link rel="apple-touch-icon" href="<?php echo $website_url; ?>/apple-touch-icon.png">
    <link rel="manifest" href="<?php echo $website_url; ?>/manifest.webmanifest" />
    <link rel="icon" href="<?php echo $assets_url; ?>/assets/img/social-emotional-learning.png" />

    <?php include("../includes/header-includes.php"); ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFTZRSZ4"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <meta itemprop="accessibilityControl" content="fullKeyboardControl">
    <meta itemprop="accessibilityControl" content="fullMouseControl">
    <meta itemprop="accessibilityHazard" content="noFlashingHazard">
    <meta itemprop="accessibilityHazard" content="noMotionSimulationHazard">
    <meta itemprop="accessibilityHazard" content="noSoundHazard">
    <meta itemprop="accessibilityAPI" content="ARIA">
    <a id="skip-main" tabindex="0" href="#you-are-here">Skip to main content</a>

    <div class="ca-wrapper">
        <main id="main-body" class="col content scroll-container">
            <div id="page_top"></div>

            <article>
                <section class="header sub-banner has-bg contact-banner bg-primary-overlay-8 text-center lazyload">
                    <div class="container">
                        <h1 tabindex="0" itemprop="about" class="head wow animate__fadeInUp m-0">Contact Lisa Flowers, founder of Communication Acceleration</h1>
                    </div>
                </section>

                <section class="pb-0">
                    <div class="container">
                        <div class="row jutify-content-between align-items-center flex-row-reverse text-md-start">
                            <div class="col-md-6 mb-4 mb-md-0 mt-auto text-center wow animate__zoomIn">
                                <picture>
                                    <source type="image/webp" media="(max-width:576px)" 
                                    data-srcset="<?php echo $assets_url; ?>/assets/img/lisa-flowers-speech-language-pathologist.webp" />
                                    <source type="image/webp" 
                                    data-srcset="<?php echo $assets_url; ?>/assets/img/lisa-flowers-speech-language-pathologist.webp" />
                                    <img itemprop="thumbnailUrl" 
                                    src="<?php echo $assets_url; ?>/assets/img/img-placeholder.png" 
                                    data-src="<?php echo $assets_url; ?>/assets/img/lisa-flowers-speech-language-pathologist.png.webp" 
                                    alt="Lisa G. Flowers - Speech Therapist" width="633" height="686" class="img-fluid lazyload wow animate__zoomIn">
                                </picture>
                            </div>

                            <div class="col-md-6 mb-4 mb-md-0 wow animate__fadeInLeft">
                                <h2 class="h3 text-center text-md-start">Lisa G. Flowers</h2>
                                <h3 class="h4 fw-normal mb-4">M.A., C.C.C. - S.L.P.</h3>

                                <ul class="list-group list-group-borderless list-group-icon-primary-bg my-4">
                                    <li class="list-group-item"><i class="fas fa-check text-white me-2"></i> We hope that the descriptions of our products were clear and comprehensive.</li>
                                    <li class="list-group-item"><i class="fas fa-check text-white me-2"></i> We hope that after purchasing and using our products, you find that they are user-friendly and effective.</li>
                                    <li class="list-group-item"><i class="fas fa-check text-white me-2"></i> We're here to answer any questions you may have.</li>
                                    <li class="list-group-item"><i class="fas fa-check text-white me-2"></i> We'd also love to hear any comments or suggestions you may have.  After all, many of these products were modified over time after using them with students and finding out what worked and what could be improved upon.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="p-0 pb-4 pb-md-0 bg-secondary position-relative">
                    <div class="container">
                        <div class="row g-0 justify-content-lg-between">
                            <div class="col-md-6 bg-transparent-start z-index-m9 position-relative h-100 d-flex align-items-center z-index-9">
                                <div class="position-relative w-100 py-5 pe-0 pe-md-6">
                                    <h4 class="text-white mb-4">Just fill out the form and we'll get back to you.</h4>
                                    <div id="mail-status"></div>
                                    <form class="contact-form form-primary form-line needs-validation" id="contactCA" action="" method="POST" novalidate="novalidate">
                                        <div id="contact_form">
                                            <div class="mb-4">
                                                <label class="visually-hidden">Name</label>
                                                <input type="text" id="name" name="name" placeholder="Enter your name" value="" class="form-control" required />
                                            </div>
                                            <div class="mb-4">
                                                <label class="visually-hidden">Email</label>
                                                <input type="text" id="email" name="email" placeholder="Enter your email" value="" class="form-control" required />
                                            </div>
                                            <div class="mb-4">
                                                <label class="visually-hidden">Phone</label>
                                                <input type="text" id="phone" name="phone" placeholder="Enter your phone number" value="" class="form-control" required />
                                            </div>
                                            <div class="mb-4">
                                                <label class="visually-hidden">Subject</label>
                                                <input type="text" id="subject" name="subject" placeholder="Enter subject" value="" class="form-control" />
                                            </div>
                                            <div class="mb-4">
                                                <label class="visually-hidden">Message</label>
                                                <textarea id="comments" name="comments" class="form-control" placeholder="Write here..." rows="5"></textarea>
                                            </div>
                                            <div class="mb-4">
                                                <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
	                                            <script src='https://www.google.com/recaptcha/api.js' defer></script>
                                            </div>
                                            <div class="mb-4">
                                                <button id="send-message" class="btn btn-success fw-bold text-white" type="submit">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-full-right">
                                <div class="position-md-absolute end-0 top-0 w-100 contact-location-map bg-dark">
                                    <iframe tabindex="-1" class="w-100 h-100 grayscale border-0 lazyload" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.144840717509!2d-73.69196328429899!3d40.824782138644494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c288d1c56a95a5%3A0x3253ac8ce69139a5!2s68B%20Mackey%20Ave%2C%20Port%20Washington%2C%20NY%2011050%2C%20USA!5e0!3m2!1sen!2sin!4v1676223066034!5m2!1sen!2sin" loading="lazy" aria-hidden="false"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pt-6">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <div class="section-heading">
                                    <h5 class="section-heading-sm fw-normal small wow animate__fadeInUp">Communication Acceleration is owned and operated by:</h5>
                                    <hr class="success wow animate__zoomIn" />
                                    <p class="lead wow animate__fadeInUp"><strong>Creative Media Spark Inc.</strong><br />
                                    68B Mackey Avenue<br />
                                    First Floor<br />
                                    Port Washington New York, 11050</p>
                                    <p class="lead wow animate__fadeInUp mt-4"><i class="fa fa-phone text-success me-2"></i> (475) 882-6768</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="bg-secondary text-center lh-none mt-minus-1">
                    <svg class="img-fluid fill-main-bg" xmlns="http://www.w3.org/2000/svg" version="1.0" width="1200" fill="#f1f2f4" height="30" viewBox="0 0 1200 30" preserveAspectRatio="none"><path d="M0,0S1.209,1.508,200.671,7.031C375.088,15.751,454.658,30,600,30V0H0ZM1200,0s-90.21,1.511-200.671,7.034C824.911,15.751,745.342,30,600,30V0h600Z"></path></svg>
                </div>

                <?php include("../includes/footer.php"); ?>
            </article>
        </main>

        <aside class="col sidebar right">
            <?php include("../includes/sidebar-nav.php"); ?>
        </aside>
    </div>

    <?php include("../includes/global.php"); ?>
</body>
</html>

<script type="text/javascript" defer>
    $(document).ready(function (e) {
        $("#contactCA").on('submit', (function(e) {
            e.preventDefault();
            $("#mail-status").hide();
            // $('#send-message').hide();
            $('#loader-icon').show();
            $.ajax({
                url: "includes/contact-action.php",
                type: "POST",
                dataType: 'json',
                data: {
                    "name": $('input[name="name"]').val(),
                    "email": $('input[name="email"]').val(),
                    "phone": $('input[name="phone"]').val(),
                    "subject": $('input[name="subject"]').val(),
                    "comments": $('textarea[name="comments"]').val(),
                    "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                },
                success: function (response) {
                    $("#mail-status").show();
                    $('#loader-icon').hide();
                    if (response.type == "error") {
                        $('#send-message').show();
                        $("#mail-status").attr("class", "alert alert-danger text-center");
                    } else if (response.type == "message") {
                        $('#send-message').hide();
                        $("#contact_form").hide();
                        $("#mail-status").attr("class", "alert alert-success text-center");
                    }
                    $("#mail-status").html(response.text);
                },
                error: function () {}
            });
        }));
    });
</script>