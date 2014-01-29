<html lang="ja">
    <head>
      <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Items and sales product controller</title>
        <link href="./views/css/style.css" rel="stylesheet">

        <!--Bootstrap core CSS 
        <link href="./views/css/bootstrap.css" rel="stylesheet"> -->

        <!-- Just for debugging purposes. Don't actually copy this line!
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
          <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Items</a></li>
                        <li class="active"><a href="index.php?page=sale">Sold Items</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="jumbotron">
            <h1>Sales Product</h1>
            <p>Items you bought upto yet</p>
            <p>
            <table class="table table-bordred">
        <thead>
          <tr>
            <th>Time</th>
            <th>Product Name</th>
            <th>No.</th>
            <th>Total(No of Product*Price)</th>
          </tr>
        </thead>
        <tbody>
          <? foreach ($resuly as $info) { ?>
          <tr>
            <td><? echo date("Y/m/d G:i", strtotime($info['sales_at'])); ?></td>
            <td><?= $info['name'] ?></td>
            <td><?= $info['quantity'] ?></td>
            <td><? $price = $info['price']*$info['quantity'];
            echo $price;
            ?></td>
          </tr>
          <? } ?>
         
        </tbody>
      </table>
        </p>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="./views/css/bootstrap.css"></script>
</body>
</html>
