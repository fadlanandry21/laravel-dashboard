<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Gp Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('Gp')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('Gp')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Gp')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('Gp')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('Gp')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('Gp')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('Gp')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <style>
        /**
        * Template Name: Gp
        * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
        * Updated: Aug 15 2024 with Bootstrap v5.3.3
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        */

        /*--------------------------------------------------------------
        # Font & Color Variables
        # Help: https://bootstrapmade.com/color-system/
        --------------------------------------------------------------*/
        /* Fonts */
        :root {
          --default-font: "Roboto",  system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
          --heading-font: "Raleway",  sans-serif;
          --nav-font: "Poppins",  sans-serif;
        }

        /* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
        :root {
          --background-color: #ffffff; /* Background color for the entire website, including individual sections */
          --default-color: #444444; /* Default color used for the majority of the text content across the entire website */
          --heading-color: #151515; /* Color for headings, subheadings and title throughout the website */
          --accent-color: #ffc451; /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
          --surface-color: #ffffff; /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
          --contrast-color: #312f2f; /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
        }

        /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
        :root {
          --nav-color: rgba(255, 255, 255, 0.905);  /* The default color of the main navmenu links */
          --nav-hover-color: #ffc451; /* Applied to main navmenu links when they are hovered over or active */
          --nav-mobile-background-color: #ffffff; /* Used as the background color for mobile navigation menu */
          --nav-dropdown-background-color: #ffffff; /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
          --nav-dropdown-color: #212529; /* Used for navigation links of the dropdown items in the navigation menu. */
          --nav-dropdown-hover-color: #ffc451; /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
        }

        /* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

        .light-background {
          --background-color: #f9f9f9;
          --surface-color: #ffffff;
        }

        .dark-background {
          --background-color: #060606;
          --default-color: #ffffff;
          --heading-color: #ffffff;
          --surface-color: #252525;
          --contrast-color: #2a2727;
        }

        /* Smooth scroll */
        :root {
          scroll-behavior: smooth;
        }

        /*--------------------------------------------------------------
        # General Styling & Shared Classes
        --------------------------------------------------------------*/
        body {
          color: var(--default-color);
          background-color: var(--background-color);
          font-family: var(--default-font);
        }

        a {
          color: var(--accent-color);
          text-decoration: none;
          transition: 0.3s;
        }

        a:hover {
          color: color-mix(in srgb, var(--accent-color), transparent 25%);
          text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
          color: var(--heading-color);
          font-family: var(--heading-font);
        }

        /* PHP Email Form Messages
        ------------------------------*/
        .php-email-form .error-message {
          display: none;
          background: #df1529;
          color: #ffffff;
          text-align: left;
          padding: 15px;
          margin-bottom: 24px;
          font-weight: 600;
        }

        .php-email-form .sent-message {
          display: none;
          color: #ffffff;
          background: #059652;
          text-align: center;
          padding: 15px;
          margin-bottom: 24px;
          font-weight: 600;
        }

        .php-email-form .loading {
          display: none;
          background: var(--surface-color);
          text-align: center;
          padding: 15px;
          margin-bottom: 24px;
        }

        .php-email-form .loading:before {
          content: "";
          display: inline-block;
          border-radius: 50%;
          width: 24px;
          height: 24px;
          margin: 0 10px -6px 0;
          border: 3px solid var(--accent-color);
          border-top-color: var(--surface-color);
          animation: php-email-form-loading 1s linear infinite;
        }

        @keyframes php-email-form-loading {
          0% {
            transform: rotate(0deg);
          }

          100% {
            transform: rotate(360deg);
          }
        }

        /*--------------------------------------------------------------
        # Global Header
        --------------------------------------------------------------*/
        .header {
          --background-color: rgba(0, 0, 0, 0.8);
          --heading-color: #ffffff;
          --contrast-color: #ffffff;
          color: var(--default-color);
          background-color: var(--background-color);
          padding: 10px 0;
          transition: all 0.5s;
          z-index: 997;
        }

        .header .logo {
          line-height: 1;
        }

        .header .logo img {
          max-height: 36px;
          margin-right: 8px;
        }

        .header .logo h1 {
          font-size: 32px;
          margin: 0;
          font-weight: 700;
          color: var(--heading-color);
        }

        .header .logo span {
          color: var(--accent-color);
          font-size: 32px;
        }

        .header .btn-getstarted,
        .header .btn-getstarted:focus {
          color: var(--contrast-color);
          font-size: 14px;
          padding: 8px 30px;
          margin: 0 0 0 30px;
          border-radius: 4px;
          transition: 0.3s;
          border: 2px solid var(--accent-color);
        }

        .header .btn-getstarted:hover,
        .header .btn-getstarted:focus:hover {
          color: var(--default-color);
          background: var(--accent-color);
        }

        @media (max-width: 1200px) {
          .header .logo {
            order: 1;
          }

          .header .btn-getstarted {
            order: 2;
            margin: 0 15px 0 0;
            padding: 6px 15px;
          }

          .header .navmenu {
            order: 3;
          }
        }

        .scrolled .header {
          box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
        }

        /* Index Page Header
        ------------------------------*/
        .index-page .header {
          --background-color: rgba(0, 0, 0, 0);
        }

        /* Index Page Header on Scroll
        ------------------------------*/
        .index-page.scrolled .header {
          --background-color: rgba(0, 0, 0, 0.8);
        }

        /*--------------------------------------------------------------
        # Navigation Menu
        --------------------------------------------------------------*/
        /* Navmenu - Desktop */
        @media (min-width: 1200px) {
          .navmenu {
            padding: 0;
          }

          .navmenu ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
          }

          .navmenu li {
            position: relative;
          }

          .navmenu a,
          .navmenu a:focus {
            color: var(--nav-color);
            padding: 18px 15px;
            font-size: 16px;
            font-family: var(--nav-font);
            font-weight: 400;
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: nowrap;
            transition: 0.3s;
          }

          .navmenu a i,
          .navmenu a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
            transition: 0.3s;
          }

          .navmenu li:last-child a {
            padding-right: 0;
          }

          .navmenu li:hover>a,
          .navmenu .active,
          .navmenu .active:focus {
            color: var(--nav-hover-color);
          }

          .navmenu .dropdown ul {
            margin: 0;
            padding: 10px 0;
            background: var(--nav-dropdown-background-color);
            display: block;
            position: absolute;
            visibility: hidden;
            left: 14px;
            top: 130%;
            opacity: 0;
            transition: 0.3s;
            border-radius: 0;
            z-index: 99;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
          }

          .navmenu .dropdown ul li {
            min-width: 200px;
          }

          .navmenu .dropdown ul a {
            padding: 10px 20px;
            font-size: 15px;
            text-transform: none;
            color: var(--nav-dropdown-color);
          }

          .navmenu .dropdown ul a i {
            font-size: 12px;
          }

          .navmenu .dropdown ul a:hover,
          .navmenu .dropdown ul .active:hover,
          .navmenu .dropdown ul li:hover>a {
            background-color: var(--nav-dropdown-hover-color);
          }

          .navmenu .dropdown:hover>ul {
            opacity: 1;
            top: 100%;
            visibility: visible;
          }

          .navmenu .dropdown .dropdown ul {
            top: 0;
            left: -90%;
            visibility: hidden;
          }

          .navmenu .dropdown .dropdown:hover>ul {
            opacity: 1;
            top: 0;
            left: -100%;
            visibility: visible;
          }
        }

        /* Navmenu - Mobile */
        @media (max-width: 1199px) {
          .mobile-nav-toggle {
            color: var(--nav-color);
            font-size: 28px;
            line-height: 0;
            margin-right: 10px;
            cursor: pointer;
            transition: color 0.3s;
          }

          .navmenu {
            padding: 0;
            z-index: 9997;
          }

          .navmenu ul {
            display: none;
            list-style: none;
            position: absolute;
            inset: 60px 20px 20px 20px;
            padding: 10px 0;
            margin: 0;
            border-radius: 6px;
            background-color: var(--nav-mobile-background-color);
            overflow-y: auto;
            transition: 0.3s;
            z-index: 9998;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
          }

          .navmenu a,
          .navmenu a:focus {
            color: var(--nav-dropdown-color);
            padding: 10px 20px;
            font-family: var(--nav-font);
            font-size: 17px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: nowrap;
            transition: 0.3s;
          }

          .navmenu a i,
          .navmenu a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: 0.3s;
            background-color: color-mix(in srgb, var(--accent-color), white 90%);
          }

          .navmenu a i:hover,
          .navmenu a:focus i:hover {
            background-color: color-mix(in srgb, var(--accent-color), white 90%);
          }

          .navmenu a:hover,
          .navmenu .active,
          .navmenu .active:focus {
            background-color: var(--nav-dropdown-hover-color);
          }

          .navmenu .active i,
          .navmenu .active:focus i {
            transform: rotate(180deg);
          }

          .navmenu .dropdown ul {
            position: static;
            display: none;
            z-index: 99;
            padding: 10px 0;
            margin: 10px 20px;
            background-color: var(--nav-dropdown-background-color);
            border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
            box-shadow: none;
            transition: all 0.5s ease-in-out;
          }

          .navmenu .dropdown ul ul {
            background-color: rgba(33, 37, 41, 0.1);
          }

          .navmenu .dropdown>.dropdown-active {
            display: block;
            background-color: rgba(33, 37, 41, 0.03);
          }

          .mobile-nav-active {
            overflow: hidden;
          }

          .mobile-nav-active .mobile-nav-toggle {
            color: #fff;
            position: absolute;
            font-size: 32px;
            top: 15px;
            right: 15px;
            margin-right: 0;
            z-index: 9999;
          }

          .mobile-nav-active .navmenu {
            position: fixed;
            overflow: hidden;
            inset: 0;
            background: rgba(33, 37, 41, 0.8);
            transition: 0.3s;
          }

          .mobile-nav-active .navmenu>ul {
            display: block;
          }
        }

        /*--------------------------------------------------------------
        # Global Footer
        --------------------------------------------------------------*/
        .footer {
          color: var(--default-color);
          background-color: var(--background-color);
          font-size: 14px;
          position: relative;
        }

        .footer .footer-top {
          padding: 50px 0;
          background-color: color-mix(in srgb, var(--footer-background-color) 90%, white 10%);
        }

        .footer .footer-about .logo {
          line-height: 1;
          margin-bottom: 10px;
        }

        .footer .footer-about .logo img {
          max-height: 40px;
          margin-right: 6px;
        }

        .footer .footer-about .logo span {
          font-size: 26px;
          font-weight: 700;
          letter-spacing: 1px;
          font-family: var(--heading-font);
          color: var(--heading-color);
        }

        .footer .footer-about p {
          font-size: 14px;
          font-family: var(--heading-font);
        }

        .footer .social-links a {
          color: color-mix(in srgb, var(--default-color), transparent 30%);
          background-color: color-mix(in srgb, var(--default-color) 5%, white 10%);
          display: flex;
          align-items: center;
          justify-content: center;
          width: 40px;
          height: 40px;
          border-radius: 4px;
          font-size: 16px;
          margin-right: 10px;
          transition: 0.3s;
        }

        .footer .social-links a:hover {
          color: var(--contrast-color);
          background-color: var(--accent-color);
        }

        .footer h4 {
          font-size: 16px;
          font-weight: bold;
          position: relative;
          padding-bottom: 12px;
        }

        .footer .footer-links {
          margin-bottom: 30px;
        }

        .footer .footer-links ul {
          list-style: none;
          padding: 0;
          margin: 0;
        }

        .footer .footer-links ul i {
          margin-right: 4px;
          font-size: 12px;
          line-height: 0;
          color: var(--accent-color);
        }

        .footer .footer-links ul li {
          padding: 10px 0;
          display: flex;
          align-items: center;
        }

        .footer .footer-links ul li:first-child {
          padding-top: 0;
        }

        .footer .footer-links ul a {
          color: color-mix(in srgb, var(--default-color), transparent 30%);
          display: inline-block;
          line-height: 1;
        }

        .footer .footer-links ul a:hover {
          color: var(--accent-color);
        }

        .footer .footer-contact p {
          margin-bottom: 5px;
        }

        .footer .footer-newsletter .newsletter-form {
          margin-top: 30px;
          margin-bottom: 15px;
          padding: 6px 8px;
          position: relative;
          border-radius: 4px;
          border: 1px solid color-mix(in srgb, var(--default-color), transparent 80%);
          display: flex;
          background-color: color-mix(in srgb, var(--footer-background-color) 90%, white 15%);
          transition: 0.3s;
        }

        .footer .footer-newsletter .newsletter-form:focus-within {
          border-color: var(--accent-color);
        }

        .footer .footer-newsletter .newsletter-form input[type=email] {
          border: 0;
          padding: 4px;
          width: 100%;
          background-color: color-mix(in srgb, var(--footer-background-color) 90%, white 15%);
          color: var(--default-color);
        }

        .footer .footer-newsletter .newsletter-form input[type=email]:focus-visible {
          outline: none;
        }

        .footer .footer-newsletter .newsletter-form input[type=submit] {
          border: 0;
          font-size: 16px;
          padding: 0 20px;
          margin: -7px -8px -7px 0;
          background: var(--accent-color);
          color: var(--contrast-color);
          transition: 0.3s;
          border-radius: 0 4px 4px 0;
        }

        .footer .footer-newsletter .newsletter-form input[type=submit]:hover {
          background: color-mix(in srgb, var(--accent-color), transparent 20%);
        }

        .footer .copyright {
          padding: 30px 0;
        }

        .footer .copyright p {
          margin-bottom: 0;
        }

        .footer .credits {
          margin-top: 5px;
          font-size: 13px;
        }

        /*--------------------------------------------------------------
        # Preloader
        --------------------------------------------------------------*/
        #preloader {
          position: fixed;
          inset: 0;
          z-index: 999999;
          overflow: hidden;
          background: #000;
          transition: all 0.6s ease-out;
        }

        #preloader:before {
          content: "";
          position: fixed;
          top: calc(50% - 30px);
          left: calc(50% - 30px);
          border: 6px solid #ffffff;
          border-color: var(--accent-color) transparent var(--accent-color) transparent;
          border-radius: 50%;
          width: 60px;
          height: 60px;
          animation: animate-preloader 1.5s linear infinite;
        }

        @keyframes animate-preloader {
          0% {
            transform: rotate(0deg);
          }

          100% {
            transform: rotate(360deg);
          }
        }

        /*--------------------------------------------------------------
        # Scroll Top Button
        --------------------------------------------------------------*/
        .scroll-top {
          position: fixed;
          visibility: hidden;
          opacity: 0;
          right: 15px;
          bottom: 15px;
          z-index: 99999;
          background-color: var(--accent-color);
          width: 40px;
          height: 40px;
          border-radius: 4px;
          transition: all 0.4s;
        }

        .scroll-top i {
          font-size: 24px;
          color: var(--contrast-color);
          line-height: 0;
        }

        .scroll-top:hover {
          background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
          color: var(--contrast-color);
        }

        .scroll-top.active {
          visibility: visible;
          opacity: 1;
        }

        /*--------------------------------------------------------------
        # Disable aos animation delay on mobile devices
        --------------------------------------------------------------*/
        @media screen and (max-width: 768px) {
          [data-aos-delay] {
            transition-delay: 0 !important;
          }
        }

        /*--------------------------------------------------------------
        # Global Page Titles & Breadcrumbs
        --------------------------------------------------------------*/
        .page-title {
          color: var(--default-color);
          background-color: var(--background-color);
          position: relative;
        }

        .page-title .heading {
          padding: 80px 0;
          border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        }

        .page-title .heading h1 {
          font-size: 38px;
          font-weight: 700;
        }

        .page-title nav {
          background-color: color-mix(in srgb, var(--default-color), transparent 95%);
          padding: 20px 0;
        }

        .page-title nav ol {
          display: flex;
          flex-wrap: wrap;
          list-style: none;
          margin: 0;
          padding: 0;
          font-size: 16px;
          font-weight: 400;
        }

        .page-title nav ol li+li {
          padding-left: 10px;
        }

        .page-title nav ol li+li::before {
          content: "/";
          display: inline-block;
          padding-right: 10px;
          color: color-mix(in srgb, var(--default-color), transparent 70%);
        }

        /*--------------------------------------------------------------
        # Global Sections
        --------------------------------------------------------------*/
        section,
        .section {
          color: var(--default-color);
          background-color: var(--background-color);
          padding: 60px 0;
          scroll-margin-top: 80px;
          overflow: clip;
        }

        @media (max-width: 1199px) {

          section,
          .section {
            scroll-margin-top: 58px;
          }
        }

        /*--------------------------------------------------------------
        # Global Section Titles
        --------------------------------------------------------------*/
        .section-title {
          padding-bottom: 60px;
          position: relative;
        }

        .section-title h2 {
          font-size: 14px;
          font-weight: 500;
          padding: 0;
          line-height: 1px;
          margin: 0;
          letter-spacing: 1.5px;
          text-transform: uppercase;
          color: color-mix(in srgb, var(--default-color), transparent 50%);
          position: relative;
        }

        .section-title h2::after {
          content: "";
          width: 120px;
          height: 1px;
          display: inline-block;
          background: var(--accent-color);
          margin: 4px 10px;
        }

        .section-title p {
          color: var(--heading-color);
          margin: 0;
          font-size: 36px;
          font-weight: 700;
          text-transform: uppercase;
        }

        /*--------------------------------------------------------------
        # Hero Section
        --------------------------------------------------------------*/
        .hero {
          width: 100%;
          min-height: 100vh;
          position: relative;
          padding: 120px 0 80px 0;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .hero img {
          position: absolute;
          inset: 0;
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
          z-index: 1;
        }

        .hero:before {
          content: "";
          background: color-mix(in srgb, var(--background-color), transparent 30%);
          position: absolute;
          inset: 0;
          z-index: 2;
        }

        .hero .container {
          position: relative;
          z-index: 3;
        }

        .hero h2 {
          margin: 0;
          font-size: 56px;
          font-weight: 700;
          font-family: var(--nav-font);
        }

        .hero h2 span {
          color: var(--accent-color);
        }

        .hero p {
          margin: 10px 0 0 0;
          font-size: 24px;
          color: color-mix(in srgb, var(--default-color), transparent 30%);
        }

        .hero .icon-box {
          padding: 30px 20px;
          transition: ease-in-out 0.3s;
          border: 1px solid color-mix(in srgb, var(--default-color), transparent 70%);
          height: 100%;
          text-align: center;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        }

        .hero .icon-box i {
          font-size: 32px;
          line-height: 1;
          color: var(--accent-color);
        }

        .hero .icon-box h3 {
          font-weight: 700;
          margin: 10px 0 0 0;
          padding: 0;
          line-height: 1;
          font-size: 20px;
          line-height: 26px;
        }

        .hero .icon-box h3 a {
          color: color-mix(in srgb, var(--default-color), transparent 20%);
          transition: ease-in-out 0.3s;
        }

        .hero .icon-box:hover {
          border-color: var(--accent-color);
        }

        .hero .icon-box:hover h3 a {
          color: var(--accent-color);
        }

        @media (max-width: 768px) {
          .hero h2 {
            font-size: 32px;
          }

          .hero p {
            font-size: 18px;
          }
        }

        /*--------------------------------------------------------------
        # About Section
        --------------------------------------------------------------*/
        .about .content h3 {
          font-size: 1.75rem;
          font-weight: 700;
        }

        .about .content .fst-italic {
          color: color-mix(in srgb, var(--default-color), var(--contrast-color) 50%);
        }

        .about .content ul {
          list-style: none;
          padding: 0;
        }

        .about .content ul li {
          padding: 10px 0 0 0;
          display: flex;
        }

        .about .content ul i {
          color: var(--accent-color);
          margin-right: 0.5rem;
          line-height: 1.2;
          font-size: 1.25rem;
        }

        .about .content p:last-child {
          margin-bottom: 0;
        }

        /*--------------------------------------------------------------
        # Clients Section
        --------------------------------------------------------------*/
        .clients .swiper-slide img {
          opacity: 0.5;
          transition: 0.3s;
          filter: grayscale(100);
        }

        .clients .swiper-slide img:hover {
          filter: none;
          opacity: 1;
        }

        .clients .swiper-wrapper {
          height: auto;
        }

        .clients .swiper-pagination {
          margin-top: 20px;
          position: relative;
        }

        .clients .swiper-pagination .swiper-pagination-bullet {
          width: 12px;
          height: 12px;
          opacity: 1;
          background-color: color-mix(in srgb, var(--default-color), transparent 80%);
        }

        .clients .swiper-pagination .swiper-pagination-bullet-active {
          background-color: var(--accent-color);
        }

        /*--------------------------------------------------------------
        # Features Section
        --------------------------------------------------------------*/
        .features .features-image {
          position: relative;
          min-height: 400px;
        }

        .features .features-image img {
          position: absolute;
          inset: 0;
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
          z-index: 1;
        }

        .features .features-item h4 {
          font-size: 20px;
          font-weight: 700;
          margin: 0 0 5px 0;
        }

        .features .features-item i {
          font-size: 48px;
          color: var(--accent-color);
          margin-right: 20px;
          line-height: 0;
        }

        .features .features-item p {
          font-size: 15px;
          color: color-mix(in srgb, var(--default-color), transparent 20%);
          margin: 0;
        }

        /*--------------------------------------------------------------
        # Services Section
        --------------------------------------------------------------*/
        .services .service-item {
          background-color: var(--surface-color);
          text-align: center;
          border: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
          padding: 80px 20px;
          height: 100%;
          transition: all ease-in-out 0.3s;
        }

        .services .service-item .icon {
          background: var(--accent-color);
          color: var(--contrast-color);
          margin: 0 auto;
          width: 64px;
          height: 64px;
          border-radius: 4px;
          display: flex;
          align-items: center;
          justify-content: center;
          margin-bottom: 20px;
          transition: 0.3s;
        }

        .services .service-item .icon i {
          font-size: 28px;
          transition: ease-in-out 0.3s;
        }

        .services .service-item h3 {
          font-weight: 700;
          margin: 10px 0 15px 0;
          font-size: 22px;
          transition: 0.3s;
        }

        .services .service-item p {
          line-height: 24px;
          font-size: 14px;
          margin-bottom: 0;
        }

        .services .service-item:hover {
          box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
          transform: translateY(-10px);
        }

        /*--------------------------------------------------------------
        # Call To Action Section
        --------------------------------------------------------------*/
        .call-to-action {
          padding: 80px 0;
          position: relative;
          clip-path: inset(0);
        }

        .call-to-action img {
          position: fixed;
          top: 0;
          left: 0;
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
          z-index: 1;
        }

        .call-to-action:before {
          content: "";
          background: color-mix(in srgb, var(--background-color), transparent 50%);
          position: absolute;
          inset: 0;
          z-index: 2;
        }

        .call-to-action .container {
          position: relative;
          z-index: 3;
        }

        .call-to-action h3 {
          font-size: 28px;
          font-weight: 700;
          color: var(--default-color);
        }

        .call-to-action p {
          color: var(--default-color);
        }

        .call-to-action .cta-btn {
          font-family: var(--heading-font);
          font-weight: 500;
          font-size: 16px;
          letter-spacing: 1px;
          display: inline-block;
          padding: 12px 40px;
          border-radius: 5px;
          transition: 0.5s;
          margin: 10px;
          border: 2px solid var(--default-color);
          color: var(--default-color);
        }

        .call-to-action .cta-btn:hover {
          background: var(--accent-color);
          color: var(--background-color);
          border: 2px solid var(--accent-color);
        }

        /*--------------------------------------------------------------
        # Portfolio Section
        --------------------------------------------------------------*/
        .portfolio .portfolio-filters {
          padding: 0;
          margin: 0 auto 20px auto;
          list-style: none;
          text-align: center;
        }

        .portfolio .portfolio-filters li {
          cursor: pointer;
          display: inline-block;
          padding: 8px 20px 10px 20px;
          margin: 0;
          font-size: 15px;
          font-weight: 500;
          line-height: 1;
          margin-bottom: 5px;
          border-radius: 4px;
          transition: all 0.3s ease-in-out;
          font-family: var(--heading-font);
        }

        .portfolio .portfolio-filters li:hover,
        .portfolio .portfolio-filters li.filter-active {
          color: var(--contrast-color);
          background-color: var(--accent-color);
        }

        .portfolio .portfolio-filters li:first-child {
          margin-left: 0;
        }

        .portfolio .portfolio-filters li:last-child {
          margin-right: 0;
        }

        @media (max-width: 575px) {
          .portfolio .portfolio-filters li {
            font-size: 14px;
            margin: 0 0 10px 0;
          }
        }

        .portfolio .portfolio-item {
          position: relative;
          overflow: hidden;
        }

        .portfolio .portfolio-item .portfolio-info {
          opacity: 0;
          position: absolute;
          left: 12px;
          right: 12px;
          bottom: -100%;
          z-index: 3;
          transition: all ease-in-out 0.5s;
          background: color-mix(in srgb, var(--background-color), transparent 10%);
          padding: 15px;
        }

        .portfolio .portfolio-item .portfolio-info h4 {
          font-size: 18px;
          font-weight: 600;
          padding-right: 50px;
        }

        .portfolio .portfolio-item .portfolio-info p {
          color: color-mix(in srgb, var(--default-color), transparent 30%);
          font-size: 14px;
          margin-bottom: 0;
          padding-right: 50px;
        }

        .portfolio .portfolio-item .portfolio-info .preview-link,
        .portfolio .portfolio-item .portfolio-info .details-link {
          position: absolute;
          right: 50px;
          font-size: 24px;
          top: calc(50% - 14px);
          color: color-mix(in srgb, var(--default-color), transparent 30%);
          transition: 0.3s;
          line-height: 0;
        }

        .portfolio .portfolio-item .portfolio-info .preview-link:hover,
        .portfolio .portfolio-item .portfolio-info .details-link:hover {
          color: var(--accent-color);
        }

        .portfolio .portfolio-item .portfolio-info .details-link {
          right: 14px;
          font-size: 28px;
        }

        .portfolio .portfolio-item:hover .portfolio-info {
          opacity: 1;
          bottom: 0;
        }

        /*--------------------------------------------------------------
        # Stats Section
        --------------------------------------------------------------*/
        .stats .stats-item {
          padding: 10px;
        }

        .stats .stats-item i {
          font-size: 44px;
          color: var(--accent-color);
          line-height: 0;
          margin-right: 15px;
        }

        .stats .stats-item .purecounter {
          color: var(--heading-color);
          font-size: 40px;
          display: block;
          font-weight: 700;
          line-height: 40px;
        }

        .stats .stats-item p {
          color: color-mix(in srgb, var(--default-color), transparent 40%);
          padding: 15px 0 0 0;
          margin: 0;
          font-family: var(--heading-font);
          font-size: 14px;
        }

        /*--------------------------------------------------------------
        # Testimonials Section
        --------------------------------------------------------------*/
        .testimonials {
          padding: 80px 0;
          position: relative;
        }

        .testimonials:before {
          content: "";
          background: color-mix(in srgb, var(--background-color), transparent 30%);
          position: absolute;
          inset: 0;
          z-index: 2;
        }

        .testimonials .testimonials-bg {
          position: absolute;
          inset: 0;
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
          z-index: 1;
        }

        .testimonials .container {
          position: relative;
          z-index: 3;
        }

        .testimonials .testimonials-carousel,
        .testimonials .testimonials-slider {
          overflow: hidden;
        }

        .testimonials .testimonial-item {
          text-align: center;
        }

        .testimonials .testimonial-item .testimonial-img {
          width: 100px;
          border-radius: 50%;
          border: 6px solid color-mix(in srgb, var(--default-color), transparent 85%);
          margin: 0 auto;
        }

        .testimonials .testimonial-item h3 {
          font-size: 20px;
          font-weight: bold;
          margin: 10px 0 5px 0;
        }

        .testimonials .testimonial-item h4 {
          font-size: 14px;
          margin: 0 0 15px 0;
          color: color-mix(in srgb, var(--default-color), transparent 40%);
        }

        .testimonials .testimonial-item .stars {
          margin-bottom: 15px;
        }

        .testimonials .testimonial-item .stars i {
          color: #ffc107;
          margin: 0 1px;
        }

        .testimonials .testimonial-item .quote-icon-left,
        .testimonials .testimonial-item .quote-icon-right {
          color: color-mix(in srgb, var(--default-color), transparent 40%);
          font-size: 26px;
          line-height: 0;
        }

        .testimonials .testimonial-item .quote-icon-left {
          display: inline-block;
          left: -5px;
          position: relative;
        }

        .testimonials .testimonial-item .quote-icon-right {
          display: inline-block;
          right: -5px;
          position: relative;
          top: 10px;
          transform: scale(-1, -1);
        }

        .testimonials .testimonial-item p {
          font-style: italic;
          margin: 0 auto 15px auto;
        }

        .testimonials .swiper-wrapper {
          height: auto;
        }

        .testimonials .swiper-pagination {
          margin-top: 20px;
          position: relative;
        }

        .testimonials .swiper-pagination .swiper-pagination-bullet {
          width: 12px;
          height: 12px;
          background-color: color-mix(in srgb, var(--default-color), transparent 50%);
          opacity: 0.5;
        }

        .testimonials .swiper-pagination .swiper-pagination-bullet-active {
          background-color: var(--default-color);
          opacity: 1;
        }

        @media (min-width: 992px) {
          .testimonials .testimonial-item p {
            width: 80%;
          }
        }

        /*--------------------------------------------------------------
        # Team Section
        --------------------------------------------------------------*/
        .team .team-member {
          background-color: var(--surface-color);
          overflow: hidden;
          border-radius: 5px;
          box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
          height: 100%;
        }

        .team .team-member .member-img {
          position: relative;
          overflow: hidden;
        }

        .team .team-member .social {
          position: absolute;
          left: 0;
          bottom: 30px;
          right: 0;
          opacity: 0;
          transition: ease-in-out 0.3s;
          text-align: center;
        }

        .team .team-member .social a {
          background: color-mix(in srgb, var(--contrast-color), transparent 25%);
          color: color-mix(in srgb, var(--default-color), transparent 20%);
          margin: 0 3px;
          border-radius: 4px;
          width: 36px;
          height: 36px;
          transition: ease-in-out 0.3s;
          display: inline-flex;
          justify-content: center;
          align-items: center;
        }

        .team .team-member .social a:hover {
          color: var(--contrast-color);
          background: var(--accent-color);
        }

        .team .team-member .social i {
          font-size: 18px;
          line-height: 0;
        }

        .team .team-member .member-info {
          padding: 25px 15px;
        }

        .team .team-member .member-info h4 {
          font-weight: 700;
          margin-bottom: 5px;
          font-size: 18px;
        }

        .team .team-member .member-info span {
          display: block;
          font-size: 13px;
          font-weight: 400;
          color: color-mix(in srgb, var(--default-color), transparent 40%);
        }

        .team .team-member:hover .social {
          opacity: 1;
          bottom: 15px;
        }

        /*--------------------------------------------------------------
        # Contact Section
        --------------------------------------------------------------*/
        .contact .info-item+.info-item {
          margin-top: 40px;
        }

        .contact .info-item i {
          color: var(--contrast-color);
          background: var(--accent-color);
          font-size: 20px;
          width: 44px;
          height: 44px;
          display: flex;
          justify-content: center;
          align-items: center;
          border-radius: 4px;
          transition: all 0.3s ease-in-out;
          margin-right: 15px;
        }

        .contact .info-item h3 {
          padding: 0;
          font-size: 18px;
          font-weight: 700;
          margin-bottom: 5px;
        }

        .contact .info-item p {
          padding: 0;
          margin-bottom: 0;
          font-size: 14px;
        }

        .contact .php-email-form {
          height: 100%;
        }

        .contact .php-email-form input[type=text],
        .contact .php-email-form input[type=email],
        .contact .php-email-form textarea {
          font-size: 14px;
          padding: 10px 15px;
          box-shadow: none;
          border-radius: 0;
          color: var(--default-color);
          background-color: color-mix(in srgb, var(--background-color), transparent 50%);
          border-color: color-mix(in srgb, var(--default-color), transparent 80%);
        }

        .contact .php-email-form input[type=text]:focus,
        .contact .php-email-form input[type=email]:focus,
        .contact .php-email-form textarea:focus {
          border-color: var(--accent-color);
        }

        .contact .php-email-form input[type=text]::placeholder,
        .contact .php-email-form input[type=email]::placeholder,
        .contact .php-email-form textarea::placeholder {
          color: color-mix(in srgb, var(--default-color), transparent 70%);
        }

        .contact .php-email-form button[type=submit] {
          color: var(--contrast-color);
          background: var(--accent-color);
          border: 0;
          padding: 10px 30px;
          transition: 0.4s;
          border-radius: 4px;
        }

        .contact .php-email-form button[type=submit]:hover {
          background: color-mix(in srgb, var(--accent-color), transparent 20%);
        }

        /*--------------------------------------------------------------
        # Portfolio Details Section
        --------------------------------------------------------------*/
        .portfolio-details .portfolio-details-slider img {
          width: 100%;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination {
          margin-top: 20px;
          position: relative;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
          width: 12px;
          height: 12px;
          background-color: color-mix(in srgb, var(--default-color), transparent 85%);
          opacity: 1;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
          background-color: var(--accent-color);
        }

        .portfolio-details .portfolio-info {
          background-color: var(--surface-color);
          padding: 30px;
          box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
        }

        .portfolio-details .portfolio-info h3 {
          font-size: 22px;
          font-weight: 700;
          margin-bottom: 20px;
          padding-bottom: 20px;
          border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
        }

        .portfolio-details .portfolio-info ul {
          list-style: none;
          padding: 0;
          font-size: 15px;
        }

        .portfolio-details .portfolio-info ul li+li {
          margin-top: 10px;
        }

        .portfolio-details .portfolio-description {
          padding-top: 30px;
        }

        .portfolio-details .portfolio-description h2 {
          font-size: 26px;
          font-weight: 700;
          margin-bottom: 20px;
        }

        .portfolio-details .portfolio-description p {
          padding: 0;
          color: color-mix(in srgb, var(--default-color), transparent 30%);
        }

        /*--------------------------------------------------------------
        # Service Details Section
        --------------------------------------------------------------*/
        .service-details .service-box {
          background-color: var(--surface-color);
          padding: 20px;
          box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.1);
        }

        .service-details .service-box+.service-box {
          margin-top: 30px;
        }

        .service-details .service-box h4 {
          font-size: 20px;
          font-weight: 700;
          border-bottom: 2px solid color-mix(in srgb, var(--default-color), transparent 92%);
          padding-bottom: 15px;
          margin-bottom: 15px;
        }

        .service-details .services-list {
          background-color: var(--surface-color);
        }

        .service-details .services-list a {
          color: color-mix(in srgb, var(--default-color), transparent 20%);
          background-color: color-mix(in srgb, var(--default-color), transparent 96%);
          display: flex;
          align-items: center;
          padding: 12px 15px;
          margin-top: 15px;
          transition: 0.3s;
        }

        .service-details .services-list a:first-child {
          margin-top: 0;
        }

        .service-details .services-list a i {
          font-size: 16px;
          margin-right: 8px;
          color: var(--accent-color);
        }

        .service-details .services-list a.active {
          color: var(--contrast-color);
          background-color: var(--accent-color);
        }

        .service-details .services-list a.active i {
          color: var(--contrast-color);
        }

        .service-details .services-list a:hover {
          background-color: color-mix(in srgb, var(--accent-color), transparent 95%);
          color: var(--accent-color);
        }

        .service-details .download-catalog a {
          color: var(--default-color);
          display: flex;
          align-items: center;
          padding: 10px 0;
          transition: 0.3s;
          border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        }

        .service-details .download-catalog a:first-child {
          border-top: 0;
          padding-top: 0;
        }

        .service-details .download-catalog a:last-child {
          padding-bottom: 0;
        }

        .service-details .download-catalog a i {
          font-size: 24px;
          margin-right: 8px;
          color: var(--accent-color);
        }

        .service-details .download-catalog a:hover {
          color: var(--accent-color);
        }

        .service-details .help-box {
          background-color: var(--accent-color);
          color: var(--contrast-color);
          margin-top: 30px;
          padding: 30px 15px;
        }

        .service-details .help-box .help-icon {
          font-size: 48px;
        }

        .service-details .help-box h4,
        .service-details .help-box a {
          color: var(--contrast-color);
        }

        .service-details .services-img {
          margin-bottom: 20px;
        }

        .service-details h3 {
          font-size: 26px;
          font-weight: 700;
        }

        .service-details p {
          font-size: 15px;
        }

        .service-details ul {
          list-style: none;
          padding: 0;
          font-size: 15px;
        }

        .service-details ul li {
          padding: 5px 0;
          display: flex;
          align-items: center;
        }

        .service-details ul i {
          font-size: 20px;
          margin-right: 8px;
          color: var(--accent-color);
        }

        /*--------------------------------------------------------------
        # Starter Section Section
        --------------------------------------------------------------*/
        .starter-section {
          /* Add your styles here */
        }
        </style>


  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">GP</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">

        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>Powerful Digital Solutions With GP<span>.</span></h2>
            <p>We are team of talented digital marketers</p>
          </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-bullseye"></i>
              <h3><a href="">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-fullscreen-exit"></i>
              <h3><a href="">Sedare Perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-card-list"></i>
              <h3><a href="">Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="icon-box">
              <i class="bi bi-gem"></i>
              <h3><a href="">Nemos Enimade</a></h3>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

   

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">GP</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('Gp')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('Gp')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('Gp')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('Gp')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('Gp')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('Gp')}}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{asset('Gp')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('Gp')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="{{asset('Gp')}}/assets/js/main.js"></script>

</body>

</html>{{}}



{{--



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thris.co</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
