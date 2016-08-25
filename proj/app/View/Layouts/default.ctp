<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reina</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!--CSS-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

    </head>
    <body>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-scrollto.js"></script>   
        <div class="wrapper">

            <?php echo $this->Element('header'); ?>
            <div id="content">
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <?php echo $this->Element('footer'); ?>
 <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $('.dropdown-toggle').dropdown()

        </script>        
       
        <script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <script type="text/javascript">
			$(document).ready(function() {
				$('.bxslider').bxSlider({
					mode : 'fade',
					auto: true,
					pager: false
				});
				$('#myTabs a').click(function(e) {
					e.preventDefault()
					$(this).tab('show')
				});
			});

</script>
  
    </body>
</html>