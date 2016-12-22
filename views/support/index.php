<?php
use app\assets\SupportAsset;

$bundle = SupportAsset::register($this);
$this->title = "Support";
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
        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 col-lg-offset-1 col-md-offset-2 col-sm-offset-2">

            <div class="row line">
                <div class="search col-lg-1 col-md-1 col-sm-1 col-xs-1 ">
                    <button onclick="openfilter()" onfocus="this.blur()" class="btn btn-default"><div class = "filter"></div></button>

                </div>
                <div class="search col-lg-11 col-md-11 col-sm- col-xs-9 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1 ">
                    <input id="insearch"   type="text" placeholder="Что ищем?">
                    <label onclick="staywidth()" onchange="staywidth()" onfocus="staywidth()"  for="#insearch"><div  class = "loupe"></div></label>
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

            <div class="klient">
                <div class="row">
                    <div class="avatar col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div id="iconava" style="background: url(images/123.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-7 col-xs-6">
                        <h2>Заголовок</h2>
                        <p>Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст</p>
                    </div>
                    <div class="choose col-lg-2 col-md-2 col-sm-3 col-xs-4">
                        <button onfocus="this.blur()" class="btn btn-default"><div class = "yesbut"></div></button>
                        <button onfocus="this.blur()"class="btn btn-default"><div class="nobut"></div></button>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div id="iconava" style="background: url(images/142.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-7 col-xs-6">
                        <h2>Заголовок</h2>
                        <p>Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст</p>
                    </div>
                    <div class="choose col-lg-2 col-md-2 col-sm-3 col-xs-4">
                        <button onfocus="this.blur()" class="btn btn-default"><div class = "yesbut"></div></button>
                        <button onfocus="this.blur()"class="btn btn-default"><div class="nobut"></div></button>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div id="iconava" style="background: url(images/122.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-7 col-xs-6">
                        <h2>Заголовок</h2>
                        <p>Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст</p>
                    </div>
                    <div class="choose col-lg-2 col-md-2 col-sm-3 col-xs-4">
                        <button onfocus="this.blur()" class="btn btn-default"><div class = "yesbut"></div></button>
                        <button onfocus="this.blur()"class="btn btn-default"><div class="nobut"></div></button>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div id="iconava" style="background: url(images/1333.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-7 col-xs-6">
                        <h2>Заголовок</h2>
                        <p>Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст</p>
                    </div>
                    <div class="choose col-lg-2 col-md-2 col-sm-3 col-xs-4">
                        <button onfocus="this.blur()" class="btn btn-default"><div class = "yesbut"></div></button>
                        <button onfocus="this.blur()"class="btn btn-default"><div class="nobut"></div></button>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div id="iconava" style="background: url(images/1313.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-7 col-xs-6">
                        <h2>Заголовок</h2>
                        <p>Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст</p>
                    </div>
                    <div class="choose col-lg-2 col-md-2 col-sm-3 col-xs-4">
                        <button onfocus="this.blur()" class="btn btn-default"><div class = "yesbut"></div></button>
                        <button onfocus="this.blur()"class="btn btn-default"><div class="nobut"></div></button>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div id="iconava" style="background: url(images/132.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-7 col-xs-6">
                        <h2>Заголовок</h2>
                        <p>Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст Текст текст</p>
                    </div>
                    <div class="choose col-lg-2 col-md-2 col-sm-3 col-xs-4">
                        <button onfocus="this.blur()" class="btn btn-default"><div class = "yesbut"></div></button>
                        <button onfocus="this.blur()"class="btn btn-default"><div class="nobut"></div></button>
                    </div>
                </div>


            </div>

        </div>
        <div class="col-lg-3 col-md-7 col-sm-8 col-xs-12 col-xs-offset-0 col-lg-offset-0 col-md-offset-2 col-sm-offset-2">
            <div class="ignor-list">
                <h4>Игнор-лист</h4>
                <div class="row">
                    <div class="avatar col-lg-4 col-md-4 col-sm-1 col-xs-4">
                        <div id="iconava" style="background: url(images/123.jpg); background-size: cover;"></div>
                    </div>
                    <div class=" info col-lg-8 col-md-8 col-sm-8 col-xs-8 col-sm-offset-3 col-md-offset-0 ">
                        <h5>Заголовок</h5><div id="delfromignor"><span>+</span></div>
                        <p>Text Text Text Text Text Text Text </p>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div id="iconava"  style="background: url(images/111.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <h5>Заголовок</h5><div id="delfromignor"><span>+</span></div>
                        <p>Text Text Text Text Text Text Text </p>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div id="iconava"  style="background: url(images/132.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <h5>Заголовок</h5><div id="delfromignor"><span>+</span></div>
                        <p>Text Text Text Text Text Text Text </p>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div id="iconava"  style="background: url(images/122.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <h5>Заголовок</h5><div id="delfromignor"><span>+</span></div>
                        <p>Text Text Text Text Text Text Text </p>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div id="iconava"  style="background: url(images/132.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <h5>Заголовок</h5><div id="delfromignor"><span>+</span></div>
                        <p>Text Text Text Text Text Text Text </p>
                    </div>
                </div>

                <div class="row">
                    <div class="avatar col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div id="iconava"  style="background: url(images/123.jpg); background-size: cover;"></div>
                    </div>
                    <div class="info col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <h5>Заголовок</h5><div id="delfromignor"><span>+</span></div>
                        <p>Text Text Text Text Text Text Text </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
        </div>
    </div>
</div>