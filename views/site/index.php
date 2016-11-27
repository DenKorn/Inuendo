<?php
use app\assets\LandingAsset;
$this->title = 'Inuendo - Welcome';
$bundle = LandingAsset::register($this);
?>
<div>
    <div class="row" id="block1" style ="background:  url(<?=$bundle->baseUrl?>/images/baba_s_ayfonom.jpg); background-size: cover;">
        <div class=" check_in">
            <div><object class="make" data="<?=$bundle->baseUrl?>/images/makyour.png" ></object>
            </div>
            <div class="firstcheck_in">
                <div>
                    <input class="txtbox namebox" type="text" placeholder="Введите Имя">
                </div>
                <div>
                    <input class="txtbox password" type ="password" placeholder="Введите пароль">
                </div>
                <div>
                    <input class="txtbox e-box" type="text" placeholder="E-mail">
                </div>
                <div>
                    <button id="reg_btn" class="check_btn btn btn-default"><a href="main.html">Зарегистрироваться</a></button>
                </div>
                <div  id="goto_enter" onclick="showEntrance()" class="silka">
                    <a href="#" id="font">Уже зарегистрировались?</a>
                </div>
            </div>
            <div class ="secondcheck_in">
                <div >
                    <input class="txtbox namebox" type="text" placeholder="Введите Имя">
                </div>
                <div>
                    <input class="txtbox password" type="text" placeholder="Введите пароль">
                </div>
                <button id="enter_btn" class="check_btn btn btn-default"><a href="main.html">Войти</a></button>
                <div id="goto_regist" onclick="showRegist()" class="silka">
                    <a href="#" id="font">Вернуться к регистрации</a>
                </div>
            </div>
        </div>
    </div>

    <div class="block1-zatem"></div>

    <div class="row" id="block1-2">
        <br>
        <h2 class ="whatisit">Что это?</h2>
        <object class ="polosa" data="<?=$bundle->baseUrl?>/images/polosa.png"></object>
        <div class="aboutustext">
            <p>Здравствуйте! Вы хотите, чтобы о вас узнал весь мир? Хотите рассказать интересное о себе и узнать о других? Inuendo  - кратчайший путь к успеху в рекламной сфере. Покажите себя. Будьте на шаг впереди вместе с нами. </p>
        </div>
    </div>

    <div id="block2" class="row">
        <h2>Основные приеимущества</h2>

        <div class="row advantages">
            <div class="col-lg-2 col-lg-offset-2 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12">
                <div class="inuendo-adbody">
                    <div class="inuendo-adhead">

                        <object class="kartinka" data="<?=$bundle->baseUrl?>/images/newpoly1.svg" type="image/svg+xml"></object>

                        <h3 class="zagol"><b>С нами интересно</b></h3>
                        <p>Мы гордимся тем, что предоставляем не только сухую рекламу.
                            Развелкательная, познавательная реклама, интересные видеоролики - и это только начало возможностей Inuendo!</p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-2 col-lg-offset-1 col-md-3  col-sm-3  col-xs-12">
                <div class="inuendo-adbody">
                    <div class="inuendo-adhead">

                        <object class="kartinka" data="<?=$bundle->baseUrl?>/images/newpoly2.svg" type="image/svg+xml"></object>

                        <h3 class="zagol"><b>Вы - творец <br/> собственного стиля</b></h3>
                        <p >То, как вас будут видеть люди, решаете лишь Вы! Создайте неповторимый и незабываемый образ с  помощью Inuendo.Будьте ункальны. Пользователей тысячи особенный лишь Вы! </p>
                    </div>
                </div>
            </div>
            <div class="wh col-lg-2 col-lg-offset-1 col-md-3 col-sm-3 col-xs-12">
                <div class="inuendo-adbody">
                    <div class="inuendo-adhead">

                        <object class="kartinka" data="<?=$bundle->baseUrl?>/images/newpoly3.svg" type="image/svg+xml"></object>

                        <h3 class="zagol"><b>С нами легко!</b></h3>
                        <p>Inuendo простой, но в то же время эффективный сервер интерактивной рекламы.
                            Интуитивно понятный интерфейс, современный дизайн, надежное качество. Создавайте свою рекламу без особых усилий! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="block3" class="row">
        <div class="someone">
            <h2>Наша команда</h2>
            <div class="width_for_polyg ">

                <div class="polygon col-lg-2 col-md-2 col-sm-2 col-sx-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 polygon">
                    <object  data="<?=$bundle->baseUrl?>/images/SHS.png"></object>
                    <p class="name">Шаталина Светлана</p>
                </div>


                <div class="polygon col-lg-2 col-md-2 col-sm-2 col-sx-2 polygon">
                    <object data="<?=$bundle->baseUrl?>/images/KA.png"></object>
                    <p class="name">Кубицкий Александр</p>
                </div>

                <div class=" polygon col-lg-2 col-md-2 col-sm-2 col-sx-2 polygon">
                    <object  data="<?=$bundle->baseUrl?>/images/KD.png"></object>
                    <p class="name">Корнейчук Денис</p>
                </div>

                <div class="polygon col-lg-2 col-md-2 col-sm-2 col-sx-2 polygon">
                    <object  data="<?=$bundle->baseUrl?>/images/YS.png"></object>
                    <p class="name">Серёгин Юрий</p>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-sx-2 polygon">
                    <object data="<?=$bundle->baseUrl?>/images/AS.png"></object>
                    <p class="name">Албов Александр</p>
                </div>
            </div>

        </div>

    </div>


    <div class="row">
        <div id="block4">
            <div class="someone">
                <div>
                    <h2>Какaя-то надпись</h2>
                    <div class="line"></div>
                </div>
                <div class="col-lg-offset-3 col-lg-2 col-md-4 col-md-offset-0 col-sm-4 col-xs-12">
                    <div class="bl4_cont">
                        <div class="data col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Porshe Cayenne</h3>
                            <div class="circle">
                                <object data="<?=$bundle->baseUrl?>/images/porsh.jpg"></object>
                                <p class="widp">30.01.2016</p>
                                <p class="widp">100500</p>
                            </div>
                            <p class="widp2">Мир меняется. Наши принципы – нет.</p>
                        </div>
                    </div>

                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Aqua Minerale</h3>
                            <div class="circle">
                                <object data="<?=$bundle->baseUrl?>/images/aqua.jpg"></object>
                                <p class="widp">20.12.2016</p>
                                <p class="widp">100500</p>
                            </div>
                            <p class="widp2">Всегда на высоте. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-md-offset-0 col-sm-4 col-xs-12">
                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Canadian Blood Services</h3>
                            <div class="circle">
                                <object data="<?=$bundle->baseUrl?>/images/canad.jpg"></object>
                                <p class="widp">31.05.2016</p>
                                <p class="widp">100500</p>
                            </div>
                            <p class="widp2">Это в твоих силах – дать кровь. (It’s in you to give.)</p>
                        </div>
                    </div>

                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Сколково (Skolkovo)</h3>
                            <div class="circle">
                                <object data="<?=$bundle->baseUrl?>/images/scolk.jpg"></object>
                                <p class="widp">22.03.2016</p>
                                <p class="widp">100500</p>
                            </div>
                            <p class="widp2">Будь умным. Даже хитрым.</p>
                        </div>
                    </div>

                </div>
                <div class=" col-lg-2 col-md-4 col-md-offset-0 col-sm-4 col-xs-12">
                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Perfect Fit</h3>
                            <div class="circle">
                                <object data="<?=$bundle->baseUrl?>/images/perfect.jpg" ></object>
                                <p class="widp">15.02.2016</p>
                                <p class="widp">100500</p>
                            </div>
                            <p class="widp2">Знает характер вашей кошки.</p>
                        </div>
                    </div>

                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Ritter Sport</h3>
                            <div class="circle">
                                <object data="<?=$bundle->baseUrl?>/images/ritter.jpg"></object>
                                <p class="widp">13.10.2016</p>
                                <p class="widp">100500</p>
                            </div>
                            <p class="widp2">Качество в квадрате.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="block5"  class="row">
        <h2>Где нас можно найти?</h2>
        <div class="row col-lg-3 col-lg-offset-3 col-md-5 col-md-offset-2 col-sm-5  col-sm-offset-1 col-xs-12">
            <object class="col-lg-5 col-md-4 col-sm-6 col-xs-4 " data="<?=$bundle->baseUrl?>/images/mark.png"></object>
            <p id="place">
                Украина, <br>г. Николаев,<br> Центральный район, <br>ул. Соборная, 12
            </p>
        </div>

        <div class=" row col-lg-3  col-lg-offset-1 col-md-5 col-sm-5 col-xs-12">
            <object class="col-lg-5 col-md-4 col-sm-6 col-xs-4" data="<?=$bundle->baseUrl?>/images/@.png"></object>
            <div id="contacts">
                <p>Тел. +3 80512 37-37-38 <br>Skype InuendoTeam<br> <a>inuendo@gmail.com</a></p>
            </div>
        </div>
    </div>
</div>