<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
</head>
<body>
    <div class="site-wrapper">
        @section('header')
            <header class="site-header">
                <div class="site-header-top">
                    <div class="layout-center">
                        <!-- Дата, время, пары -->
                        <div class="site-header-top-left">
                            <div class="site-header-top-element type-separated">
                                <span class="site-header-top-element-text">Понедельник, 1 Января, 2021г.</span>
                            </div>
                            <div class="site-header-top-element type-separated">
                                <span class="site-header-top-element-text">00:00:00</span>
                            </div>
                            <div class="site-header-top-element type-separated">
                                <span class="site-header-top-element-text">Неделя под чертой</span>
                            </div>
                            <div class="site-header-top-element type-separated">
                                <span class="site-header-top-element-text">Занятия не проводятся</span>
                            </div>
                        </div>
                        <!-- Оплата, интернет приемная -->
                        <div class="site-header-top-right">
                            <div class="site-header-top-element type-separated">
                                <span class="site-header-top-element-text">
                                    <a class="link animation" href="#">Оплата</a>
                                </span>
                            </div>
                            <div class="site-header-top-element">
                                <span class="site-header-top-element-text">
                                    <a class="link animation" href="#">Интернет-приёмная</a>
                                </span>
                            </div>
                        </div>
                        <!-- Язык, поиск, личный кабинет -->
                        <div class="site-header-top-right">
                            <a itemprop="Copy" href="/blind-mode" class="site-header-top-element">
                                <i class="istu-i istu-i-eye" style="margin-right: 0px;"></i>                               
                            </a>
                            <a class="site-header-top-element state-active">
                                <i class="istu-i istu-i-flag-ru" style="margin-right: 0px;"></i>                                
                            </a>
                            <a href="#" class="site-header-top-element">
                                <i class="istu-i istu-i-flag-en" style="margin-right: 0px;"></i>                                
                            </a>
                            <div class="site-header-top-element site-header-top-search">
                                <form action="/search" method="get">
                                    <input type="text" class="input" name="query" placeholder="Поиск по сайту">
                                    <button type="submit"></button>
                                </form>
                            </div>
                            <!--<div class="site-header-top-element">
                                <span class="site-header-top-element-text">
                                    <a class="link animation" href="#">Вход в личный кабинет</a>  |
                                        <a class="link animation" href="#">Регистрация</a>
                                </span>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="site-header-main">                   
                    <div class="site-header-name">
                        <div class="layout-center">
                            <div class="site-header-name-inner">
                                <div class="site-header-name-logo">
                                    <a href="#" class="site-header-name-logo-link"></a>
                                </div>
                                <div class="site-header-name-caption-wrap">
                                    <div class="if-size-pc">
                                        <div class="site-header-name-caption" itemprop="name">
                                            <div class="site-header-name-caption-sup">Федеральное государственное бюджетное образовательное учреждение высшего образования</div>
                                            <h1 class="site-header-name-caption-main">Ижевский государственный технический университет имени М.Т. Калашникова</h1>
                                            <h3 class="site-header-name-caption-sup">Воткинский филиал</h2>
                                        </div>
                                    </div>
                                    <div class="if-size-not-pc">
                                        <div class="site-header-name-caption">
                                            <div class="site-header-name-caption-sup">ФГБОУ ВО</div>
                                            <div class="site-header-name-caption-main">«ИжГТУ имени М.Т. Калашникова»</div>
                                        </div>
                                        <div class="site-header-name-menu">
                                            <div class="site-header-name-menu-bar"></div>
                                            <div class="site-header-name-menu-bar"></div>
                                            <div class="site-header-name-menu-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>  
        @show 
        @section('navigation')    
            <nav class="site-header-menu type-lower">
                <div class="layout-center">
                    <ul class="someMenu-ul">
                        <li class="someMenu-li">
                            <a href="#" class="someMenu-link">
                                <span class="someMenu-link-text">Университет</span>
                            </a>                           
                        </li>
                        <li class="someMenu-li">
                            <a href="#" class="someMenu-link">
                                <span class="someMenu-link-text">Образование</span>
                            </a>  
                        </li>
                        <li class="someMenu-li">
                            <a href="#" class="someMenu-link">
                                <span class="someMenu-link-text">Наука и инновации</span>
                            </a>  
                        </li>
                        <li class="someMenu-li">
                            <a href="#" class="someMenu-link">
                                <span class="someMenu-link-text">Студенческая жизнь</span>
                            </a>  
                        </li>
                        <li class="someMenu-li">
                            <a href="#" class="someMenu-link">
                                <span class="someMenu-link-text">Международная деятельность</span>
                            </a>  
                        </li>
                        <li class="someMenu-li">
                            <a href="#" class="someMenu-link">
                                <span class="someMenu-link-text">Поступить в ИжГТУ</span>
                            </a>  
                        </li>
                    </ul>
                </div>
            </nav>
        @show
        @section('content')
            <div class="site-main"></div>
        @endsection
        @section('usefullInfo')
            <div class="layout-center">
                <div class="mainUseful">
                    <div class="mainUseful-header">Полезная информация</div>
                    <div class="d-flex mainUseful-ul-column">
                        <div class="flex-1 d-flex flex-column">
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Сведения об образовательной организации</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Гражданская оборона и защита от ЧС</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Противодействие коррупции</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Противодействие терроризму и экстремизму</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a target="_blank" href="#" class="link animation">Профком</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Сведения о доходах, расходах, об имуществе и обязательствах имущественного характера</a>
                            </span>
                            
                        </div>
                        <div class="flex-1 d-flex flex-column">
                            <span class="pseudo-mainUseful-li">
                                <a href="#" target="_blank" class="link animation">Бизнес инкубатор</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" target="_blank" class="link animation">Научно-инновационные разработки</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" target="_blank" class="link animation">Инклюзивное образование</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Управление информационных ресурсов</a>
                            </span>
                            
                        </div>
                        <div class="flex-1 d-flex flex-column">
                            
                            <span class="pseudo-mainUseful-li">
                                <a href="#" target="_blank" class="link animation">Спортивный центр</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Студенческий городок</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Служебный раздел</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Оплата обучения</a>
                            </span>
                            <span class="pseudo-mainUseful-li">
                                <a href="#" class="link animation">Коронавирус COVID-19</a>
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>
        @show
        @section('footer')
            <footer class="site-footer" style="padding-bottom: 10px">
                <div class="site-footer-columns layout-center">
                    <div class="site-footer-columns-one">
                        <div class="site-footer-section">
                            <div class="site-footer-section-header">© ФГБОУ ВО «ИжГТУ имени М.Т. Калашникова» Воткинский Филиал</div>
                            <div class="site-footer-section-content">
                                <div class="site-footer-opt">
                                    <div class="site-footer-opt-caption">
                                        <a class="link animation" href="#">Разработка © 2021</a>
                                    </div>
                                </div>
                                <div class="site-footer-opt">
                                    <div class="site-footer-opt-caption">
                                        <a class="link animation" href="#">Правила использования информации</a>
                                    </div>
                                </div>
                                <div class="site-footer-opt">
                                    <div class="site-footer-opt-caption">
                                        <a class="link animation" href="#">Политика по обработке Персональных данных</a>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="site-footer-columns-one">
                        <div class="site-footer-section">
                            <div class="site-footer-section-header">КОНТАКТЫ</div>
                            <div class="site-footer-section-content">
                                <div class="site-footer-opt type-with-icon">
                                    <i class="istu-i istu-i-letter"></i>
                                    <div class="site-footer-opt-caption">426069, Удмуртская Республика, г. Воткинск, ул. Студенческая, 7</div>
                                </div>
                                <div class="site-footer-opt type-with-icon">
                                    <i class="istu-i istu-i-phone"></i>
                                    <div class="site-footer-opt-caption">Единый многоканальный телефон: <a href="tel:+73412776055" class="link animation">(3412) 77-60-55</a></div>
                                </div>
                                <div class="site-footer-opt type-with-icon">
                                    <i class="istu-i istu-i-email"></i>
                                    <div class="site-footer-opt-caption">Email: <a href="mailto:info@istu.ru" class="link animation">info@istu.ru</a></div>
                                </div>
                                <div class="site-footer-opt type-with-icon">
                                    <i class="istu-i istu-i-fax"></i>
                                    <div class="site-footer-opt-caption">Факс: (3412) 50-40-55</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer-columns-one">
                        <div class="site-footer-section">
                            <div class="site-footer-section-header">СОЦСЕТИ</div>
                            <div class="site-footer-section-content">
                                <div class="site-footer-social">
                                    <a href="#" target="_blank" class="site-footer-social-one type-vk"><img src="/assets/images/social_vk.png" alt="ВКонтакте"></a>                            
                                    <a href="#" target="_blank" class="site-footer-social-one type-facebook"><img src="/assets/images/social_facebook.png" alt="Facebook"></a>
                                    <a href="#" target="_blank" class="site-footer-social-one type-twitter"><img src="/assets/images/social_twitter.png" alt="Twitter"></a>
                                    <a href="#" target="_blank" class="site-footer-social-one type-youtube"><img src="/assets/images/social_youtube.png" alt="Youtube"></a>                                   
                                </div>
                                <div class="site-footer-opt">
                                    <div class="site-footer-opt-caption" style="margin-top: 10px;">
                                        <a class="link animation" href="#">Интернет-приёмная</a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="layout-center" style="border-top: 1px solid #fff; margin-top: 30px;     display: flex; align-items: center; justify-content: space-between;">
                    <div>
                        <p style="font-size: 12px;">Использование материалов, размещенных на сайте, допускается только с письменного разрешения ИжГТУ им. М.Т. Калашникова или соответствующего правообладателя.</p>
                        <p style="font-size: 12px;">Запрещается автоматизированное извлечение размещенной информации любыми сервисами без официального разрешения ИжГТУ им. М.Т. Калашникова</p>
                    </div>
                    <!--<div>
                        <a href="https://webmaster.yandex.ru/siteinfo/?site=https://istu.ru"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?https://istu.ru&amp;theme=light&amp;lang=ru" style="display: none !important;"></a>
                        <a href="https://metrika.yandex.ru/stat/?id=47343135&amp;from=informer" target="_blank" rel="nofollow">
                            <img src="https://informer.yandex.ru/informer/47343135/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="47343135" data-lang="ru">
                        </a>
                    </div>-->
                </div>
            </footer>
        @show
    </div>
</body>
</html>