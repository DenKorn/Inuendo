<?php
use app\assets\GraficAsset;

$bundle = GraficAsset::register($this);
$this->title = "Grafic";
?>

<div class="container-fluid">
    <div class="row">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="site">
                        <object class="logotip" data="images/logotip.svg" type="image/svg+xml"></object>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav" >
                        <li ><a href="main">Главная</a></li>
                        <li class = "navbar-right"><a href="editor">Новая реклама</a></li>
                    </ul>
                </div>
            </div>

    </div>


    <div class = "block1 row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="selection row">
                <div class="choose">
                    <div class="row">
                        <div class="col-lg-2 ">
                            <h5 class = "title">Advert 1</h5>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <input type="checkbox" class="checkbox" id="checkbox1">
                            <label for="checkbox1"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 ">
                            <object class="strelka" data="images/strelka.png"></object>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <p class="">Text djhahsdkjkjahs ahsdhhakjsd jda jkjjh</p>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <div class="row">
                        <div class="col-lg-2 ">
                            <h5 class = "title">Advert 2</h5>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <input type="checkbox" class="checkbox" id="checkbox2">
                            <label for="checkbox2"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 ">
                            <object class="strelka" data="images/strelka.png"></object>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <p class="">Text djhahsdkjkjahs ahsdhhakjsd jda jkjjh</p>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <div class="row">
                        <div class="col-lg-2 ">
                            <h5 class = "title">Advert 3</h5>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <input type="checkbox" class="checkbox" id="checkbox3">
                            <label for="checkbox3"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 ">
                            <object class="strelka" data="images/strelka.png"></object>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <p class="">Text djhahsdkjkjahs ahsdhhakjsd jda jkjjh</p>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <div class="row">
                        <div class="col-lg-2 ">
                            <h5 class = "title">Advert 4</h5>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <input type="checkbox" class="checkbox" id="checkbox4">
                            <label for="checkbox4"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 ">
                            <object class="strelka" data="images/strelka.png"></object>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <p class="">Text djhahsdkjkjahs ahsdhhakjsd jda jkjjh</p>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <div class="row">
                        <div class="col-lg-2 ">
                            <h5 class = "title">Advert 5</h5>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <input type="checkbox" class="checkbox" id="checkbox5">
                            <label for="checkbox5"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 ">
                            <object class="strelka" data="images/strelka.png"></object>
                        </div>
                        <div class="col-lg-5 col-lg-offset-3">
                            <p class="">Text djhahsdkjkjahs ahsdhhakjsd jda jkjjh</p>
                        </div>
                    </div>
                </div>
                <div class="add">
                    <object data="images/forchart.png"></object>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <div class="row about">
                <div class="col-lg-7 col-md-8 col-sm-8 col-xs-8 col-lg-offset-1">
                    <div class="log"></div>
                </div>

                <div class="redaction col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h4 id="header" contenteditable = "true" onblur="checking()">Text text text</h4>
                    <p id="description" contenteditable="true" onblur="checking()" >description description description description description description description description description description</p>
                    <a onfocus="this.blur()"  class="redact btn btn-default" href="editor">Редактор</a></a>
                </div>
            </div>
            <div class="row charts">
                <div class="col-lg-7 col-md-8 col-sm-8 col-xs-8 col-lg-offset-1">
                    <div class="field">

                    </div>
                </div>
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div  class="information">
                        <div class="wrap">
                            <h1>56</h1>
                            <h4>просмотров</h4>
                            <div class="statistika"><p>+3.8%</p></div>
                            <div class="statistika"><p>0 новых стран</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row charts">
                <div class="col-lg-7 col-md-8 col-sm-8 col-xs-8 col-lg-offset-1">
                    <div class="field"></div>
                </div>
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="information">
                        <div class="wrap">
                            <h1>83.7%</h1>
                            <h4>просматриваемости</h4>
                            <div class="statistika"><p>-1.6%</p></div>
                            <div class="statistika"><p>6 экранов</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row charts">
                <div class="col-lg-7 col-md-8 col-sm-8 col-xs-8 col-lg-offset-1">
                    <div class="field"></div>
                </div>
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="information">
                        <div class="wrap">
                            <h1>16%</h1>
                            <h4>переходов</h4>
                            <div class="statistika"><p>-12%</p></div>
                            <div class="statistika"><p>1000000+ перешло</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row charts">
                <div class="col-lg-7 col-md-8 col-sm-8 col-xs-8 col-lg-offset-1">
                    <div class="field"></div>
                </div>
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="information">
                        <div class="wrap">
                            <h1>19%</h1>
                            <h4>преходов</h4>
                            <div class="statistika"><p>-12%</p></div>
                            <div class="statistika"><p>2 вида реклам</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




