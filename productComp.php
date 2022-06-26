 <style>
    .card{
        background: #ccc;
        margin-bottom: 1rem;
        border-radius:4px;
    }
    .row{
        margin-left: 2rem;
        margin-right: 2rem;
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
        require_once "config/config.php";
        $sql = "SELECT * FROM `products`";
        $res = mysqli_query($conn,$sql);
        while($data = mysqli_fetch_array($res)){
                ?>
                <div class="col-md-2 col-sm-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <p>
                                <img src="./assets/images/<?php print $data['img'];?>" width="100%" alt="">
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <div class="card-content text-center text-primary">
                                <strong><?php print $data['prodName'];?></strong>
                            </div>
                            <a href="details.php?proid=<?php print $data['proid'];?>" class="btn btn-success btn-btn rounded">View Details</a>
                        </div>
                    </div>
                </div> 
                <?php
            }
        ?>
    </div>