<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Milk Tea Shop">
    <meta name="keywords" content = "Bubble Tea, Milk Tea, Meals, franchising">
    <meta name="author" content="JuneRhomel">

    <!-- title -->
    <title>Puff Tea</title>
    <link rel="icon" type="image/x-icon" href="/assets/logo.png">
    <!-- style -->
    <link rel="stylesheet" href="/style/style.css">
    <!-- insaniburger -->
    <link href="http://fonts.cdnfonts.com/css/insaniburger" rel="stylesheet">
    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- fontawesom -->
    <script src="https://kit.fontawesome.com/21f9873db8.js" crossorigin="anonymous"></script>
</head>


<body class="bg-color">

<header class=" position-sticky top-0 ">
        <div class="container-fluid 
        rounded-lg-pill 
        navigation  
        pb-0 
        pt-0 ">
            <nav class="navbar 
            container-fluid 
            container-xxl  
            navbar-expand-lg 
            p-1  
            gap-1">
                <a href="/index.html" class="navbar-brand 
                logo 
                m-0 
                0 fs-5 
                fw-bold 
                me-5 ">
                    <img width="63px" height="74px" class="d-inline-block align-center" src="/assets/logo.png" alt="">
                    Puff Tea
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_144_40)">
                            <path
                                d="M10.5 21H24.5V18.6667H10.5V21ZM3.5 7V9.33333H24.5V7H3.5ZM10.5 15.1667H24.5V12.8333H10.5V15.1667Z"
                                fill="#EDE9D0" />
                        </g>
                        <defs>
                            <clipPath id="clip0_144_40">
                                <rect width="28" height="28" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </button>

                <div class="collapse 
                    navbar-collapse  
                    m-0 " id="navbarNav">
                    <ul class="navbar-nav menu-nav 
                        me-auto 
                        mb-2
                        gap-4 
                        mb-lg-0
                        text-center">
                        <li class="nav-item">
                            <a class="nav-link " href="/index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  href="/OurMenu.html">Our Menu</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active-page" aria-current="page" href="/FeaturedEvents.html">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#message">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#franchising">Franchising</a>
                        </li>
                    </ul>

                    <div class="d-lg-block nav-user">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center gap-3">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="fa-regular fa-heart fs-3"></i>
                                    <samp>(0)</samp>
                                </a>

                            </li>

                            <li class="nav-item ">
                                <a class="nav-link d-flex align-items-center gap-2" href="/order.html">
                                    <i class="fa-solid fa-cart-shopping  fs-3"></i>
                                    <samp>(0)</samp>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a onclick="account()" href="#" class="p-0 nav-link d-flex align-items-center justify-content-center">
                                    <img src="/assets/photo-1438761681033-6461ffad8d80 1.png" alt="">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>



<?php
include('footer.php')
?>