<!-- HTML Head -->
<?php include_once "includes/htmlhead.php" ?>
<body>
    <div class="black-bg">
        <?php include_once "includes/indexnavbar.php" ?>
        <?php if(!empty($sessions)) {?>
            <div style="height:95vh; display:flex;align-items:center;justify-content:center;background-color: rgba(0, 0, 0, 0.1);">
                <h4 class="text-white fw-bold text-center">Hi, <?=$sessions["name"];?> user, <br> you've logged in successfully</h4>
            </div>
        <?php } ?>
        <div class="footer fixed-bottom text-center text-white">
            &copy; from 2022 - <?=date("Y");?> created by <a href="<?=ROOT_URL;?>/home" class="footer-anchor">Fortunecodehub</a>
        </div>
    </div>
    <!-- CSS Art -->
    <?php //include_once "includes/cssart.php" ?>
    <?php include_once "includes/projecthero.php" ?>
    <!-- JS Link -->
    <?php include_once "includes/jslink.php" ?>
    <!-- <script>

        window.onload = function() {
            const sourceImg =  document.querySelector(".source-img");
            const thumbnailImg = document.querySelector(".thumbnail-img");

            document.querySelector(".source").innerHTML = `width: ${sourceImg.naturalWidth}, height: ${sourceImg.naturalHeight}`;
            document.querySelector(".thumbnail").innerHTML = `width: ${thumbnailImg.naturalWidth}, height: ${thumbnailImg.naturalHeight}`;
        }

    </script> -->
</body>
</html>