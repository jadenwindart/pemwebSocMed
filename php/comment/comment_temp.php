<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>

    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->

    <?php include '../template/header.php'; ?>
</head>
<body>
    <div class='jumbotron'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-1'>
                    <img class='img-rounded' style='width:100%' src="../../image/no_image.png">
                </div>
                <div class='col-sm-11'>
                    <h5>John Doe</h5>
                    <p>Indonesia Raya adalah lagu kebangsaan Republik Indonesia. Lagu ini pertama kali diperkenalkan oleh komponisnya, Wage Rudolf Soepratman, pada tanggal 28 Oktober 1928 pada saat Kongres Pemuda II di Batavia. Lagu ini menandakan kelahiran pergerakan nasionalisme seluruh nusantara di Indonesia yang mendukung ide satu "Indonesia" sebagai penerus Hindia Belanda, daripada dipecah menjadi beberapa koloni.</p>
                    <!-- <h3><b><?php echo $name; ?></b></h3>
                    <p><?php echo $post_content; ?></p> -->
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-10 mx-auto'>
                    <div class='row'>
                        <p>Replies</p>

                        <!-- <div class='col-sm-1'>
                            <?php
                                $show_comment;

                                if(!empty($_POST)) {
                                    $show = $_POST['btn_show'];
                                    if($show) {
                                        $attr_down = 'hidden';
                                        $attr_up = '';

                                        $show_comment = 1;
                                    }
                                    else {
                                        $attr_down = '';
                                        $attr_up = 'hidden';

                                        $show_comment = 0;
                                    }
                                }
                                else {
                                    $attr_down = '';
                                    $attr_up = 'hidden';

                                    $show_comment = 0;
                                }
                            ?>                            
                            <form action='#' method='post'>
                                <button type='submit' name='btn_show' value='1' class='w3-btn fa fa-caret-down fa-lg' <?php echo $attr_down;?>></button>
                                <button type='submit' name='btn_show' value='0' class='w3-btn fa fa-caret-up fa-lg' <?php echo $attr_up;?>></button>
                            </form>
                        </div>
                    </div>
                    <?php
                        if($show_comment == 1){
                            echo "<div class='row'>";
                        }
                        else {
                            echo "<div class='row' hidden>";
                        }
                    ?> -->
                    <div class='row'>
                        <div class='col-sm-1'>
                            <img class='img-rounded' style='width:100%' src="../../image/no_image.png">
                        </div>
                        <div class='col-sm-10'>
                            <h3><small><b>Jane Doe</b></small></h3>
                            <p><small>Bacot... Anj*ng</small></p>
                        </div>
                        <div class='col-sm-1'>
                            <form action='#' method='post'>
                                <button type='submit' name='button' value='".$comment[$i]->getId()."' class='btn fa fa-close' onClick='return confirm("Are you sure you want to delete?")'></button>
                            </form>
                        </div>
                    </div>
   
                    <?php
                        // if($show_comment == 1) {
                        //     echo "<div class='row'>";
                        // }
                        // else {
                        //     echo "<div class='row' hidden>";
                        // }
                        
                        // if(isset($comment)) {
                        //     for($i = 0; $i < sizeof($comment); $i++) {
                        //         echo "<div class='row'>";
                        //         echo    "<div class='col-sm-1'>";
                        //         echo        "<img class='img-rounded img-responsive' style='width:100%' src='../../image/no_image.png'>";
                        //         echo    "</div>";
                        //         echo    "<div class='col-sm-10'>";
                        //         echo        "<h3 style='font-size:120%'><b>".$comment[$i]->getUsername()."</b></h3>";
                        //         echo        "<p style='font-size:120%'>".$comment[$i]->getComment()."</p>";
                        //         echo    "</div>";
                        //         echo    "<div class='col-sm-1'>";
                        //         echo        "<form action='comment_delete.php' method='post'>";
                        //         echo            "<button type='submit' name='button' value='".$comment[$i]->getId()."' class='btn fa fa-close' onClick='return confirm(\"Are you sure you want to delete?\")'></button>";
                        //         echo        "</form>";
                        //         echo    "</div>";
                        //         echo "</div>";
                        //     }
                        // }
                        // echo "</div>";
                    ?>
    
                    <form action='comment_submit.php' method='post'>
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
    
    <!--<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>-->
</body>
</html>