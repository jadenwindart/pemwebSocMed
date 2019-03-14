<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class='jumbotron bg-white'>
    <div class='container'>
        <div class='row border border-primary p-2'>
            <div class='col-sm-1'>
                <img class='rounded img-responsive' style='width:100%' src="image/no_image.png">
            </div>
            <div class='col-sm-11'>
                <!--<h5>John Doe</h5>-->
                <h5><?php echo $username; ?></h5>
                <!--<p>Indonesia Raya adalah lagu kebangsaan Republik Indonesia. Lagu ini pertama kali diperkenalkan oleh komponisnya, Wage Rudolf Soepratman, pada tanggal 28 Oktober 1928 pada saat Kongres Pemuda II di Batavia. Lagu ini menandakan kelahiran pergerakan nasionalisme seluruh nusantara di Indonesia yang mendukung ide satu "Indonesia" sebagai penerus Hindia Belanda, daripada dipecah menjadi beberapa koloni.</p>-->
                <p><?php echo $post_content; ?></p>
            </div>
        </div>
        <div class='row border border-secondary p-4 bg-light'>
            <div class='col-sm-10 mx-auto'>
                <div class='row'>
                    <p>Replies</p>
                </div>
                <!--<div class='row small'>
                    <div class='col-sm-1'>
                        <img class='rounded img-responsive' style='width:100%' src="image/no_image.png">
                    </div>
                    <div class='col-sm-11'>
                        <h6>John Doe</h5>
                        <p>Indonesia Raya adalah lagu kebangsaan Republik Indonesia. Lagu ini pertama kali diperkenalkan oleh komponisnya, Wage Rudolf Soepratman, pada tanggal 28 Oktober 1928 pada saat Kongres Pemuda II di Batavia. Lagu ini menandakan kelahiran pergerakan nasionalisme seluruh nusantara di Indonesia yang mendukung ide satu "Indonesia" sebagai penerus Hindia Belanda, daripada dipecah menjadi beberapa koloni.</p>
                    </div>
                </div>-->
                <?php
                    if(isset($comment)) {
                        for($i = 0; $i < sizeof($comment); $i++) {
                            echo "<div class='row small'>";
                            echo    "<div class='col-sm-1'>";
                            echo        "<img class='rounded img-responsive' style='width:100%' src='image/no_image.png'>";
                            echo    "</div>";
                            echo    "<div class='col-sm-11'>";
                            echo        "<h6>".$comment[$i]->getUsername()."</h5>";
                            echo        "<p>".$comment[$i]->getComment()."</p>";
                            echo    "</div>";
                            echo "</div>";
                        }
                    }
                ?>
                <form action="comment_submit.php" method='post'>
                    <div class='form-group'>
                        <label for='comment'>Add comment</label>
                        <textarea class='form-control' name='comment' id='comment' required></textarea>
                    </div>
                    <div class='form-group'>
                        <!--<input type='submit' class='btn btn-primary' name='button' value='Reply' onclick=1>-->
                        <button type='submit' class='btn btn-primary'>Reply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>