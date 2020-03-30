<?php
    session_start();

    include 'config.php';

    if(isset($_SESSION['cart'])):
        $shopping_cart = $_SESSION['cart'];

    else:
        $shopping_cart = array();

    endif;

    include 'header.php';
?>

<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="filter.js"></script>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i>Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">                        

                            <?php
                                if(empty($shopping_cart)):
                                    echo "Oops! You don't have any item in your cart....";

                                else:
                                    echo "<table>
                                    <thead>
                                    <tr>
                                    <th>Image</th>
                                    <th class='p-name'>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class='ti-close'></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>";

                                    foreach ($shopping_cart as $key => $value):

                                        echo "<tr>
                                        <td class='cart-pic first-row'><img src='img/products/".$value['Product_Image']."' alt='' width='150' height='150'></td>
                                        <td class='cart-title first-row'>
                                            <h5>".$value['Product_Name']."</h5>
                                        </td>
                                        <td class='p-price first-row'>$".$value['Product_Sale_Price']."</td>
                                        <td class='qua-col first-row'>
                                            <div class='quantity'>
                                                <div class='pro-qty'>
                                                    <input type='text' value='".$value['Product_quantity']."' id='update".$key."'>
                                                </div>
                                            </div>
                                        </td>
                                        <td class='total-price first-row'>$".$value['Price'].".00</td>
                                        <td class='close-td first-row'><i class='ti-close' data-id_d='".$value['Product_SKU']."'></i></td>
                                    </tr>";
                                endforeach;

                                echo "</tbody>
                                </table>";?>

                    </div>

                    <?php echo "<div class='row'>
                        <div class='col-lg-4'>
                            <div class='cart-buttons'>
                                <a href='shop.php' class='primary-btn continue-shop'>Continue shopping</a>
                                <a href='shopping-cart.php' class='primary-btn up-cart' id='updatebtn'>Update cart</a>
                            </div>
                            <div class='discount-coupon'>
                                <h6>Discount Codes</h6>
                                <form action='#' class='coupon-form'>
                                    <input type='text' placeholder='Enter your codes'>
                                    <button type='submit' class='site-btn coupon-btn'>Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class='col-lg-4 offset-lg-4'>
                            <div class='proceed-checkout'>
                                <ul>
                                    <li class='subtotal'>Subtotal <span class='st'></span></li>
                                    <li class='cart-total'>Total <span class='ct'></span></li>
                                </ul>
                                <a href='check-out.php' class='proceed-btn'>PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>"; endif;?>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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