<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đọc truyện online</title>

        <!-- Bootstrap -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <?php echo TZ_Helper::htmlCss('bootstrap.min') ?>

        <!-- Bootstrap Theme-->
        <!-- <link href="css/cyborg-theme.css" rel="stylesheet"> -->
        <?php echo TZ_Helper::htmlCss('cyborg-theme') ?>


        <!-- font-awesome-->
        <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
        <?php echo TZ_Helper::htmlCss('font-awesome.min') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="js/jquery-2.1.1.min.js"></script> -->
        <?php echo TZ_Helper::htmlJs('jquery-2.1.1.min') ?>

        <!-- jQuerySimplyscroll -->
        <!-- <script type="text/javascript" src="js/jquery.simplyscroll.js"></script> -->
        <?php echo TZ_Helper::htmlJs('jquery.simplyscroll') ?>
        <!-- <link rel="stylesheet" href="css/jquery.simplyscroll.css" media="all" type="text/css"> -->
        <?php echo TZ_Helper::htmlCss('jquery.simplyscroll') ?>

        <script type="text/javascript">
            (function ($) {
                $(function () {
                    $("#scroller").simplyScroll({pauseOnHover: true});
                });
            })(jQuery);
        </script>

        <!-- Custom css by trans -->
        <!-- <link href="css/custom.css" rel="stylesheet"> -->
        <?php echo TZ_Helper::htmlCss('custom') ?>

    </head>
    <body>
        <!-- Facebook SDK -->
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            
		<!-- Button like and sh -->
         <div id="bt-fb">
	        <div class="fb-like" data-href="http://forum-websitetruyen.rhcloud.com/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
		
        <div class="navbar navbar-default" id="topnav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url("index.php"); ?>">ZTruyen</a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <form class="navbar-form navbar-right" action="<?php echo TZ_Helper::getUrl("public", "home", "search"); ?>">
                    <div class="input-group">
                        <input id="search" name="name" type="text" class="form-control col-lg-8"
                               placeholder="Tìm kiếm tác giả hoặc tác phẩm" size="50"> 
                        <span class="input-group-btn">
                            <input type="submit" id="bt-search"
                                   class="btn btn-primary" value="Tìm kiếm" />
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <!-- End #topbar -->


        <div class="container" id="wrapper">
            <!-- TopMenu -->
            <div id='cssmenu'>
                <ul>
                    <li class='active'><a href='<?php echo base_url("index.php"); ?>'><i class="fa fa-home fa-2x"></i>
                            Trang chủ</a></li>
                    <li><a href='<?php echo base_url("index.php/public/home/showToType/2"); ?>'><i class="fa fa-file-image-o fa-2x"></i> Truyện
                            tranh</a>

                    <li><a href='<?php echo base_url("index.php/public/home/showToType/1"); ?>'><i class="fa fa-file-text-o fa-2x"></i> Truyện chữ</a></li>
                    <li><a href='<?php echo TZ_Helper::getUrl("public", "contact", "index") ?>;'><i class="fa fa-credit-card fa-2x"></i> Liên hệ</a></li>
                </ul>
            </div>
            <!-- End TopMenu -->
            <div id="content">

                <!-- End #featured -->
                <div id="sidebar" class="col-md-3 col-sm-12 container-fluid">
                    <div id="category" class="col-md-10 col-sm-12 container-fluid">
                        <div class="mtitle">
                            <i class="fa fa-bars fa-3x navbar-left"></i> <span>Danh mục</span>
                            <h3>Thể loại truyện</h3>
                            <hr />
                        </div>
                        <div class="container-fluid">
                            <div class="col-md-6 col-sm-4 col-xs-4 text-info ">
                                <a href="<?php echo base_url("index.php/public/home/showToType/1"); ?>"><b>TRUYỆN CHỮ</b></a>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <?php
                            for ($i = 0; $i < sizeof($category = CategoryModel::getByTypeId(1)); $i++) {
                                echo ' <div class="col-md-6 col-sm-4 col-xs-4">
                                            <a href="' . (base_url("index.php/public/home/showtocategory/" . $category[$i]["id"])) . '"><i class="fa fa-chevron-right fa-1x"></i>' . KindModel::getById($category[$i]["id_kind"])[0]["kind_name"] . '</a>
                                        </div>';
                            }
                            ?>
                        </div>

                        <div class="container-fluid">
                            <div class="col-md-6 col-sm-4 col-xs-4 text-info ">
                                <a href="<?php echo base_url("index.php/public/home/showToType/2"); ?>"><b>TRUYỆN TRANH</b></a>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <?php
                            for ($i = 0; $i < sizeof($category = CategoryModel::getByTypeId(2)); $i++) {
                                echo ' <div class="col-md-6 col-sm-4 col-xs-4">
                                            <a href="' . (base_url("index.php/public/home/showtocategory/" . $category[$i]["id"])) . '"><i class="fa fa-chevron-right fa-1x"></i>' . KindModel::getById($category[$i]["id_kind"])[0]["kind_name"] . '</a>
                                        </div>';
                            }
                            ?>
                        </div>
                    </div>
                    <div id="abc" class="col-md-2 col-sm-12">
                        <div class=" container-fluid">
                            <?php
                            for ($i = 65; $i < 91; $i++) {
                                echo '<a href="' . (base_url("index.php/public/home/showToFirstChar")) . "/" . chr($i) . '" class="col-md-12 col-sm-2 text-uppercase">' . chr($i) . '</a>';
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <a href="layout_reading.php"></a>
                <!-- End #sidebar -->

                <!-- main-content ============================================================================ -->
                <!-- ========================================================================================= -->

                <div id="main-content" class="col-md-9 container-fluid">

                    <?php echo $content_for_layout; // các file view được nạp vào layout?>

                </div>

                <!-- End main-content ============================================================================ -->
                <!-- ========================================================================================= -->
            </div>
            <!-- End #content -->
        </div>
        <!-- End #wrapper -->
        <div id="footer" class="container-fluid">
            <div class="container">

                <div class="col-md-4 box">
                    <span>Mạng xã hội</span>
                    <h4>TruyenZ trên facebook</h4>
                    <hr />
                    <div class="box-content">
                        <div class="fb-like-box" data-href="https://www.facebook.com/truyen.ry" data-width="100%" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                    </div>
                </div>
                <div class="col-md-4 box">
                    <span>Liên hệ</span>
                    <h4>Thông tin website</h4>
                    <hr />
                    <div>
                        <p>Website được phát triển Nhóm đồ án HTTT - Đại học Bách Khoa Hà Nội</p>
                    </div>
                </div>
                <div class="col-md-4 box"></div>

            </div>

        </div>

        <?php echo TZ_Helper::htmlJs('custom') ?>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- 	<script src="js/bootstrap.min.js"></script> -->
        <?php echo TZ_Helper::htmlJs('bootstrap.min') ?>
        <?php echo TZ_Helper::htmlJs('typeahead') ?>

    </body>
</html>
<script>
    var substringMatcher = function(strs) {
        return function findMatches(q, cb) {
            var matches, substrRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                    // the typeahead jQuery plugin expects suggestions to a
                    // JavaScript object, refer to typeahead docs for more info
                    matches.push({value: str});
                }
            });

            cb(matches);
        };
    };

    var states = [
<?php
$lstAuthor = AuthorModel::getAll();
foreach ($lstAuthor as $info) {
    echo "'" . $info["author_name"] . "',";
}

$lstComic = ComicModel::getAll();
foreach ($lstComic as $info) {
    echo "'" . $info["comic_name"] . "',";
}
?>
    ];

    $('#search').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    },
    {
        name: 'states',
        displayKey: 'value',
        source: substringMatcher(states)
    });
</script>
