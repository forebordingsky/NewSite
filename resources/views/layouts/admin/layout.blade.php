<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="/css/admin/admin.css" rel="stylesheet">
    <script src="/js/app.js"></script>
</head>
<body>
    <div class="admin-site-wrapper">
        @section('header')
            <header class="header-wrap">
                <div class="layout-center">
                    <div class="header-content-wrap">
                        <div class="header-content-logo">
                            <a href="#" class="header-content-logo-link"></a>
                        </div>
                        <div class="header-content-caption-wrap">
                            <div class="header-content-caption-sub">Федеральное государственное бюджетное образовательное учреждение высшего образования</div>
                            <h1 class="header-content-caption-main">Ижевский государственный технический университет имени М.Т. Калашникова</h1>
                        </div>
                    </div>
                </div>
            </header>
        @show
        <div class="main-wrap layout-center"> 
            @section('navigation')           
                <nav class="navigation-wrap">
                    <div class="navigation-main">
                        <div class="navigation-menu">
                            <div class="navigation-menu-header">                                
                                <span class="navigation-menu-header-text">Материалы</span>
                            </div>
                            <ul class="navigation-menu-items">
                                <li class="navigation-menu-item">Новости</li>
                                <li class="navigation-menu-item">Информация</li>                                 
                            </ul>
                        </div>
                        <div class="navigation-menu">
                            <div class="navigation-menu-header">                                
                                <span class="navigation-menu-header-text">Виджеты</span>
                            </div>
                            <ul class="navigation-menu-items">
                                <li class="navigation-menu-item">Новости</li>
                                <li class="navigation-menu-item">Информация</li> 
                            </ul>
                        </div>
                        <div class="navigation-menu">
                            <div class="navigation-menu-header">                                
                                <span class="navigation-menu-header-text">Статистика</span>
                            </div>
                            
                        </div>
                        <div class="navigation-menu">
                            <div class="navigation-menu-header">                                
                                <span class="navigation-menu-header-text">Медиа</span>
                            </div>
                            
                        </div>
                    </div>
                </nav>
            @show
            <div class="content-wrap">Content</div>
        </div>
        
        <footer class="footer-wrap">Footer</footer>

    </div>
</body>
</html>