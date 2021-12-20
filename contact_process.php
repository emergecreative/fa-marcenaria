<?php
    
    $to = "contato@marcenariafa.com.br";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset='UTF-8'";
    
    $subject = "Novo contato via Site";

    $logo = 'img/logo.png';
    $link = '#';

	$bodyClient = '<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width" name="viewport" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }
        
        table,
        td,
        tr {
            vertical-align: top;
            border-collapse: collapse;
        }
        
        * {
            line-height: inherit;
        }
        
        a[x-apple-data-detectors=true] {
            color: inherit !important;
            text-decoration: none !important;
        }
    </style>
    <style id="media-query" type="text/css">
        @media (max-width: 700px) {
            .block-grid,
            .col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
            }
            .block-grid {
                width: 100% !important;
            }
            .col {
                width: 100% !important;
            }
            .col_cont {
                margin: 0 auto;
            }
            img.fullwidth,
            img.fullwidthOnMobile {
                max-width: 100% !important;
            }
            .no-stack .col {
                min-width: 0 !important;
                display: table-cell !important;
            }
            .no-stack.two-up .col {
                width: 50% !important;
            }
            .no-stack .col.num2 {
                width: 16.6% !important;
            }
            .no-stack .col.num3 {
                width: 25% !important;
            }
            .no-stack .col.num4 {
                width: 33% !important;
            }
            .no-stack .col.num5 {
                width: 41.6% !important;
            }
            .no-stack .col.num6 {
                width: 50% !important;
            }
            .no-stack .col.num7 {
                width: 58.3% !important;
            }
            .no-stack .col.num8 {
                width: 66.6% !important;
            }
            .no-stack .col.num9 {
                width: 75% !important;
            }
            .no-stack .col.num10 {
                width: 83.3% !important;
            }
            .video-block {
                max-width: none !important;
            }
            .mobile_hide {
                min-height: 0px;
                max-height: 0px;
                max-width: 0px;
                display: none;
                overflow: hidden;
                font-size: 0px;
            }
            .desktop_hide {
                display: block !important;
                max-height: none !important;
            }
        }
    </style>
    <style id="icon-media-query" type="text/css">
        @media (max-width: 700px) {
            .icons-inner {
                text-align: center;
            }
            .icons-inner td {
                margin: 0 auto;
            }
        }
    </style>
</head>

<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f5f5f5;">
    <!--[if IE]><div class="ie-browser"><![endif]-->
    <table bgcolor="#f5f5f5" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f5f5f5; width: 100%;"
        valign="top" width="100%">
        <tbody>
            <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top;" valign="top">
                    <div style="background-color:transparent;">
                        <div class="block-grid two-up" style="min-width: 320px; max-width: 680px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
                            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                                <div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 336px; width: 340px;">
                                    <div class="col_cont" style="width:100% !important;">
                                        <!--[if (!mso)&(!IE)]><!-->
                                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                                            <!--<![endif]-->
                                            <div class="img-container left autowidth" style="padding-right: 30px;padding-left: 30px;">

                                                <div style="font-size:1px;line-height:30px"></div><img alt="FA Marcenaria" class="center autowidth" src="https://marcenariafa.com.br/assets/img/logo/logo2.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 280px; display: block; margin-left: 19px;"
                                                    title="FA Marcenaria" width="280" />
                                                <div style="font-size:1px;line-height:30px"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 336px; width: 340px;">
                                    <div class="col_cont" style="width:100% !important;">
                                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:10px; padding-bottom:10px; padding-right: 10px; padding-left: 10px;">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div style="background-color:transparent;">
                        <div class="block-grid" style="min-width: 320px; max-width: 680px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #3a3a3a;">
                            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#3a3a3a;">
                                <div class="col num12" style="min-width: 320px; max-width: 680px; display: table-cell; vertical-align: top; width: 680px;">
                                    <div class="col_cont" style="width:100% !important;padding:50px 20px 80px 20px">

                                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                                            <div style="color:#ffffff;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px;">
                                                <div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #ffffff; mso-line-height-alt: 14px;">
                                                    <p style="margin: 0; font-size: 42px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 86px; margin-top: 0; margin-bottom: 0;"><span style="font-size: 62px;">Obrigado por entrar em contato</span></p>
                                                </div>
                                            </div>

                                            <div style="color:#ffffff;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;">
                                                <div class="txtTinyMce-wrapper" style="line-height: 1.5; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #ffffff; mso-line-height-alt: 18px;">
                                                    <p style="margin: 0; font-size: 20px; line-height: 1.5; word-break: break-word; mso-line-height-alt: 30px; margin-top: 0; margin-bottom: 0;">
                                                        <span style="font-size: 20px;">Olá ' . $name . ', sua mensagem foi recebida por nossa equipe, entraremos em contato assim que possível.</span>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>';

$body = '<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width" name="viewport" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }
        
        table,
        td,
        tr {
            vertical-align: top;
            border-collapse: collapse;
        }
        
        * {
            line-height: inherit;
        }
        
        a[x-apple-data-detectors=true] {
            color: inherit !important;
            text-decoration: none !important;
        }
    </style>
    <style id="media-query" type="text/css">
        @media (max-width: 700px) {
            .block-grid,
            .col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
            }
            .block-grid {
                width: 100% !important;
            }
            .col {
                width: 100% !important;
            }
            .col_cont {
                margin: 0 auto;
            }
            img.fullwidth,
            img.fullwidthOnMobile {
                max-width: 100% !important;
            }
            .no-stack .col {
                min-width: 0 !important;
                display: table-cell !important;
            }
            .no-stack.two-up .col {
                width: 50% !important;
            }
            .no-stack .col.num2 {
                width: 16.6% !important;
            }
            .no-stack .col.num3 {
                width: 25% !important;
            }
            .no-stack .col.num4 {
                width: 33% !important;
            }
            .no-stack .col.num5 {
                width: 41.6% !important;
            }
            .no-stack .col.num6 {
                width: 50% !important;
            }
            .no-stack .col.num7 {
                width: 58.3% !important;
            }
            .no-stack .col.num8 {
                width: 66.6% !important;
            }
            .no-stack .col.num9 {
                width: 75% !important;
            }
            .no-stack .col.num10 {
                width: 83.3% !important;
            }
            .video-block {
                max-width: none !important;
            }
            .mobile_hide {
                min-height: 0px;
                max-height: 0px;
                max-width: 0px;
                display: none;
                overflow: hidden;
                font-size: 0px;
            }
            .desktop_hide {
                display: block !important;
                max-height: none !important;
            }
        }
    </style>
    <style id="icon-media-query" type="text/css">
        @media (max-width: 700px) {
            .icons-inner {
                text-align: center;
            }
            .icons-inner td {
                margin: 0 auto;
            }
        }
    </style>
</head>

<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f5f5f5;">
    <!--[if IE]><div class="ie-browser"><![endif]-->
    <table bgcolor="#f5f5f5" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f5f5f5; width: 100%;"
        valign="top" width="100%">
        <tbody>
            <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top;" valign="top">
                    <div style="background-color:transparent;">
                        <div class="block-grid two-up" style="min-width: 320px; max-width: 680px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
                            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                                <div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 336px; width: 340px;">
                                    <div class="col_cont" style="width:100% !important;">
                                        <!--[if (!mso)&(!IE)]><!-->
                                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                                            <!--<![endif]-->
                                            <div class="img-container left autowidth" style="padding-right: 30px;padding-left: 30px;">

                                                <div style="font-size:1px;line-height:30px"> </div><img alt="FA Marcenaria" class="center autowidth" src="https://marcenariafa.com.br/assets/img/logo/logo_mail.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 280px; display: block; margin-left: 19px;"
                                                    title="FA Marcenaria" width="280" />
                                                <div style="font-size:1px;line-height:30px"> </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 336px; width: 340px;">
                                    <div class="col_cont" style="width:100% !important;">
                                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:10px; padding-bottom:10px; padding-right: 10px; padding-left: 10px;">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div style="background-color:transparent;">
                        <div class="block-grid" style="min-width: 320px; max-width: 680px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #3a3a3a;">
                            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#3a3a3a;">
                                <div class="col num12" style="min-width: 320px; max-width: 680px; display: table-cell; vertical-align: top; width: 680px;">
                                    <div class="col_cont" style="width:100% !important;padding:50px 20px 80px 20px">

                                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                                            <div style="color:#ffffff;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px;">
                                                <div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #ffffff; mso-line-height-alt: 14px;">
                                                    <p style="margin: 0; font-size: 42px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 86px; margin-top: 0; margin-bottom: 0;"><span style="font-size: 62px;">Contato via Site</span></p>
                                                </div>
                                            </div>

                                            <div style="color:#ffffff;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;">
                                                <div class="txtTinyMce-wrapper" style="line-height: 1.5; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #ffffff; mso-line-height-alt: 18px;">
                                                    <p style="margin: 0; font-size: 20px; line-height: 1.5; word-break: break-word; mso-line-height-alt: 30px; margin-top: 0; margin-bottom: 0;">
                                                        <span style="font-size: 18px;">O usuário <strong>'. $name .'</strong> entrou em contato, seguem os dados do mesmo:</span><br>
                                                        <span style="font-size: 20px;"><strong> Nome: '. $name .'</strong></span><br>
                                                        <span style="font-size: 20px;"><strong>Email: '. $from .'</strong></span><br>
                                                        <span style="font-size: 20px;"><strong> Mensagem:</strong></span><br>
                                                        <span style="font-size: 16px;">'. $cmessage .'</span>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>';

    
    mail($to, $subject, $body, $headers);
    
	$headers_response = "From: " . $to . "\r\n";
	$headers_response  .= "Reply-To: ". $to . "\r\n";
	$headers_response  .= "MIME-Version: 1.0\r\n";
	$headers_response  .= "Content-Type: text/html; charset='UTF-8'";
    
    mail($from, 'Confirmação de contato', $bodyClient, $headers_response);
    
    echo '<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>f.a. marcenaria | Nossos serviços</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/icon_site.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./assets/plugin/aos/aos.css">
</head>

<body class="body-bg">
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>

            </div>
        </div>
    </div>
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <!-- <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div> -->
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Início</a></li>
                                    <li><a href="sobre.html">Sobre Nós</a></li>
                                    <!--li><a href="servicos.html">Serviços</a></li-->
                                    <li><a href="projetos.html">Projetos</a></li>
                                    <!-- <li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </li> -->
                                    <li><a href="contato.html">Contato</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <!-- <div class="header-btns d-none d-lg-block f-right">
                        <a href="#" class="btn header-btn">C</a>
                    </div> -->
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" width="300px" alt=""></a>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-80">
                                <h1>Olá, '. $name .'</h1>
                                <div class="row align-items-start">

                                    <div class="col-lg-12">
                                        <!-- Section Tittle -->
                                        <div style="margin-top:10px;padding: 40px;background-color: #fff; text-align: center;" class="section-tittle profession-details" data-aos="fade-left">
                                            <p style="text-align: center;">
                                                Sua mensagem foi enviada! Você receberá um e-mail de confirmação em seu e-mail. <br> <strong>Nossa equipe responderá sua solicitação assim que possível.</strong>
                                            </p>/
                                            <p style="text-align: center;">
                                                <strong><a class="amarelo" href="https://marcenariafa.com.br/">Voltar para a home</a></strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="https://marcenariafa.com.br/assets/img/logo/logo2_footer.png" alt="" width="300px"></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Personalização e particularidade em cada projeto.</p>
                                    </div>
                                </div>
                                <div class="footer-number">
                                    <a href="tel:+551136850594">
                                        <h4><a href="tel:+551136850594">+55 11 3685 0594</a></h4>
                                    </a>
                                    <p><a href="mailto:contato@marcenariafa.com.br">contato@marcenariafa.com.br</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Venha Nos Visitar</h4>
                                </div>
                                <div class="footer-cap">
                                    <span>Estamos localizados a apenas 8min da estação Presidente Altino</span>
                                    <p>rua erasmo braga, 600 <br> presidente altino | osasco | sp | 06213-005</p>
                                </div>
                                <div class="footer-tittle">
                                    <h4></h4><a href="https://goo.gl/maps/n2dzn2rgAbvQav7o9">Veja como chegar</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Instagram -->
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Instagram Feed</h4>
                                </div>
                                <div class="instagram-gellay">
                                    <ul class="insta-feed">
                                        <li>
                                            <a href="#"><img src="assets/img/gallery/instagram1.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/gallery/instagram2.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/gallery/instagram3.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/gallery/instagram4.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/gallery/instagram5.png" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/gallery/instagram6.png" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-6">
                            <div class="footer-copy-right">
                                <span style="color: white;">
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos Direitos Reservados | Desenvolvido por <a href="http://emergecreative.com.br/"target="_blank"><img src="https://www.emergecreative.com.br/images/logo_emerge.png"width="80pg"></a>
                            </span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">

                                <a href="https://www.facebook.com/f.a.marcenaria.oficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/f.a.marcenaria/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>


    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <!-- jQuery Parallax -->
    <script src="./assets/plugin/parallax/parallax.js"></script>
    <script src="./assets/plugin/parallax/parallax.min.js"></script>

    <!-- jQuery AOS -->

    <script src="./assets/plugin/aos/aos.js"></script>

    <!-- jQuery Personalizado -->
    <script src="./assets/js/script.js"></script>
</body>

</html>';
?>