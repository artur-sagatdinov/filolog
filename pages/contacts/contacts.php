<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>VERBI DISCIPULI</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Montserrat:wght@400;500&display=swap"
            rel="stylesheet"
        />
        <link
            rel="shortcut icon"
            href="../../assets/icons/favicon.png"
            type="image/png"
        />
        <link rel="stylesheet" href="../../style.css" />
        <link rel="stylesheet" href="contacts.css" />
        <link rel="stylesheet" href="../../burger.css" />
    </head>
    <body>
        <header class="headerall">
            <div class="head">
                <div class="logo_block">
                    <img
                        class="logo"
                        src="../../assets/icons/logo_new.png"
                        alt="logo"
                    />
                </div>
                <a class="head_text_link" href="../../index.html">
                    <span class="head_text">
                        <span style="font-size: 26px;">ФИЛОЛОГИЧЕСКИЙ АЛЬМАНАХ</span>
                        <span style="font-weight: bold;">VERBI DISCIPULI</span>
                    </span>
                    <div class="head_text__lines"></div>
                </a>

                <a class="head_feedback_link" href="contacts.php">
                    <figure class="head_feedback">
                        <span>Обратная связь</span>
                    </figure>
                </a>
                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                        <span class="span-before"></span>
                        <span class="span-mid"></span>
                        <span class="span-after"></span>
                    </label>

                    <ul class="menu__box">
                        <li>
                            <a class="menu__item" href="../../index.html"
                                >Главная</a
                            >
                        </li>
                        <li>
                            <a class="menu__item" href="../authors/authors.html"
                                >Для авторов</a
                            >
                        </li>
                        <li>
                            <a class="menu__item" href="#">Контакты</a>
                        </li>
                        <li>
                            <a class="menu__item" href="../archive/archive.html"
                                >Архив</a
                            >
                        </li>
                    </ul>
                </div>
            </div>

            <div class="head_menu">
                <nav class="menu">
                    <a href="../../index.html">
                        <span>Главная</span>
                    </a>

                    <a href="../authors/authors.html">
                        <span>Для авторов</span>
                    </a>

                    <a href="#">
                        <span>Контакты</span>
                    </a>
                    <a href="../archive/archive.html">
                        <span>Архив</span>
                    </a>
                </nav>
            </div>
        </header>

        <section class="contacts">
            <div class="contacts_title">
                <div>Контакты</div>
            </div>
            <div class="contacts_main">
                <div class="contacts_leftpart">
                    <p class="contacts_leftpart_title">Контактная информация</p>
                    <div class="contacts_info">
                        <div class="contacts_number_messenger">
                            <!-- <div class="contacts_number">
                                <img
                                    src="../../assets/icons\Frame 30.png"
                                    class="phone_img"
                                />
                                <div class="contacts_phone_mail">
                                    +7 999 999-99-99
                                </div>
                            </div> -->
                        </div>

                        <div class="contacts_number">
                            <img
                                src="../../assets/icons\Frame 31.png"
                                class="mail_img"
                            />
                            <a
                                href="mailto:verbi_discipuli@mail.ru"
                                class="contacts_phone_mail"
                            >
                                verbi_discipuli@mail.ru
                            </a>
                            <div
                                class="contacts_messengers"
                                style="margin-left: 40px"
                            >
                                <!-- <a href="#"
                                    ><img
                                        src="../../assets/icons\iconmonstr-whatsapp-5-30.png"
                                        alt="whatsapp"
                                        class="messenger_img"
                                /></a> -->
                                <a
                                    href="https://vk.com/verbi_discipuli"
                                    target="_blank"
                                    ><img
                                        src="../../assets/icons\iconmonstr-vk-5-30.png"
                                        alt="vkontakte"
                                        class="messenger_img"
                                /></a>
                                <!-- <a href="#"
                                    ><img
                                        src="../../assets/icons\iconmonstr-telegram-5-30.png"
                                        alt="telegram"
                                        class="messenger_img"
                                /></a> -->
                            </div>
                        </div>
                        <div class="contacts_messengers-1080">
                            <!-- <a href="#"
                                ><img
                                    src="../../assets/icons\iconmonstr-whatsapp-5-30.png"
                                    alt="whatsapp"
                                    class="messenger_img"
                            /></a> -->
                            <a href="https://vk.com/verbi_discipuli"
                                ><img
                                    src="../../assets/icons\iconmonstr-vk-5-30.png"
                                    alt="vkontakte"
                                    class="messenger_img"
                            /></a>
                            <!-- <a href="#"
                                ><img
                                    src="../../assets/icons\iconmonstr-telegram-5-30.png"
                                    alt="telegram"
                                    class="messenger_img"
                            /></a> -->
                        </div>
                    </div>
                </div>

                <form id="form" class="contacts_rightpart">
                    <div class="contacts_rightpart_main">
                        <div class="twosegmentblock">
                            <div class="twosegment">
                                <input name="name" type="text" placeholder="Имя*" required/>
                            </div>

                            <div class="twosegment">
                                <input name="surname" type="text" placeholder="Фамилия" />
                            </div>
                        </div>

                        <div class="twosegmentblock">
                            <div class="twosegment">
                                <input
                                    name="number"
                                    type="tel"
                                    placeholder="Номер телефона*"
                                required/>
                            </div>

                            <div class="twosegment">
                                <input name="email" type="email" placeholder="E-mail" />
                            </div>
                        </div>

                        <div class="onesegment">
                            <input name="text" placeholder="Ваше сообщение" />
                        </div>

                        <button id="send_button" class="sendbutton">
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <footer>
            <div class="footer">
                <div class="footer_logo_block">
                    <img
                        class="logo"
                        src="../../assets/icons/logo_new.png"
                        alt="logo"
                    />
                </div>
                <a class="footer_text_link" href="../../index.html">
                    <span class="head_text">
                        <span>ФИЛОЛОГИЧЕСКИЙ АЛЬМАНАХ</span>
                        <span>VERBI DISCIPULI</span>
                    </span>
                    <!-- <div class="head_text__lines"></div> -->
                </a>

                <!-- <div class="footer_links">
                    <div class="footer_links_text">
                        <a href="#"> Политика конфиденциальности</a>
                    </div>
                    <div class="footer_links_text">
                        <a href="#">Правила пользования сайта</a>
                    </div>
                    <div class="footer_links_text">
                        <a href="#">Размещение рекламы</a>
                    </div>
                    <div class="footer_links_text1">
                        <a href="#">Copyright © 2023 Журнал</a>
                    </div>
                </div> -->
            </div>
        </footer>
        <script src="../../animation/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="my_script.js"></script>
    </body>
</html>
