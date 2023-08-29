<?php
include('connection.php');
$id = $_GET['id'];
$cateload = $sql->prepare("select * from cate_content where id = ?");
$cateload->bind_param('s', $id);
$cateload->execute();
$cateload_res = $cateload->get_result();
$data = $cateload_res->fetch_assoc();
$tittle = "Category page -" . $data['cate_name'];
?>
<!DOCTYPE html>
<html lang="en">

<?php include('layout/head.php'); ?>

<body>
    <!-- navbar -->
    <?php
    include('layout/navbar.php')
    ?>
    <!-- game banenr -->
    <div class="game-banner margin-t70">
        <!-- <img src="images/gamebanner.png" alt=""> -->
        <video src="<?php echo $data['cate_video']; ?>" autoplay loop muted></video>
    </div>
    <!-- game-content -->
    <div class="game-content margin-t50">
        <div class="section flex align-start j-between width100 gap30">
            <div class="left-section">
                <img src="<?php echo $data['cate_img']; ?>" alt="">
            </div>
            <div class="right-section flex-colomn gap10">
                <div class="heading">
                    <?php echo $data['cate_name']; ?>
                </div>
                <p><?php echo $data['content']; ?></p>
            </div>
        </div>
    </div>
    <?php
    $categoryData = $data['category'];
    $categoryValues = explode(',', $categoryData);

    $likedata = "SELECT * FROM cate_content WHERE ";
    $conditions = array();

    foreach ($categoryValues as $categoryValue) {
        $conditions[] = "FIND_IN_SET('$categoryValue', category) > 0";
    }

    $likedata .= implode(" OR ", $conditions);
    $result = $sql->query($likedata);

    ?>
    <!-- more games -->
    <div class="more-games popular-category margin-t50">
        <div class="section">
            <div class="heading">
                More Games
            </div>
            <!-- .cate-grids -->
            <div class="cate-card-section margin-t30 flex align-center j-between flex-wrap">
                <?php
                while ($row = $result->fetch_assoc()) {
                    ?>
                <a href="game.php?id=<?php echo $row['id'];?>">
                    <div class="cate-card flex-colomn align-center j-start">
                        <img src="<?php echo $row['cate_img'];?>" alt="">
                        <p> <?php echo $row['cate_name'];?> </p>
                    </div>
                </a>
                <?php
                }
                ?>
               
            </div>
        </div>

    </div>
    <?php
    include('layout/footer.php');
    include('layout/script.php')
    ?>
</body>

</html>