<style>
    .card{
        background: #ccc;
        margin-bottom: 1rem;
        border-radius:4px;
    }
    .row{
        margin:auto;
        display: flex;
        justify-content: center;
    }
    .card-footer {
        background: rgba(0,0,0, 0.7);
        padding-bottom: 1rem;
    }
    .btn-btn{
        width:90%;
        border-radius:4px;
    }
 </style>
    <div class="row">
        <?php
        $id = $_GET['proid'];
        require_once "config/config.php";
        $sql = "SELECT * FROM `products` where `proid` = '$id'";
        $res = mysqli_query($conn,$sql);
        while($data = mysqli_fetch_array($res)){
                ?>
                <div class="col-md-2 col-sm-6 col-xl-4">
                    <div class="card" style="width:90vh;">
                        <div class="card-body text-center">
                            <p>
                                <img src="./assets/images/<?php print $data['img'];?>" width="100%" alt="">
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <div class="card-content text-center text-primary">
                                <strong><?php print $data['prodName'];?> <br> 
                                <?php print $data['description'];?>
                            </strong>
                            </div>
                            <a href="payment.php?proid=<?php print $data['proid'];?>&price=<?php print $data['price'];?>&prodnm=<?php print $data['prodName'];?>" class="btn btn-success btn-btn rounded">Buy <?php print $data['price'];?> Rwf</a>
                        </div>
                    </div>
                    
                </div> 
                <?php
            }
        ?>
    </div>