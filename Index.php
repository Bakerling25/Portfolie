<?php
    include ('Globals.php');
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forside</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="CSS/MyStyle.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <div>
        <?php include 'Menu.php';?>
    </div>
        <div class="row">
            <div id="LogoContent" class="col-sm-12">
                Logo
            </div>
        </div>
        <div class="row">
            <div id="MainContainer" class="col-sm-9">
                <div id="Main" class="row">
                    <div class="col-sm-12">
                        <div class="PageHeaders" class="row">
                            <div class="col-sm-12">
                                <?php
                                    mainHeader();
                                ?>
                            </div>
                        </div>
                        <div class="PageContents" class="row">
                            <div class="col-sm-12">
                                <?php
                                    mainContent();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="RightContainer" class="col-sm-3">
                <div id="TopRight" class="row">
                    <div class="col-sm-12">
                        <div class="PageHeaders" class="row">
                            <div class="col-sm-12">
                               <?php
                                    topRightHeader();
                               ?>
                            </div>
                        </div>
                        <div class="PageContents" class="row">
                            <div id="TopRightContent" class="col-sm-12">
                                <?php
                                    topRightContent();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="BottomRight" class="row">
                    <div class="col-sm-12">
                        <div class="PageHeaders" class="row">
                            <div class="col-sm-12">
                                <?php
                                    buttomRightHeader();
                                ?>
                            </div>
                        </div>
                        <div class="PageContents" class="row">
                            <div class="col-sm-12">
                                <?php
                                    buttomRightContent()
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="FooterContainer" class="col-sm-12">
                <nav id="Footer" class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
                    Copyright &copy; SallingPortfolio
                </nav>
            </div>
        </div>   
</body>
</html>
<?php
function mainHeader(){
    $GLOBALS['Decider'] = "pageHeader";
    include 'Functions/SiteDecider.php';
}
function mainContent(){
    $GLOBALS['Decider'] = "pageContent";
    include 'Functions/SiteDecider.php';
}
function topRightHeader(){
    $GLOBALS['Decider'] = "pageHeader";
    include 'Functions/SiteDecider.php';
}
function topRightContent(){
    $GLOBALS['Decider'] = "pageContent";
    include 'Functions/SiteDecider.php';
}
function buttomRightHeader(){
    $GLOBALS['Decider'] = "pageHeader";
    include 'Functions/SiteDecider.php';
}
function buttomRightContent(){
    $GLOBALS['Decider'] = "pageContetnt";
    include 'Functions/SiteDecider.php';
}
