<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ELMAZAD@</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('css/copypage/assets/img/logo.jpg')}}" rel="icon"> 
    {{-- <link href="{{url('css/copypage/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Vendor CSS Files -->
    <link href="{{url('css/copypage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/copypage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('css/copypage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{url('css/copypage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('css/copypage/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('css/copypage/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{url('css/homepage/Home.css')}}" rel="stylesheet">
    <link href="{{url('css/homepage/bootstrap.min.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
                body {
                    background-color: #000
                }

                header {
                    border-bottom:solid 3px white 
                
                }

                header .logoimg img {
                    width:120px;
                    height: 100px;
                    overflow: hidden;
                }

                header .logoimg{
                padding:5px; 
                }

                #more {
                    display: none;
                }

                        /**
                * Template Name: PhotoFolio
                * Updated: Mar 10 2023 with Bootstrap v5.2.3
                * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
                * Author: BootstrapMade.com
                * License: https://bootstrapmade.com/license/
                */

                /*--------------------------------------------------------------
                # Set main reusable colors and fonts using CSS variables
                # Learn more about CSS variables at https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties
                --------------------------------------------------------------*/
                /* Fonts */
                :root {
                --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                --font-primary: "Inter", sans-serif;
                --font-secondary: "Cardo", sans-serif;
                }

                /* Colors */
                :root {
                --color-default: #fafafa;
                --color-primary: #27a776;
                --color-secondary: #161718;
                }

                /* Smooth scroll behavior */
                :root {
                scroll-behavior: smooth;
                }

                /*--------------------------------------------------------------
                # General
                --------------------------------------------------------------*/
                body {
                font-family: var(--font-default);
                color: var(--color-default);
                background-color: #000;
                }

                a {
                color: var(--color-primary);
                text-decoration: none;
                }

                a:hover {
                color: #32cf93;
                text-decoration: none;
                }

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                font-family: var(--font-primary);
                }

                /*--------------------------------------------------------------
                # Sections & Section Header
                --------------------------------------------------------------*/
                .section-header {
                padding-bottom: 40px;
                }

                .section-header h2 {
                font-size: 14px;
                font-weight: 500;
                padding: 0;
                line-height: 1px;
                margin: 0 0 5px 0;
                letter-spacing: 2px;
                text-transform: uppercase;
                color: rgba(255, 255, 255, 0.6);
                font-family: var(--font-primary);
                }

                .section-header h2::after {
                content: "";
                width: 120px;
                height: 1px;
                display: inline-block;
                background: #5bd9a9;
                margin: 4px 10px;
                }

                .section-header p {
                margin: 0;
                margin: 0;
                font-size: 36px;
                font-weight: 700;
                font-family: var(--font-secondary);
                color: #fff;
                }

                /*--------------------------------------------------------------
                # Page Header
                --------------------------------------------------------------*/
                .page-header {
                padding: 120px 0 60px 0;
                min-height: 30vh;
                position: relative;
                }

                .page-header h2 {
                font-size: 56px;
                font-weight: 500;
                color: #fff;
                font-family: var(--font-secondary);
                }

                @media (max-width: 768px) {
                .page-header h2 {
                    font-size: 36px;
                }
                }

                .page-header p {
                color: rgba(255, 255, 255, 0.8);
                }

                .page-header .cta-btn {
                font-family: var(--font-primary);
                font-weight: 400;
                font-size: 20px;
                display: inline-block;
                padding: 12px 40px;
                border-radius: 4px;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: 0.3s;
                color: #fff;
                background: var(--color-primary);
                }

                .page-header .cta-btn:hover {
                background: #2cbc85;
                }

                /*--------------------------------------------------------------
                # Scroll top button
                --------------------------------------------------------------*/
                .scroll-top {
                position: fixed;
                visibility: hidden;
                opacity: 0;
                right: 15px;
                bottom: -15px;
                z-index: 99999;
                background: var(--color-primary);
                width: 44px;
                height: 44px;
                border-radius: 50px;
                transition: all 0.4s;
                }

                .scroll-top i {
                font-size: 24px;
                color: #fff;
                line-height: 0;
                }

                .scroll-top:hover {
                background: rgba(39, 167, 118, 0.8);
                color: #fff;
                }

                .scroll-top.active {
                visibility: visible;
                opacity: 1;
                bottom: 15px;
                }

                /*--------------------------------------------------------------
                # Preloader
                --------------------------------------------------------------*/
                #preloader {
                display: flex;
                position: fixed;
                inset: 0;
                width: 100%;
                height: 100vh;
                z-index: 99999;
                }

                #preloader:before,
                #preloader:after {
                content: "";
                background-color: var(--color-secondary);
                position: absolute;
                inset: 0;
                width: 50%;
                height: 100%;
                transition: all 0.3s ease 0s;
                z-index: -1;
                }

                #preloader:after {
                left: auto;
                right: 0;
                }

                #preloader .line {
                position: relative;
                overflow: hidden;
                margin: auto;
                width: 1px;
                height: 280px;
                transition: all 0.8s ease 0s;
                }

                #preloader .line:before {
                content: "";
                position: absolute;
                background-color: #fff;
                left: 0;
                top: 50%;
                width: 1px;
                height: 0%;
                transform: translateY(-50%);
                animation: lineincrease 1000ms ease-in-out 0s forwards;
                }

                #preloader .line:after {
                content: "";
                position: absolute;
                background-color: #999;
                left: 0;
                top: 0;
                width: 1px;
                height: 100%;
                transform: translateY(-100%);
                animation: linemove 1200ms linear 0s infinite;
                animation-delay: 2000ms;
                }

                #preloader.loaded .line {
                opacity: 0;
                height: 100% !important;
                }

                #preloader.loaded .line:after {
                opacity: 0;
                }

                #preloader.loaded:before,
                #preloader.loaded:after {
                animation: preloaderfinish 300ms ease-in-out 500ms forwards;
                }

                @keyframes lineincrease {
                0% {
                    height: 0%;
                }

                100% {
                    height: 100%;
                }
                }

                @keyframes linemove {
                0% {
                    transform: translateY(200%);
                }

                100% {
                    transform: translateY(-100%);
                }
                }

                @keyframes preloaderfinish {
                0% {
                    width: 5 0%;
                }

                100% {
                    width: 0%;
                }
                }

                /*--------------------------------------------------------------
                # Header
                --------------------------------------------------------------*/
                .header {
                transition: all 0.5s;
                z-index: 997;
                padding: 10px 0;
                background-color: #000;
                }

                /* .header .logo {
                transition: 0.3s;
                margin-left:20px ;
                } */

                /*start notification message*/


                #notification-icon {
                position: relative;
                }

                #notification-count {
                background-color: red;
                border-radius: 50%;
                color: white;
                font-size: 12px;
                height: 15px;
                line-height: 15px;
                position: absolute;
                right: -5px;
                text-align: center;
                top: -5px;
                width: 15px;
                z-index: 1;
                }

                #notification-dropdown {
                background-color: white;
                border: 1px solid #ccc;
                border-radius: 5px;
                display: none;
                position: absolute;
                right: 0;
                top: 40px;
                width: 300px;
                z-index: 2;
                }

                #notification-dropdown:before {
                border-bottom: 10px solid #ccc;
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                content: "";
                position: absolute;
                right: 10px;
                top: -10px;
                }

                #notification-container {
                max-height: 300px;
                overflow-y: auto;
                padding: 10px;
                }

                /* تحديد الأيقونة */
                #notification-icon.active {
                background-color: #ccc;
                }

                /* تنسيق الإشعارات */

                .notification-bell {
                position: relative;
                display: inline-block;
                color: #fff;
                }

                .notification-count {
                position: absolute;
                top: -10px;
                right: -10px;
                background-color: red;
                color: white;
                font-size: 12px;
                font-weight: bold;
                padding: 4px;
                border-radius: 50%;
                min-width: 10px;
                text-align: center;
                }

                .notification-list {
                display: none;
                position: absolute;
                top: 30px;
                right: 0;
                padding: 10px;
                background-color: #fff;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                border-radius: 5px;
                z-index: 1;
                }

                .notification-list.show {
                display: block;
                }

                .notification-bell:hover .notification-list {
                display: block;
                }

                .notification-bell .notification-list {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                min-width: 200px;
                padding: 10px;
                background-color:black;
                color: white;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                }

                .notification-bell .notification-list ul {
                list-style: none;
                margin: 0;
                padding: 0;
                direction: rtl;
                }

                .notification-bell .notification-list li {
                margin: 5px 0;
                padding: 5px;
                border-bottom: 1px solid #ccc;
                text-align: right;
                }

                .notification-bell .notification-list li:last-child {
                border-bottom: none;
                }

                .notification-bell .close-btn {
                position: absolute;
                top: 5px;
                right: 5px;
                background: none;
                border: none;
                cursor: pointer;
                }

                .notification-bell .close-btn i {
                color: #999;
                font-size: 16px;
                }

                .close-notification {
                position: relative;
                top: 0;
                right: 0;
                padding: 4px;
                font-size: 14px;
                color: #999;
                background-color: transparent;
                border: none;
                cursor: pointer;
                }

                .close-notification:hover {
                color: #333;
                }




                /*end notification message*/

                .header .logo img {

                margin-right: 8px;
                }

                .header .logo h1 {
                font-size: 32px;
                margin: 0;
                font-weight: 400;
                color: #fff;
                font-family: var(--font-secondary);
                }

                .header .logo i {
                font-size: 32px;
                margin-right: 8px;
                line-height: 0;
                }


                @media (max-width: 575px) {
                .header .logo h1 {
                    font-size: 26px;
                }

                .header .logo i {
                    font-size: 24px;
                }
                }

                .header .header-social-links {
                padding-right: 15px;
                margin-right:25px ;
                }

                .header .header-social-links a {
                color: rgba(255, 255, 255, 0.5);
                padding-left: 15px;
                display:inline-block;
                line-height: 0px;
                transition: 0.3s;
                font-size: 20px;
                }

                .header .header-social-links a:hover {
                color: #fff;
                }

                @media (max-width: 575px) {
                .header .header-social-links a {
                    padding-left: 5px;
                }
                }

                /*--------------------------------------------------------------
                # Desktop Navigation
                --------------------------------------------------------------*/
                @media (min-width: 1280px) {
                .navbar {
                    padding: 0;
                }

                .navbar ul {
                    margin: 0;
                    padding: 0;
                    display: flex;
                    list-style: none;
                    align-items: center;
                }

                .navbar li {
                    position: relative;
                }

                .navbar a,
                .navbar a:focus {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 10px 0 10px 30px;
                    font-family: var(--font-primary);
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    font-size: 20px;
                    font-weight: 400;
                    color: rgba(255, 255, 255, 0.5);
                    white-space: nowrap;
                    transition: 0.3s;
                }
                .navbar a:hover{
                    text-decoration:underline; 
                }

                .navbar a i,
                .navbar a:focus i {
                    font-size: 12px;
                    line-height: 0;
                    margin-left: 5px;
                }

                .navbar a:hover,
                .navbar .active,
                .navbar .active:focus,
                .navbar li:hover>a {
                    color: #fff;
                }

                .navbar .dropdown ul {
                    display: block;
                    position: absolute;
                    left: 14px;
                    top: calc(100% + 30px);
                    margin: 0;
                    padding: 10px 0;
                    z-index: 99;
                    opacity: 0;
                    visibility: hidden;
                    background: var(--color-secondary);
                    transition: 0.3s;
                    border-radius: 4px;
                }

                .navbar .dropdown ul li {
                    min-width: 200px;
                }

                .navbar .dropdown ul a {
                    padding: 10px 20px;
                    font-size: 15px;
                    text-transform: none;
                    font-weight: 400;
                }

                .navbar .dropdown ul a i {
                    font-size: 12px;
                }

                .navbar .dropdown ul a:hover,
                .navbar .dropdown ul .active:hover,
                .navbar .dropdown ul li:hover>a {
                    color: #fff;
                }

                .navbar .dropdown:hover>ul {
                    opacity: 1;
                    top: 100%;
                    visibility: visible;
                }

                .navbar .dropdown .dropdown ul {
                    top: 0;
                    left: calc(100% - 30px);
                    visibility: hidden;
                }

                .navbar .dropdown .dropdown:hover>ul {
                    opacity: 1;
                    top: 0;
                    left: 100%;
                    visibility: visible;
                }
                }

                @media (min-width: 1280px) and (max-width: 1366px) {
                .navbar .dropdown .dropdown ul {
                    left: -90%;
                }

                .navbar .dropdown .dropdown:hover>ul {
                    left: -100%;
                }
                }

                @media (min-width: 1280px) {

                .mobile-nav-show,
                .mobile-nav-hide {
                    display: none;
                }
                }

                /*--------------------------------------------------------------
                # Mobile Navigation
                --------------------------------------------------------------*/
                @media (max-width: 1279px) {
                .navbar {
                    position: fixed;
                    top: 0;
                    right: -100%;
                    width: 100%;
                    max-width: 400px;
                    bottom: 0;
                    transition: 0.3s;
                    z-index: 9997;
                }

                .navbar ul {
                    position: absolute;
                    inset: 0;
                    padding: 50px 0 10px 0;
                    margin: 0;
                    background: rgba(0, 0, 0, 0.9);
                    overflow-y: auto;
                    transition: 0.3s;
                    z-index: 9998;
                }

                .navbar a,
                .navbar a:focus {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 10px 20px;
                    font-family: var(--font-primary);
                    font-size: 13px;
                    text-transform: uppercase;
                    font-weight: 400;
                    color: rgba(255, 255, 255, 0.5);
                    letter-spacing: 1px;
                    white-space: nowrap;
                    transition: 0.3s;
                }

                .navbar a i,
                .navbar a:focus i {
                    font-size: 12px;
                    line-height: 0;
                    margin-left: 5px;
                }

                .navbar a:hover,
                .navbar .active,
                .navbar .active:focus,
                .navbar li:hover>a {
                    color: #fff;
                }

                .navbar .dropdown ul,
                .navbar .dropdown .dropdown ul {
                    position: static;
                    display: none;
                    padding: 10px 0;
                    margin: 10px 20px;
                    transition: all 0.5s ease-in-out;
                    border: 1px solid black;
                }

                .navbar .dropdown>.dropdown-active,
                .navbar .dropdown .dropdown>.dropdown-active {
                    display: block;
                }

                .mobile-nav-show {
                    color: #fff;
                    font-size: 28px;
                    cursor: pointer;
                    line-height: 0;
                    transition: 0.5s;
                    z-index: 9999;
                    margin: 0 10px 0 10px;
                }

                .mobile-nav-hide {
                    color: #fff;
                    font-size: 32px;
                    cursor: pointer;
                    line-height: 0;
                    transition: 0.5s;
                    position: fixed;
                    right: 20px;
                    top: 20px;
                    z-index: 9999;
                }

                .mobile-nav-active {
                    overflow: hidden;
                }

                .mobile-nav-active .navbar {
                    right: 0;
                }

                .mobile-nav-active .navbar:before {
                    content: "";
                    position: fixed;
                    inset: 0;
                    background: rgba(22, 23, 24, 0.8);
                    z-index: 9996;
                }
                }

                /*--------------------------------------------------------------
                # About Section
                --------------------------------------------------------------*/
                .about .content h2 {
                font-weight: 700;
                font-size: 24px;
                color: var(--color-primary);
                }

                .about .content ul {
                list-style: none;
                padding: 0;
                }

                .about .content ul li {
                margin-bottom: 20px;
                display: flex;
                align-items: center;
                }

                .about .content ul strong {
                margin-right: 10px;
                }

                .about .content ul i {
                font-size: 16px;
                margin-right: 5px;
                color: var(--color-primary);
                line-height: 0;
                }

                /*--------------------------------------------------------------
                # Testimonials Section
                --------------------------------------------------------------*/
                .testimonials {
                margin-top: 80px;
                }

                .testimonials .testimonial-item {
                box-sizing: content-box;
                padding: 30px;
                margin: 40px 30px;
                background: var(--color-secondary);
                min-height: 320px;
                display: flex;
                flex-direction: column;
                text-align: center;
                transition: 0.3s;
                }

                .testimonials .testimonial-item .stars {
                margin-bottom: 15px;
                }

                .testimonials .testimonial-item .stars i {
                color: #ffc107;
                margin: 0 1px;
                }

                .testimonials .testimonial-item .testimonial-img {
                width: 90px;
                border-radius: 50%;
                border: 5px solid #474a4d;
                margin: 0 auto;
                }

                .testimonials .testimonial-item h3 {
                font-size: 18px;
                font-weight: bold;
                margin: 10px 0 5px 0;
                color: #fff;
                }

                .testimonials .testimonial-item h4 {
                font-size: 14px;
                color: rgba(255, 255, 255, 0.5);
                margin: 0;
                }

                .testimonials .testimonial-item p {
                font-style: italic;
                margin: 0 auto 15px auto;
                }

                .testimonials .swiper-pagination {
                margin-top: 20px;
                position: relative;
                }

                .testimonials .swiper-pagination .swiper-pagination-bullet {
                width: 12px;
                height: 12px;
                background-color: rgba(255, 255, 255, 0.2);
                opacity: 1;
                }

                .testimonials .swiper-pagination .swiper-pagination-bullet-active {
                background-color: rgba(255, 255, 255, 0.5);
                }

                .testimonials .swiper-slide {
                opacity: 0.3;
                }

                @media (max-width: 1199px) {
                .testimonials .swiper-slide-active {
                    opacity: 1;
                }

                .testimonials .swiper-pagination {
                    margin-top: 0;
                }

                .testimonials .testimonial-item {
                    margin: 40px 20px;
                }
                }

                @media (min-width: 1200px) {
                .testimonials .swiper-slide-next {
                    opacity: 1;
                    transform: scale(1.12);
                }
                }

                /*--------------------------------------------------------------
                # Pricing Section
                --------------------------------------------------------------*/
                .gallery {
                margin-top: 40px;
                }

                .gallery .gallery-item {
                position: relative;
                overflow: hidden;
                border-radius: 10px;
                }

                .gallery .gallery-item img {
                transition: 0.3s;
                }

                .gallery .gallery-links {
                position: absolute;
                inset: 0;
                opacity: 0;
                transition: all ease-in-out 0.3s;
                background: rgba(0, 0, 0, 0.6);
                z-index: 3;
                }

                .gallery .gallery-links .preview-link,
                .gallery .gallery-links .details-link {
                font-size: 20px;
                color: rgba(255, 255, 255, 0.5);
                transition: 0.3s;
                line-height: 1.2;
                margin: 30px 8px 0 8px;
                }

                .gallery .gallery-links .preview-link:hover,
                .gallery .gallery-links .details-link:hover {
                color: #fff;
                }

                .gallery .gallery-links .details-link {
                font-size: 30px;
                line-height: 0;
                }

                .gallery .gallery-item:hover .gallery-links {
                opacity: 1;
                }

                .gallery .gallery-item:hover .preview-link,
                .gallery .gallery-item:hover .details-link {
                margin-top: 0;
                }

                .gallery .gallery-item:hover img {
                transform: scale(1.1);
                }

                .glightbox-clean .gslide-description {
                background: #222425;
                }

                .glightbox-clean .gslide-title {
                color: rgba(255, 255, 255, 0.8);
                margin: 0;
                }

                /*--------------------------------------------------------------
                # Gallery Single Section
                --------------------------------------------------------------*/
                .gallery-single .portfolio-details-slider  img {
                width: 100%;
                }

                .gallery-single .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
                width: 12px;
                height: 12px;
                background-color: rgba(255, 255, 255, 0.7);
                opacity: 1;
                }

                .gallery-single .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
                background-color: var(--color-primary);
                }

                .gallery-single .swiper-button-prev,
                .gallery-single .swiper-button-next {
                width: 48px;
                height: 48px;
                }

                .gallery-single .swiper-button-prev:after,
                .gallery-single .swiper-button-next:after {
                color: rgba(255, 255, 255, 0.8);
                background-color: rgba(0, 0, 0, 0.2);
                font-size: 24px;
                border-radius: 50%;
                width: 48px;
                height: 48px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: 0.3s;
                }

                .gallery-single .swiper-button-prev:hover:after,
                .gallery-single .swiper-button-next:hover:after {
                background-color: rgba(0, 0, 0, 0.6);
                }

                @media (max-width: 575px) {

                .gallery-single .swiper-button-prev,
                .gallery-single .swiper-button-next {
                    display: none;
                }
                }

                .gallery-single .portfolio-info h3 {
                font-size: 22px;
                font-weight: 700;
                margin-bottom: 20px;
                padding-bottom: 20px;
                position: relative;
                font-family: var(--font-secondary);
                }

                .gallery-single .portfolio-info h3:after {
                content: "";
                position: absolute;
                display: block;
                width: 50px;
                height: 3px;
                background: var(--color-primary);
                left: 0;
                bottom: 0;
                }

                .gallery-single .portfolio-info ul {
                list-style: none;
                padding: 0;
                font-size: 15px;
                }

                .gallery-single .portfolio-info ul li {
                display: flex;
                flex-direction: column;
                padding-bottom: 15px;
                }

                .gallery-single .portfolio-info ul strong {
                text-transform: uppercase;
                font-weight: 400;
                color: #6b7075;
                font-size: 14px;
                }

                .gallery-single .portfolio-info .btn-visit {
                padding: 8px 40px;
                background: var(--color-primary);
                color: #fff;
                border-radius: 50px;
                transition: 0.3s;
                }

                .gallery-single .portfolio-info .btn-visit:hover {
                background: #2cbc85;
                }

                .gallery-single .portfolio-description h2 {
                font-size: 26px;
                font-weight: 700;
                margin-bottom: 20px;
                color: #fff;
                font-family: var(--font-secondary);
                }

                .gallery-single .portfolio-description p {
                padding: 0;
                }

                .gallery-single .portfolio-description .testimonial-item {
                padding: 30px 30px 0 30px;
                position: relative;
                background: var(--color-secondary);
                height: 100%;
                margin-bottom: 50px;
                }

                .gallery-single .portfolio-description .testimonial-item .testimonial-img {
                width: 90px;
                border-radius: 50px;
                border: 6px solid #2e3133;
                float: left;
                margin: 0 10px 0 0;
                }

                .gallery-single .portfolio-description .testimonial-item h3 {
                font-size: 18px;
                font-weight: bold;
                margin: 15px 0 5px 0;
                padding-top: 20px;
                }

                .gallery-single .portfolio-description .testimonial-item h4 {
                font-size: 14px;
                color: rgba(255, 255, 255, 0.6);
                margin: 0;
                }

                .gallery-single .portfolio-description .testimonial-item .quote-icon-left,
                .gallery-single .portfolio-description .testimonial-item .quote-icon-right {
                color: #5bd9a9;
                font-size: 26px;
                line-height: 0;
                }

                .gallery-single .portfolio-description .testimonial-item .quote-icon-left {
                display: inline-block;
                left: -5px;
                position: relative;
                }

                .gallery-single .portfolio-description .testimonial-item .quote-icon-right {
                display: inline-block;
                right: -5px;
                position: relative;
                top: 10px;
                transform: scale(-1, -1);
                }

                .gallery-single .portfolio-description .testimonial-item p {
                font-style: italic;
                margin: 0 0 15px 0 0 0;
                padding: 0;
                }

                /*--------------------------------------------------------------
                # Services Section
                --------------------------------------------------------------*/
                .services .service-item {
                padding: 50px 30px;
                transition: all ease-in-out 0.4s;
                background: var(--color-secondary);
                height: 100%;
                overflow: hidden;
                z-index: 1;
                }

                .services .service-item:before {
                content: "";
                position: absolute;
                background: #1d1f20;
                top: -200px;
                transition: all 0.3s;
                z-index: -1;
                }

                .services .service-item i {
                background: var(--color-primary);
                color: #fff;
                font-size: 24px;
                transition: 0.3s;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 56px;
                height: 56px;
                border-radius: 50%;
                }

                .services .service-item h4 {
                font-weight: 600;
                margin: 15px 0 0 0;
                transition: 0.3s;
                font-size: 20px;
                }

                .services .service-item h4 a {
                color: #fff;
                }

                .services .service-item p {
                line-height: 24px;
                font-size: 14px;
                margin: 15px 0 0 0;
                }

                .services .service-item:hover:before {
                background: var(--color-primary);
                right: 0;
                top: 0;
                width: 100%;
                height: 100%;
                border-radius: 0px;
                }

                .services .service-item:hover h4 a,
                .services .service-item:hover p {
                color: #fff;
                }

                .services .service-item:hover i {
                background: #fff;
                color: var(--color-primary);
                }

                /*--------------------------------------------------------------
                # Pricing Section
                --------------------------------------------------------------*/
                .pricing {
                margin-top: 80px;
                }

                .pricing .pricing-item {
                border-bottom: 1px dashed #474a4d;
                width: 100%;
                height: 100%;
                padding: 0 0 15px 0;
                }

                .pricing .pricing-item h3 {
                margin: 0;
                font-size: 18px;
                font-weight: 500;
                color: rgba(255, 255, 255, 0.6);
                }

                .pricing .pricing-item h4 {
                margin: 0;
                font-size: 16px;
                }

                /*--------------------------------------------------------------
                # Contact Section
                --------------------------------------------------------------*/
                .contact .info-item+.info-item {
                margin-top: 40px;
                }

                .contact .info-item i {
                font-size: 20px;
                color: var(--color-primary);
                float: left;
                width: 44px;
                height: 44px;
                background: #222425;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50px;
                transition: all 0.3s ease-in-out;
                margin-right: 15px;
                }

                .contact .info-item h4 {
                padding: 0;
                font-size: 20px;
                font-weight: 600;
                margin-bottom: 5px;
                color: rgba(255, 255, 255, 0.5);
                }

                .contact .info-item p {
                padding: 0;
                margin-bottom: 0;
                font-size: 14px;
                color: #fff;
                }

                .contact .info-item:hover i {
                background: var(--color-primary);
                color: #fff;
                }

                .contact .php-email-form {
                width: 100%;
                }

                .contact .php-email-form .form-group {
                padding-bottom: 8px;
                }

                .contact .php-email-form .error-message {
                display: none;
                color: #fff;
                background: #df1529;
                text-align: left;
                padding: 15px;
                font-weight: 600;
                }

                .contact .php-email-form .error-message br+br {
                margin-top: 25px;
                }

                .contact .php-email-form .sent-message {
                display: none;
                color: #fff;
                background: var(--color-primary);
                text-align: center;
                padding: 15px;
                font-weight: 600;
                }

                .contact .php-email-form .loading {
                display: none;
                background: var(--color-secondary);
                text-align: center;
                padding: 15px;
                color: rgba(255, 255, 255, 0.6);
                }

                .contact .php-email-form .loading:before {
                content: "";
                display: inline-block;
                border-radius: 50%;
                width: 24px;
                height: 24px;
                margin: 0 10px -6px 0;
                border: 3px solid var(--color-primary);
                border-top-color: var(--color-secondary);
                animation: animate-loading 1s linear infinite;
                }

                .contact .php-email-form input,
                .contact .php-email-form textarea {
                border-radius: 4px;
                box-shadow: none;
                font-size: 14px;
                background-color: var(--color-secondary);
                border: 1px solid #2e3133;
                color: #fff;
                }

                .contact .php-email-form input {
                height: 44px;
                }

                .contact .php-email-form textarea {
                padding: 10px 12px;
                }

                .contact .php-email-form button[type=submit] {
                background: var(--color-primary);
                border: 0;
                padding: 10px 35px;
                color: #fff;
                transition: 0.4s;
                border-radius: 4px;
                }

                .contact .php-email-form button[type=submit]:hover {
                background: rgba(39, 167, 118, 0.8);
                }

                @keyframes animate-loading {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
                }

                /*--------------------------------------------------------------
                # Hero Section
                --------------------------------------------------------------*/
                .hero {
                width: 100%;
                min-height: 30vh;
                background: #000;
                background-size: cover;
                position: relative;
                padding: 140px 0 60px 0;
                }

                .hero h2 {
                margin: 0 0 10px 0;
                font-size: 38px;
                font-weight: 700;
                color: #fff;
                font-family: var(--font-secondary);
                }

                .hero h2 span {
                position: relative;
                z-index: 1;
                padding: 0 5px;
                display: inline-block;
                }

                .hero h2 span:before {
                content: "";
                position: absolute;
                height: 50%;
                bottom: 0;
                left: 0;
                right: 0;
                background: var(--color-primary);
                z-index: -1;
                }

                .hero p {
                color: rgba(255, 255, 255, 0.6);
                margin-bottom: 30px;
                font-size: 18px;
                }

                .hero .btn-get-started {
                font-family: var(--font-primary);
                font-weight: 400;
                font-size: 14px;
                display: inline-block;
                padding: 12px 40px;
                border-radius: 4px;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: 0.3s;
                color: #fff;
                background: var(--color-primary);
                }

                .hero .btn-get-started:hover {
                background: #2cbc85;
                }

                @media (max-width: 768px) {
                .hero h2 {
                    font-size: 32px;
                }
                }

                /*--------------------------------------------------------------
                # Footer
                --------------------------------------------------------------*/
                .footer {
                margin-top: 30px;
                padding: 30px 0;
                font-size: 14px;
                border-top: 1px solid rgba(255, 255, 255, 0.15);
                }

                .footer .copyright {
                text-align: center;
                color: rgba(255, 255, 255, 0.8);
                }

                .footer .credits {
                padding-top: 6px;
                text-align: center;
                font-size: 13px;
                color: rgba(255, 255, 255, 0.8);
                }

                .footer .credits a {
                color: var(--color-primary);
                }

                .timer {
                display: flex;
                }


                .timer div h2 {
                background-color: white;
                color: black;
                text-align: center;
                font-size:27px ;
                }

                .timer div h3 {
                font-size: 20px;
                }

                .products{
                width:100% ;
                height: auto;
                overflow: hidden;
                }
                .gallery table{
                width:100% ;
                border:none ;
                }

                table td{
                height:300px ;
                width:500px ;
                border: none;
                margin-left:10px ;
                }

                .icon2 {
                display: flex;
                justify-content: space-between;
                width: 90%;
                height:40vh ;
                margin-left: 50px; 
                color: white;
                }

                .icon2 a {
                font-size: 38px;
                }

                .icon2 .left {
                display: flex;
                }

                .icon2 .left a {
                margin-left: 20px;
                }


                .icon2 .right .bar {
                margin-left: 60px;
                font-size: 40px;
                }

                .icon2 .container {
                height: 30px;
                width: 80px;
                position: relative;
                text-align: center;
                cursor: pointer;
                }

                .dropdown {
                display: none;
                position: absolute;
                right:50px;
                width: 400px;
                height: 350px;
                text-align: right;
                background-color: #ffffff;
                color: #000;
                margin-bottom: 20px;
                z-index: 1;
                }

                .dropdown a {
                text-decoration: none;
                background-color: #373565;
                display: block;
                padding: 10px;
                font-size: 25px;
                text-align: center;
                }

                .dropdown a:hover {
                background-color: white;
                color: black;
                }

                .container:hover .dropdown {
                display: block;
                }   

                .post{
                     font-family: "Poppins",sans-serif;
                    }
                    .post p{
                        font-size: 14px;
                    }
                    .post button{
                        padding: 10px;
                        background-color:#373565;
                        color: #ffffff;
                        
                        border: none;
                        cursor: pointer;
                    }
                    .post:not(:last-child){
                        margin-bottom: 50px;
                    }
                    .hide{
                        display: none;
                    }

                    .course-countdown{
                        
                        justify-content:space-between;
                        align-items:center;
                        padding:10px 0
                    }
                    
                    .course-countdown h3{
                        font-size:15px;
                        padding:20px 19.8px;
                        background: crimson;
                        color: crimson;
                        color: #fff;
                        border: 2px solid crimson;
                    }
                    
                    .course-countdown ul{
                        
                        display:flex;
                        align-items:center;
                        justify-content:space-around;
                        padding:20px 9px;
                        list-style-type:none;
                    
                    }
                    
                    .course-countdown ul li{
                        font-size:17px;
                        font-weight: bold;
                        margin-right:3px ;
                        padding:2px ;
                        background-color: white;
                        color: #000;

                    }

                    .course-countdown .lis2{
                        display:flex;
                        align-items:center;
                        justify-content:space-around;
                        padding:20px 9px;
                        list-style-type:none;
                        
                    
                    
                    }
                    
                    .course-countdown .lis2 li{
                        font-size:17px;
                        font-weight: bold;
                        margin-right:3px ;
                        padding:2px ;
                        background-color:gray;
                        color:#ffffff;
                    }

    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            {{-- <a href="#" class="logo d-flex align-items-center  me-auto me-lg-0">
                <img src="{{url('/images/products/logo.jpeg')}}" alt="" style="height:500px ;">
            </a> --}}
            <div class="logoimg">
                <a href="{{route('home.page')}}">
                <img src="{{url('/images/products/logo.jpg')}}" alt=""></a>
            </div>

            <nav id="navbar" class="navbar" style="">
                <ul>
                    <li><a href="{{route('home.page')}}">الصفحة الرئيسية</a></li>
                    @foreach($categories as $category )
                    <li><a href="{{route('category.page',$category-> id)}}">{{$category -> name}}</a></li>
                   @endforeach
                    <li><a href="{{route('view.login.user')}}">تسجيل دخول</a></li>
                    <li><a href="#">تسجيل خروج</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="header-social-links">
                <div class="notification-bell">
                    <i class="fas fa-bell"></i>
                    <span class="notification-count">0</span>
                    <div class="notification-list"  style="">
                        <ul>
                            <li>لديك رسالة جديدة 1 <button class="close-notification"><i
                                        class="fas fa-times"></i></button>
                            </li>
                            <li>لديك طلب مراسلة 2 <button class="close-notification"><i
                                        class="fas fa-times"></i></button>
                            </li>
                            <li>رسالة 3 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                            <li>رسالة 4 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                            <li>رسالة جديدة <button class="close-notification"><i class="fas fa-times"></i></button>
                            </li>
                            <li>رسالة 6 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                            <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                            <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                            <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                            <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                            <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>

                        </ul>
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <a href="{{route('edit.user')}}"> <i class="fa-regular fa-user"></i></a>
                <a href="{{route('favorite.page')}}"> <i class="fa-regular fa-heart"></i></a>
                <a href="{{route('home.page')}}"> <i class="fa fa-thin fa-house"></i></a>
                <a href="#"> <i class="fa-solid fa-circle-plus"></i></a>
                {{-- <a href="{{route('edit.user')}}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{route('favorite.page')}}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{route('home.page')}}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="" class="linkedin"><i class="bi bi-linkedin"></i></i></a> --}}
            </div>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <div class="icon2" style="margin-top:200px ; color: white;">
        <div class="left">
            <a href="#" style="color: white;margin-left:50px "> <i class="fa fa-light fa-book"></i></a>
        </div><!-- left -->
      <div>
        @if(Session::has('error'))
        <div class="alert alert-danger" id="sessionErr" style="text-align:center;width:auto;height:50px ; margin-top:20px ;margin-left:20px;  " role="alert">{{Session::get('error')}}</div> 
        @endif   
     </div>
     
     <div>
        @if(Session::has('success'))
        <center> <div class="alert alert-success" id="sessionErr" style="text-align:center;width:auto;height:50px ; margin-top:20px ;margin-left:-400px;  " role="alert">{{Session::get('success')}}</div>  </center>
        @endif   
     </div>
    

        <div class="right">
            <!--  القائمة-->
            <div class="container">
                <a href="#" class="bar" style="color: white;margin-left:-50px "><i class="fa fa-light fa-bars"></i></a>
                <div class="dropdown" style="margin-left:-100px ">
                    <a href="{{route('home.page')}}">الصفحة الرئيسية</a>
                    {{-- <a href="#">بحث</a> --}}
                    <a href="#">من نحن</a>
                    <a href="#">تواصل معنا</a>
                    <a href="#">دليل المستخدم</a>
                    <a href="#">تعليمات المزاد الالكترونى</a>
                    <a href="#">الشروط والاحكام</a>
                    <a href="{{route('view.login.user')}}">تسجيل الدخول</a>
                    <a href="#">تسجيل الخروج</a>
                </div>
            </div>
        </div><!-- right -->
    </div><!-- icons -->

    


    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->

        <!-- ======= Gallery Section ======= -->
        <section style="background-color:#000;margin-top:-250px ;">
            <div class="container py-5">
                <div class="row justify-content-center" >
                    @foreach ($products as $product)

                    <div class="col-md-8 col-lg-6 col-xl-4 " style="border: solid 1px white;" >
                        <div class="card text-white bg-black ">
                            <a href="{{url('product/'.$product-> id)}}" class="imglink" style="" ><img src="{{url('/images/products/'.$product -> photo_product)}}" style="height:300px;width:100% ;margin: auto;background-color: white !important;" /></a>
                            {{-- <img src="{{url('/images/products/'.$product -> photo_product)}}" style="height:300px;" /> --}}
                            </a>
                            <div class="btns">
                                <button class="btn" style="font-size:30px ; color: white;"><i onclick=" if(style.color=='red'){
                                    style.color='white'
                                }
                                else{
                                    style.color='red'
                                }" id="btnh1" class="fas fa-heart"></i></button>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="{{route('category.page',$product-> category_id)}}">
                                    <h5 class="card-title" style="text-decoration: none;background-color:gray; padding:2px 20px;font-size:25px ;border-radius:30px ;color: white;text-align: center;width:120px;margin: auto;">{{$product -> category_product}}</h5></a>
                                    {{-- <p class="text-muted mb-4">({{$product -> description}})</p> --}}

                                    {{-- <p class="text-muted mb-4">({{$product -> description}})<span
                                            id="dots">...</span><span id="more"></span></p>
                                    <button onclick="myFunction()" class="myBtn">Read more</button> --}}
                                    <div class="post">
                                        <p class="content">({{$product -> description}})</p>
                                        <button onclick="readMore(this)">اقرأ المزيد</button>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between" style="margin-top:20px ">
                                        <span style="text-decoration: none;background-color:gray; padding:2px 20px;font-size:20px ;border-radius:30px ;color: white;text-align: center;width:auto;">ج.م{{$product -> start_price}}</span> <span>يبدأ من</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2" style="align-items: center">
                                        <span>
                                            <div class="course-countdown" style="margin-left:-14px;">
                                                <ul data-countdown="{{$product-> expiry_date}}" style="margin-bottom:-50px;  ">
                                                    <li data-seconds="00">00</li>
                                                    <li data-minuts="00" style="margin-left:4px ;">00</li>
                                                    <li data-hours="00">00</li>
                                                    <li data-days="00">00</li>
                                                </ul>
                                                <br>
                                                <ul class="lis2" style="display:flex;">
                                                    <li>ثانية</li>
                                                    <li>دقيقة</li>
                                                    <li>ساعة</li>
                                                    <li>يوم</li>
                                                </ul>
                                            </div>
                                           
                                            
                                        </span> <span style="margin-top:-10px ; margin-left:50px ;">متبقى على انتهاء المزاد</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center total font-weight-bold mt-4 border-1 ">
                                    <a href="{{url('product/'.$product-> id)}}"
                                        style="text-decoration: none;background-color: #373565; padding:2px 38px;font-size:25px ;border-radius:30px ;color: white;text-align: center;">مزايدة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MaZad Team</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader">
        <div class="line"></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{url('css/copypage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('css/copypage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('css/copypage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('css/copypage/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('css/copypage/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('css/copypage/assets/js/main.js')}}"></script>
    <script src="{{url('js/homepage/jquery.js')}}"></script>
    <script>
      
	
		
		$('[data-countdown]').each(function(){
			var $deadline = new Date($(this).data('countdown')).getTime();

			var $dataDays = $(this).children('[data-days]');
			var $dataHours = $(this).children('[data-hours]');
			var $dataMinuts = $(this).children('[data-minuts]');
			var $dataSeconds = $(this).children('[data-seconds]');

			var x = setInterval(function(){

				var now = new Date().getTime();
				var t = $deadline - now;

				var days = Math.floor(t/(1000*60*60*24));
				var hours = Math.floor(t%(1000*60*60*24) / (1000*60*60));
				var minuts = Math.floor(t%(1000*60*60) / (1000*60));
				var seconds = Math.floor(t%(1000*60) / (1000));

				if( days < 10 ){
					days = '0'+days;
				}

				if( hours < 10 ){
					hours = '0'+hours;
				}

				if( minuts < 10 ){
					minuts = '0'+minuts;
				}

				if( seconds < 10 ){
					seconds = '0'+seconds;
				}

				$dataDays.html(days);
				$dataHours.html(hours);
				$dataMinuts.html(minuts);
				$dataSeconds.html(seconds);


				if( t <= 0 ){
					clearInterval(x);

					$dataDays.html('00');
					$dataHours.html('00');
					$dataMinuts.html('00');
					$dataSeconds.html('00');

				}



			},1000);
		})

	 

        // timer();
      

        // var btnvar1 = document.getElementById('btnh');

        function Toggle() {
            if (btnvar1.style.color == "red") {
                btnvar1.style.color = "gray"
            } else {
                btnvar1.style.color = "red"
            }
        }

    </script>
 <script type="text/javascript">

    var msg = document.getElementById('sessionErr')
    setTimeout(() => {
        if(msg != null) {
            msg.classList.add('d-none');
        }
    }, 10000);

 </script>

    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementsByClassName("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

    </script>

    <script>
                    const bell = document.querySelector('.notification-bell');
            const list = document.querySelector('.notification-list');
            const count = document.querySelector('.notification-count');
            const closeNotificationButtons = document.querySelectorAll('.close-notification');

            // إظهار/إخفاء قائمة الإشعارات عند النقر على جرس الإشعارات
            bell.addEventListener('click', function () {
            list.style.display = list.style.display === 'block' ? 'none' : 'block';
            });

            // إغلاق الإشعار عند النقر على زر الإغلاق (X)
            closeNotificationButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.stopPropagation();
                const li = button.parentElement;
                li.parentElement.removeChild(li);
                updateNotificationCount();
            });
            });

            // تحديث عدد الإشعارات
            function updateNotificationCount() {
            const messages = document.querySelectorAll('.notification-list li');
            const num = messages.length;
            count.innerText = num;

            // عرض عدد الإشعارات على زر الجرس
            const bellCount = document.querySelector('.notification-bell .notification-count');
            bellCount.innerText = num;
            }

            // عرض عدد الإشعارات عند تحميل الصفحة
            updateNotificationCount();
    </script>
     <script>
        let noOfCharac = 100;
        let contents = document.querySelectorAll(".content");
        contents.forEach(content => {
            //If text length is less that noOfCharac... then hide the read more button
            if (content.textContent.length < noOfCharac) {
                content.nextElementSibling.style.display = "none";
            }
            else {
                let displayText = content.textContent.slice(0, noOfCharac);
                let moreText = content.textContent.slice(noOfCharac);
                content.innerHTML = `${displayText}<span class="dots">...</span><span class="hide more">${moreText}</span>`;
            }
        });

        function readMore(btn) {
            let post = btn.parentElement;
            post.querySelector(".dots").classList.toggle("hide");
            post.querySelector(".more").classList.toggle("hide");
            btn.textContent == "اقرأ المزيد" ? btn.textContent = "عرض أقل" : btn.textContent = "اقرأ المزيد";
        }
    </script>

    <script src="//code.tidio.co/3t0hlkaacnnkvyig8uehtbj7nme8kgkp.js" async></script>

</body>

</html>
