<?php

    include 'config.php';
    include 'header.php';
    //echo "<script type='text/javascript'>alert('Added to cart successfully!');</script>";
    
?>

<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="filter.js"></script>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.php"><i class="fa fa-home"></i>Home</a>
                        <a href="./shop.php">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                
                <?php
                    $view = array();
                    $sql = "SELECT * FROM products WHERE Product_SKU='".$_GET['id1']."'";
                    $result = mysqli_query($connection,$sql);
                    $view = mysqli_fetch_all($result,MYSQLI_ASSOC);

                    foreach ($view as $key => $value):

                echo "<div class='col-lg-9'>
                    <div class='row'>
                        <div class='col-lg-6'>
                            <div class='product-pic-zoom'>
                                
                                <img class='product-big-img' src='img/products/".$value['Product_Image']."' alt=''>

                                <div class='zoom-icon'>
                                    <i class='fa fa-search-plus'></i>
                                </div>
                            </div>
                            <div class='product-thumbs'>
                                <div class='product-thumbs-track ps-slider owl-carousel'>
                                
                                <div class='pt active' data-imgbigurl='img/products/".$value['Product_Image']."'><img
                                            src='img/products/".$value['Product_Image']."' alt=''></div>

                                    <div class='pt' data-imgbigurl='img/product-single/product-2.jpg'><img src='img/product-single/product-2.jpg' alt=''></div>
                                    <div class='pt' data-imgbigurl='img/product-single/product-3.jpg'><img src='img/product-single/product-3.jpg' alt=''></div>
                                    <div class='pt' data-imgbigurl='img/product-single/product-3.jpg'><img src='img/product-single/product-3.jpg' alt=''></div>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='product-details'>
                                
                                <div class='pd-title'>
                                    <span>".$value['Tags']."</span>
                                    <h3>".$value['Product_Name']."</h3>

                                    <a href='#' class='heart-icon'><i class='icon_heart_alt'></i></a>
                                </div>
                                <div class='pd-rating'>
                                    <i class='fa fa-star'></i>
                                    <i class='fa fa-star'></i>
                                    <i class='fa fa-star'></i>
                                    <i class='fa fa-star'></i>
                                    <i class='fa fa-star'></i>
                                    <span>(5)</span>
                                </div>
                                
                                <div class='pd-desc'>
                                    <p>".$value['Product_Brief_Description']."</p>
                                    <h4>$".$value['Product_Sale_Price']."<span>$".$value['Product_Price']."</span></h4>
                                </div>

                                <div class='pd-color'>
                                    <h6>Color</h6>
                                    <div class='pd-color-choose'>
                                        <div class='cc-item'>
                                            <input type='radio' id='cc-black'>
                                            <label for='cc-black'></label>
                                        </div>
                                        <div class='cc-item'>
                                            <input type='radio' id='cc-yellow'>
                                            <label for='cc-yellow' class='cc-yellow'></label>
                                        </div>
                                        <div class='cc-item'>
                                            <input type='radio' id='cc-violet'>
                                            <label for='cc-violet' class='cc-violet'></label>
                                        </div>
                                    </div>
                                </div>
                                <div class='pd-size-choose'>
                                    <div class='sc-item'>
                                        <input type='radio' id='sm-size'>
                                        <label for='sm-size'>s</label>
                                    </div>
                                    <div class='sc-item'>
                                        <input type='radio' id='md-size'>
                                        <label for='md-size'>m</label>
                                    </div>
                                    <div class='sc-item'>
                                        <input type='radio' id='lg-size'>
                                        <label for='lg-size'>l</label>
                                    </div>
                                    <div class='sc-item'>
                                        <input type='radio' id='xl-size'>
                                        <label for='xl-size'>xs</label>
                                    </div>
                                </div>
                                <div class='quantity'>
                                    <div class='pro-qty'>
                                        <input type='text' value='1' id='quantity'>
                                    </div>
                                    
                                    <a href='javascript:;' class='primary-btn pd-cart' id='addtocart' data-id2='".$value['Product_SKU']."'>Add To Cart</a>

                                </div>
                                <ul class='pd-tags'>
                                    
                                    <li><span>CATEGORY</span>: ".$value['Product_Category']."</li>
                                    <li><span>TAG</span>: ".$value['Tags']."</li>
                                </ul>
                                <div class='pd-share'>
                                    <div class='p-code'>Sku : 0000".$value['Product_SKU']."</div>

                                    <div class='pd-social'>
                                        <a href='#'><i class='ti-facebook'></i></a>
                                        <a href='#'><i class='ti-twitter-alt'></i></a>
                                        <a href='#'><i class='ti-linkedin'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='product-tab'>
                        <div class='tab-item'>
                            <ul class='nav' role='tablist'>
                                <li>
                                    <a class='active' data-toggle='tab' href='#tab-1' role='tab'>DESCRIPTION</a>
                                </li>
                                <li>
                                    <a data-toggle='tab' href='#tab-2' role='tab'>SPECIFICATIONS</a>
                                </li>
                                <li>
                                    <a data-toggle='tab' href='#tab-3' role='tab'>Customer Reviews (02)</a>
                                </li>
                            </ul>
                        </div>
                        <div class='tab-item-content'>
                            <div class='tab-content'>
                                <div class='tab-pane fade-in active' id='tab-1' role='tabpanel'>
                                    <div class='product-content'>
                                        <div class='row'>
                                            <div class='col-lg-7'>
                                                
                                                <h5>Introduction</h5>
                                                <p>".$value['Product_Introduction']."</p>
                                                <h5>Features</h5>
                                                <p>".$value['Product_Features']."</p>

                                            </div>
                                            <div class='col-lg-5'>
                                                <img src='img/product-single/tab-desc.jpg' alt=''>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='tab-pane fade' id='tab-2' role='tabpanel'>
                                    <div class='specification-table'>
                                        <table>
                                            <tr>
                                                <td class='p-catagory'>Customer Rating</td>
                                                <td>
                                                    <div class='pd-rating'>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star-o'></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class='p-catagory'>Price</td>
                                                <td>
                                                    
                                                    <div class='p-price'>$".$value['Product_Sale_Price']."</div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class='p-catagor'>Add To Cart</td>
                                                <td>
                                                    <div class='cart-ad'>+ add to cart</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class='p-catagory'>Availability</td>
                                                <td>
                                                    <div class='p-stock'></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class='p-catagory'>Weight</td>
                                                <td>
                                                    <div class='p-weight'></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class='p-catagory'>Size</td>
                                                <td>
                                                    
                                                    <div class='p-size'>".$value['Clothing_Size']."</div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class='p-catagory'>Color</td>
                                                
                                                <td><span>".$value['Product_Color']."</span></td>

                                            </tr>
                                            <tr>
                                                <td class='p-catagory'>Sku</td>
                                                <td>
                                                    
                                                    <div class='p-code'>0000".$value['Product_SKU']."</div>

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>";
                            endforeach;?>

                                <div class='tab-pane fade' id='tab-3' role='tabpanel'>
                                    <div class='customer-review-option'>
                                        <h4>2 Comments</h4>
                                        <div class='comment-option'>
                                            <div class='co-item'>
                                                <div class='avatar-pic'>
                                                    <img src='img/product-single/avatar-1.png' alt=''>
                                                </div>
                                                <div class='avatar-text'>
                                                    <div class='at-rating'>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star-o'></i>
                                                    </div>
                                                    <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                    <div class='at-reply'>Nice !</div>
                                                </div>
                                            </div>
                                            <div class='co-item'>
                                                <div class='avatar-pic'>
                                                    <img src='img/product-single/avatar-2.png' alt=''>
                                                </div>
                                                <div class='avatar-text'>
                                                    <div class='at-rating'>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star'></i>
                                                        <i class='fa fa-star-o'></i>
                                                    </div>
                                                    <h5>Roy Banks <span>27 Aug 2019</span></h5>
                                                    <div class='at-reply'>Nice !</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='personal-rating'>
                                            <h6>Your Ratind</h6>
                                            <div class='rating'>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star-o'></i>
                                            </div>
                                        </div>
                                        <div class='leave-comment'>
                                            <h4>Leave A Comment</h4>
                                            <form action='#' class='comment-form'>
                                                <div class='row'>
                                                    <div class='col-lg-6'>
                                                        <input type='text' placeholder='Name'>
                                                    </div>
                                                    <div class='col-lg-6'>
                                                        <input type='text' placeholder='Email'>
                                                    </div>
                                                    <div class='col-lg-12'>
                                                        <textarea placeholder='Messages'></textarea>
                                                        <button type='submit' class='site-btn'>Send message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php
                    include 'config.php';
                    $products = array();
                    $sql = "SELECT * FROM products WHERE Tags='".$_GET['id0']."'";
                    $result = mysqli_query($connection,$sql);
                    $related_products = mysqli_fetch_all($result,MYSQLI_ASSOC);
                    //var_dump($related_products);                    
                    //$_SESSION['related_products'] = $products;

                    foreach ($related_products as $key => $value):

                        echo "<div class='col-lg-3 col-sm-6'>
                            <div class='product-item'>
                                <div class='pi-pic'>
                                    <img src='img/products/".$value['Product_Image']."' alt=''>
                                    <div class='sale'>Sale</div>
                                    <div class='icon'>
                                        <i class='icon_heart_alt'></i>
                                    </div>
                                    <ul>
                                        <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                        <li class='quick-view'><a href='#'>+ Quick View</a></li>
                                        <li class='w-icon'><a href='#'><i class='fa fa-random'></i></a></li>
                                    </ul>
                                </div>
                                <div class='pi-text'>
                                    <div class='catagory-name'>".$value['Tags']."</div>
                                    <a href='#'>
                                        <h5>".$value['Product_Name']."</h5>
                                    </a>
                                    <div class='product-price'>
                                        $".$value['Product_Sale_Price']."
                                        <span>$".$value['Product_Price']."</span>
                                    </div>
                                </div>
                            </div>
                        </div>";
                    endforeach; ?>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <?php include 'footer.php';?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>