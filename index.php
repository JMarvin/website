<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Qiuad-line :: CMS</title>
    <meta name="description" content="Quad-line standard CMS template" />
	<meta name="keywords" content="quad-line, quad, line, standard, template, cms, content management system, php, html, css, code, modules, quad-line.com" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript"><!--//
            $(document).ready(function () {
                /**
                * Fix for slider box position.
                **/
                var SliderMargin = $("#slider-box").width() / 2;
                
                $("#slider-box").css("margin-left", "-" + SliderMargin + "px");
 
                delete SliderMargin;
                
                
                /**
                 * Hover effect for slider box
                 **/
                
                var SliderPassive = "./images/slider_passive.png";
                var SliderActive = "./images/slider_active.png";
                
                $("#slider-box").find("ul").find("li").mouseover(function () {
                    if(!($(this).hasClass("active")) && !($(this).hasClass("spacer"))) {
                        $(this).css("background", "url(" + SliderActive + ") no-repeat left top");
                        console.log("test");
                    }
                }).mouseout(function () {
                    if(!($(this).hasClass("active")) && !($(this).hasClass("spacer"))) {
                        $(this).css("background", "url(" + SliderPassive + ") no-repeat left top");
                    }
                });
                
                delete SliderPassive;
                delete SliderActive;
            });
        //--></script>
    </head>
    <body>
        <div id="menu-wrapper">
            <ul>
                <li class="menu-link">
                    <a href="#Home">Home</a>
                </li>
                <li class="menu-spacer"></li>
                <li class="menu-link">
                    <a href="#Home">About us</a>
                </li>
                <li class="menu-spacer"></li>
                <li class="menu-link">
                    <a href="#Home">Downloads</a>
                </li>
                <li class="menu-spacer"></li>
                <li class="menu-link">
                    <a href="#Home">Forums</a>
                </li>
                <li class="menu-spacer"></li>
            </ul>
        </div>
        
        <div id="wrapper">
            
            <div id="header-wrapper">
                <div id="slider-box">
                    <div id="slider-left"></div>
                    
                    <ul>
                        <li id="slider-item-1"></li>
                        <li class="spacer"></li>
                        <li class="active" id="slider-item-2"></li>
                        <li class="spacer"></li>
                        <li id="slider-item-3"></li>
                    </ul>
                    
                    <div id="slider-right"></div>
                    
                    <div class="clear"></div>
                </div>
            </div>
            
            <div id="content-wrapper">
                <div id="content-area">
                    <div class="content-box">
                        <div class="content-header">Header #1</div>
                        <div class="content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus tortor sit amet orci consectetur eu mollis nulla auctor. Proin in dolor vitae erat sodales convallis ac sed mauris. Aenean consequat diam vel mauris dictum sit amet consequat elit cursus. Phasellus a nisi quam, vitae bibendum mauris. Donec ut sapien sit amet ante dapibus aliquam et quis ipsum. Phasellus sed turpis nibh, quis dapibus ligula. Praesent magna eros, elementum non fermentum id, viverra sit amet urna. Vivamus suscipit nulla vel turpis dapibus commodo. Duis eget nulla a nulla egestas interdum. Proin accumsan ipsum nec ligula rhoncus eu pharetra nequ</div>
                    </div>
                    
                    <div class="content-box">
                        <div class="content-header">Header #2</div>
                        <div class="content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus tortor sit amet orci consectetur eu mollis nulla auctor. Proin in dolor vitae erat sodales convallis ac sed mauris. Aenean consequat diam vel mauris dictum sit amet consequat elit cursus. Phasellus a nisi quam, vitae bibendum mauris. Donec ut sapien sit amet ante dapibus aliquam et quis ipsum. Phasellus sed turpis nibh, quis dapibus ligula. Praesent magna eros, elementum non fermentum id, viverra sit amet urna. Vivamus suscipit nulla vel turpis dapibus commodo. Duis eget nulla a nulla egestas interdum. Proin accumsan ipsum nec ligula rhoncus eu pharetra nequ</div>
                    </div>
                </div>
                
                <div id="module-area">
                    <div class="module-box">
                        <div class="module-header">Header #3</div>
                        <div class="module-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus tortor sit amet orci consectetur eu mollis nulla auctor. Proin in dolor vitae erat sodales convallis ac sed mauris. Aenean consequat diam vel mauris dictum sit amet consequat elit cursus</div>
                    </div>
                    
                    <div class="module-box">
                        <div class="module-header">Header #4</div>
                        <div class="module-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus tortor sit amet orci consectetur eu mollis nulla auctor. Proin in dolor vitae erat sodales convallis ac sed mauris. Aenean consequat diam vel mauris dictum sit amet consequat elit cursus</div>
                    </div>
                </div>
                
                <div class="clear"></div>
            </div>
            
        </div>
        
        <div id="footer">Copyright quad-line.com and quadline 2010-2011</div>
    </body>
</html>