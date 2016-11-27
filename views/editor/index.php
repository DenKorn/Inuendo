<?php
/* @var $this yii\web\View */
use app\assets\EditorAsset;
$bundle = EditorAsset::register($this);
$title = "Редактор рекламы";
?>
<div class="row main">
    <div class="sidepanel col-lg-1">
        <input id="burger" type="checkbox"/>
        <label for="burger">
            <div class="line line1"></div>
            <div class="line subline1"></div>
            <div class="line line2"></div>
            <div class="line subline2"></div>
            <div class="line line3"></div>
        </label>
        <div class="sidepanel-in">

            <ul id="main-menu" class="col-lg-5">
                <li>D</li>
                <li>S</li>
                <li>UNDO</li>
                <li>REDO</li>
            </ul>
            <ul id="resolution-menu" class="col-lg-7">
                <li ><div class="res" id="res14"></div><p>1:4</p></li>
                <li class="current"><div class="res" id="res41"></div><p>4:1</p></li>
                <li><div class="res" id="res44"></div><p>4:4</p></li>
                <li><div class="res" id="res43"></div><p>4:3</p></li>
            </ul>

            <footer class="col-lg-12"><div class="col-lg-6 col-lg-offset-3" id="add"><span>+</span></div></footer>

        </div>
    </div>
    <div class="col-lg-7">
        <div  id="create-area"></div>
        <ul id="moke-ups" class="col-lg-12">
            <li class="col-lg-2"></li>
            <li class="col-lg-2"></li>
            <li class="col-lg-2"></li>
            <li class="col-lg-2"></li>
            <li class="col-lg-2"></li>
        </ul>

    </div>
    <div id="connections" class="col-lg-4"></div>
</div>