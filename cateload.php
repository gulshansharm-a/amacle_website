<?php
include("connection.php");
$id = '%' . $_GET['id'] . '%';
$cateload = $sql->prepare("select * from cate_content where category like ? limit 16");
$cateload->bind_param('s', $id);
$cateload->execute();
$cateload_res = $cateload->get_result();
if ($cateload_res->num_rows > 0) {
    while ($datsa = $cateload_res->fetch_assoc()) {
?>
        <a href="game.php?id=<?php echo $datsa['id']; ?>">
            <div class="cate-card flex-colomn align-center j-start">
                <img src="<?php echo $datsa['cate_img']; ?>" alt="">
                <p><?php echo $datsa['cate_name']; ?></p>
            </div>
        </a>
<?php
    }
}
?>