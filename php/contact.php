<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/contact.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    </style>
</head>

<body>

    <navbar class="navbar__section">
        <!--=============== HEADER ===============-->
        <header class="nav__header">
            <nav class="nav nav__container">
                <div class="nav__data">
                    <a href="../index.html" class="nav__logo">
                        BidWiz
                    </a>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line nav__toggle-menu"></i>
                        <i class="ri-close-line nav__toggle-close"></i>
                    </div>
                </div>

                <!--=============== NAV MENU ===============-->
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li>
                            <a href="../index.html" class="nav__link">Home</a>
                        </li>


                        <li class="dropdown__item">
                            <div class="nav__link dropdown__button">
                                Categories <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>

                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <div class="dropdown__group">


                                        <span class="dropdown__title">Electronic Items</span>

                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">Mobile $
                                                    Accesories</a>
                                            </li>
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">Homeware</a>
                                            </li>
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">Other</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">


                                        <span class="dropdown__title">Cloath</span>

                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">men</a>
                                            </li>
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">women</a>
                                            </li>
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">Wrist
                                                    watchers</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">


                                        <span class="dropdown__title">Sport Items</span>

                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">Cloaths</a>
                                            </li>
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">Bat</a>
                                            </li>
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">ball</a>
                                            </li>
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">other</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">


                                        <span class="dropdown__title">other</span>

                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">new</a>
                                            </li>
                                            <li>
                                                <a href="./html/categories.html" class="dropdown__link">new</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="dropdown__item">
                            <a href="Faq.html" class="nav__link">FAQ</a>
                        </li>

                        <li>
                            <a href="About_us.html" class="nav__link">About us</a>
                        </li>


                        <li class="dropdown__item">
                            <a href="contact.html" class="nav__link">Contact us</a>
                        </li>


                        <li class="dropdown__item">
                            <a href="login.html" class="nav__link">Login/Signup<i style="padding-left: 20px;"
                                    class="fa fa-user" aria-hidden="true"></i></a>

                        </li>
                </div>
                </li>
                </ul>
                </div>
            </nav>
        </header>


        <script src="../js/navbar.js"></script>
    </navbar>

    <body>
        <div class="background">
            <div class="contact__container">
                <div class="screen">

                    <div class="screen-body">
                        <div class="screen-body-item left">
                            <div class="app-title">
                                <span>CONTACT</span>
                                <span>US</span>
                            </div>
                            <div class="app-contact">CONTACT INFO : +1234567890</div>
                        </div>
                        <div class="screen-body-item">
                            <div class="app-form">
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="NAME" name="">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="EMAIL" name="">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="CONTACT NO" name="">
                                </div>
                                <div class="app-form-group message">
                                    <input class="app-form-control" placeholder="MESSAGE" name="">
                                </div>
                                <div class="app-form-group buttons">
                                    <button class="app-form-button">CANCEL</button>
                                    <button class="app-form-button">SEND</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <iframe frameborder="0" scrolling="no" style="height:280px;width:100%;border:none;bottom: 0;"
            src='footer.html'></iframe>

    </body>

</html>