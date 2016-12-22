<?php
use app\assets\ManagementAsset;

$bundle = ManagementAsset::register($this);
$this->title = "Management";
?>


<div class="row">
    <div class="block1">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-1"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
            <div class="pict"><object data="images/pomb.png"></object></div>
            <div class="text">
                <p>Добро пожаловать</p>
                <p class="t2">в режим администратора</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-1"></div>
    </div>
</div>

<div class="row block2">

    <div class=" col-lg-8 col-md-8 col-sm-10 col-xs-10 col-lg-offset-2 col-md-offset-2 col-xs-offset-1">
        <div class="row line">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  ">
                <button onclick="openfilter()"  onfocus="this.blur()" class="btn btn-default filter"><div class="filter"></div></button>
                <div id="addsite" onfocus="this.blur()"  class=" btn btn-default">
                    <div id="add" onclick="sitesblock()">+</div>


                </div>
            </div>
            <div class="search col-lg-10 col-md-10 col-sm-9 col-xs-8 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 col-xs-offset-1 ">
                <input id="insearch"type="text" placeholder="Что ищем?">
                <label for="#insearch"  onclick="staywidth()" onchange="staywidth()" onfocus="staywidth()"  ><div class="loupe"></div></label>
            </div>

        </div>
        <div class="filtfield">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class = "content">
                    <h3>Заголовок</h3><div class="delitesite"><span>+</span></div>
                    <p>Мы приводим клиентов нашим клиентам!</p>
                    <form action="http://adwservice.com.ua/">
                        <button type="submit"onfocus="this.blur()"  class ="btn btn-default">Go to</button>
                    </form>
                    <div class="wrap">
                        <p>Сайт для размещения контекстной рекламы. Реклама в Google, Yandex, социальные сети, YouTube, веб-аналитика. С нами выгодно работать! Мы гарантируем скорость, эффективность, экономию бюджета и интеллектуальную стратегию продвижения. Проводим аудит, определяем цели Вашей компании, анализируем текущее состояние бизнеса, оптимизируем объявления, сетевые страницы. По итогам нашей работы мы предоставляем вам детальные отчеты на каждом этапе, с рекомендациями по достижению максимальной эффективности рекламной кампании.</p>
                    </div>
                </div>

                <div class = "content">
                    <h3>Заголовок</h3><div class="delitesite"><span>+</span></div>
                    <p>Настройка контекстной рекламы</p>
                    <form action="http://search-ppc.com/">
                        <button type="submit"onfocus="this.blur()"  class ="btn btn-default">Go to</button>
                    </form>
                    <div class="wrap">
                        <p>Настройка Контекстной Рекламы в Google AdWords и Yandex Direct.  Начните получать звонки через 3-7 дней. Мы гарантированно увеличим количество клиентов, а значит и прибыли в течение месяца. После внедрения нашей технологии по привлечению клиентов вы увидите результат уже через 3-7 дней. Работаем шаг за шагом:  звонок - заказ - договор.  Вы звоните нам, и мы грамотно консультируем вас по вашему вопросу. Ознакомившись с нашим прайсом и получив консультацию, вы оформляете заказ. Мы обговариваем объем работы,и после предоплаты тарифа приступаем к работе.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                <div class = "content">
                    <h3>Заголовок</h3><div class="delitesite"><span>+</span></div>
                    <p>"Создание банерной рекламы с ведущими форматами рекламных материалов" </p>
                    <form action="https://ginads.com/ru/">
                        <button type="submit"onfocus="this.blur()"  class ="btn btn-default">Go to</button>
                    </form>
                    <div class="wrap">
                        <p>Размещение банерной рекламы с рядом таких преимуществ: Множество таргетингов (Широкие возможности таргетинга предоставят доступ к целевой аудитории), Эффективные форматы (Объявления привлекут внимание, благодаря современным форматам с высоким уровнем эффективности), Качественные площадки (Тщательный мониторинг качества трафика обеспечит переходы с высоким уровнем конвертации).</p>
                    </div>
                </div>

                <div class = "content">
                    <h3>Wocreator.com</h3><div class="delitesite"><span>+</span></div>
                    <p>Обзоры на различные сайты </p>
                    <form action="http://www.wocreator.com/tag/reklamnye-sajty">
                        <button type="submit"onfocus="this.blur()"  class ="btn btn-default">Go to</button>
                    </form>
                    <div class="wrap">
                        <p>Wocreator.com – это место, где получать свою порцию вдохновения смогут не только люди вышеуказанных профессий, а и все, кто связан с интернетом, будь то веб-программисты, сотрудники веб-студий или пользователи Сети. Ознакомтесь с контентом об искусстве, музыке, рисовании, играх и так далее!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class = "content">
                    <h3>Itc.ua</h3><div class="delitesite"><span>+</span></div>
                    <p>Сборник новостей на разную тематику </p>
                    <form action="http://itc.ua/">
                        <button type="submit"onfocus="this.blur()" class ="btn btn-default">Go to</button>
                    </form>
                    <div class="wrap">
                        <p>Просматривайте рекламу, новости, различные статьи. Новые технологии, образование, социальные сети, блоги, видео - все на ладони благодаря itc.ua! </p>
                    </div>
                </div>

                <div class = "content">
                    <h3>Ub.ua</h3><div class="delitesite"><span>+</span></div>
                    <p>ub.ua - будьте современными, покупайте и продавайте on-line </p>
                    <form action="http://ub.ua/">
                        <button type="submit" onfocus="this.blur()"  class ="btn btn-default">Go to</button>
                    </form>
                    <div class="wrap">
                        <p>"Портал Укрбизнес - сайт с наибольшим количеством сервисов для онлайн торговли и делового общения. Миллионы товаров и сотни тысяч продавцов - ЗДЕСЬ. Свежие новости, услуги, товары и объявления - проще простого."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                <div class = "content">
                    <h3>Qwry</h3><div class="delitesite"><span>+</span></div>
                    <p>Qwry - новости технологий, гаджетов, ИТ</p>
                    <form action="http://www.qwrt.ru/">
                        <button type="submit"onfocus="this.blur()"  class ="btn btn-default">Go to</button>
                    </form>
                    <div class="wrap">
                        <p>Qwrt.ru — иллюстрированный интернет-журнал о научной науке и технологичных технологиях, тенденциях в IT и интернете, о необычных гаджетах и изобретениях. Пишем обо всем, что интересно нам и нашим читателям. Хотя... кого волнуют читатели? </p>
                    </div>
                </div>

                <div class = "content">
                    <h3>Так просто!</h3><div class="delitesite"><span>+</span></div>
                    <p>Советы, которыми стоит поделиться! </p>
                    <form action="https://takprosto.cc/">
                        <button type="submit"onfocus="this.blur()"  class ="btn btn-default">Go to</button>
                    </form>
                    <div class="wrap">
                        <p>Так просто! - мы расскажем Вам обо всем. Простые статьи от обустройства квартиры до новшеств в медицине не оставят вам незаинтересованным. Окунитесь в мир познавательного, узнайте больше с нами! </p>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div id="invisblock">
        <div id="close" onclick="sitesblock()"><span>+</span></div>
        <h2>Добавим новый сайт</h2>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Название сайта" maxlength="40" id="site_name" type="text" class="validate">
                    </div>
                </div>
            </form>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Краткое описание" maxlength="100" id="short_discription" type="text" class="validate">
                    </div>
                </div>
            </form>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input  placeholder="Ссылка" maxlength="100"  id="link" type="text" class="validate">
                    </div>
                </div>
            </form>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea placeholder="Описание" id="description" maxlength="800" class="validate"></textarea>
                    </div>
                </div>
            </form>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <button onfocus="this.blur()" id="submitbtn" sitesblock()>Добавить сайт</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
