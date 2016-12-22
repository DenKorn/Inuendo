<?php
use app\assets\MainAsset;

$bundle = MainAsset::register($this);
$this->title = "Main";
?>
<div id="block1" class="row">
    <p class="welcstyle col-lg-5 col-lg-offset-1 col-md-6 col-sm-6 col-sm-offset-3 c">Welcome!</p>
    <div class="welctext col-lg-4 col-md-11 col-sm-11 col-xs-11 col-xs-12 ">
        <h3>Добро пожаловать</h3>
        <p> в мир быстрой рекламы и прибыльного маркетинга! У нас вы можете найти самые выгодные условия для эффективного распространения информации о вашем товаре или услуге среди потенциальных клиентов в интернете, а также получить круглосуточный контроль над наблюдением за успешностью ваших идей среди пользователей сети. Используйте созданную ранее учетную запись или же создайте новую чтобы начать работу с рекламой и получить больше информации и предложений именно для вас. </p>
        <a href="#" class="bwelcome btn btn-default" onfocus="this.blur()">С чего начать?</a>
    </div>

</div>
</div>

<div id="carousel"  data-interval="5000" data-ride="carousel" class="carousel slide">
    <!--Индикаторы-->
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <!--сдайды-->
    <div class="carousel-inner">
        <div class="item active">
            <div class="cont row">

                <object class="image col-lg-3 col-md-4 col-sm-4 col-xs-5 col-xs-offset-4" data="images/Romby.png" ></object>

                <div class="itemtext col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <h3>Быстрый старт</h3>
                    <p>Сделайте свой первый заказ и получите бесплатное одноразовое продление услуги + двойное количество очков которые вы сможете потратить на повышение успешности вашей рекламы. </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="cont row">
                <object class="image col-lg-3 col-md-4 col-sm-4 col-xs-5 col-xs-offset-4" data="images/Romby2.png" ></object>
                <div class="itemtext col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <h3>Выгодная сделка</h3>
                    <p>Заказывая рекламу вы получаете очки которые в дальнейшем можно использовать для продления ваших заказов или распространение информации о ней в более широких кругах. Также очки предоставляются если вашей рекламой интересуется большое  количество людей. Мы помогаем пользователям в их проектах! </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="cont row">
                <object class="image col-lg-3 col-md-4 col-sm-4 col-xs-5 col-xs-offset-4" data="images/Romby3.png"></object>
                <div class="itemtext col-lg-4 col-md-4 col-sm-5 col-xs-5">
                    <h3>Горячая неделя</h3>
                    <p>Закажите рекламу до 18 числа этого месяца и получите скидку в 30 процентов!<br/> *Скидка предоставляется на первый из заказов сделанный в этот промежуток времени.</p>
                </div>
            </div>

        </div>
    </div>
    <!--Стрелки переключения слайдов-->
    <!--<a href="#carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>-->

</div>
<div class="container-fluid">
    <div class="row">

        <div>
            <h2 >Какaя-то надпись</h2>

        </div>
        <div class="scroll">
            <div class="someone">
                <div class="col-lg-offset-2 col-lg-2 col-md-3 col-md-offset-1 col-sm-4 col-xs-12">
                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Заголовок</h3>
                            <div class="circle">
                                <object data="" type="image/svg+xml"></object>
                                <p class="widp">9999999999999</p>
                                <p class="widp">101010050500</p>
                            </div>
                            <p class="widp2">Какой-то текст тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест </p>
                        </div>
                    </div>

                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Заголовок</h3>
                            <div class="circle">
                                <object data="" type="image/svg+xml"></object>
                                <p class="widp">9999999999999</p>
                                <p class="widp">101010050500</p>
                            </div>
                            <p class="widp2">Какой-то текст тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-md-offset-1 col-sm-4 col-xs-12">
                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Заголовок</h3>
                            <div class="circle">
                                <object data="" ></object>
                                <p class="widp">9999999999999</p>
                                <p class="widp">101010050500</p>
                            </div>
                            <p class="widp2">Какой-то текст тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест </p>
                        </div>
                    </div>

                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Заголовок</h3>
                            <div class="circle">
                                <object data="" type="image/svg+xml"></object>
                                <p class="widp">9999999999999</p>
                                <p class="widp">101010050500</p>
                            </div>
                            <p class="widp2">Какой-то текст тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест </p>
                        </div>
                    </div>

                </div>
                <div class=" col-lg-2 col-md-3 col-md-offset-1 col-sm-4 col-xs-12">
                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Заголовок</h3>
                            <div class="circle">
                                <object data="" type="image/svg+xml"></object>
                                <p class="widp">9999999999999</p>
                                <p class="widp">101010050500</p>
                            </div>
                            <p class="widp2">Какой-то текст тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест </p>
                        </div>
                    </div>

                    <div class="bl4_cont">
                        <div class="data  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="zagh3">Заголовок</h3>
                            <div class="circle">
                                <object data="" type="image/svg+xml"></object>
                                <p class="widp">9999999999999</p>
                                <p class="widp">101010050500</p>
                            </div>
                            <p class="widp2">Какой-то текст тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест тест </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div id="first_steps" class="row">
        <h2>Не знаете с чего начать?</h2>
        <div id="step1" class=" row col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">
            <img src="images/step1.png" class="col-lg-offset-0 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6"/>
            <div class="form-group col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <input id="advertname" class="col-lg-8 col-md-12 col-sm-12 col-xs-12" type="text" placeholder="Введите название рекламы"><br/>
                <textarea maxlength="400" id="description" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Краткое описание рекламы"></textarea>
                <div class="row">
                    <button class="col-lg-4 col-md-12 col-sm-12 col-xs-12 bwelcome btn btn-default" onclick="verify()" onfocus="this.blur()">Продолжить</button>
                </div>
            </div>
        </div>
        <div id="step2" class=" row col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col- col-sm-8 col-xs-12">
            <img src="images/step2.png" class="col-lg-offset-0 col-lg-3 col-md-offset-3 col-md-5 col-sm-offset-3 col-sm-4 col-xs-offset-4 col-xs-3"/>
            <div class="row col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <p>Выберите пропорции вашей первой рекламы</p>
                <ul class="addtypes row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <li class="ad square col-lg-3 col-md-3 col-sm-3 col-xs-3"><img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="images/4.3.svg"/></li>
                    <li class="ad vertical col-lg-3 col-md-3 col-sm-3 col-xs-3"><img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="images/1.3.svg"/></li>
                    <li class="ad horizontal col-lg-3 col-md-3 col-sm-3 col-xs-3"><img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="images/3.1.svg"/></li>
                    <li class="ad four_three col-lg-3 col-md-3 col-sm-3 col-xs-3"><img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="images/3.3.svg"/></li>
                </ul>
                <div class="row">
                    <button class="col-lg-2 col-md-12 col-sm-12 col-xs-12 bwelcome btn btn-default"  onfocus="this.blur()">Создать </button>
                </div>
            </div>
        </div>
    </div>
