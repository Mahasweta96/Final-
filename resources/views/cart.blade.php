<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Cloud Beans</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

          

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            
  <ul class="navbar-nav m-auto">
    <li class="nav-item m-auto {{ Request::path() === '/' ? 'current page item' : '' }} "><a class="nav-link" href="/" accesskey="1" title="">Home</a></li>
    <li class="nav-item m-auto {{ Request::path() === 'Type' ? 'current page item' : '' }} "><a class="nav-link" href="type"accesskey="2" title="">Type</a></li>
    <li class="nav-item m-auto {{ Request::path() === 'Product' ? 'current page item' : '' }} "><a class="nav-link" href="product"accesskey="3" title="">Product</a></li>
    <li class="nav-item m-auto{{ Request::path() === 'Contact' ? 'current page item' : '' }} "><a class="nav-link" href="contact" accesskey="4" title="">Contact</a></li>
  </ul>


            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Cream Frappuccino</td>
                            <td>In stock</td>
                            <td><select class="form-control" id="items">
                                <option value="item-1">1</option>
                                <option value="item-2">2</option>
                                <option value="item-3">3</option>
                                <option value="item-4">4</option>
                                </select>
                            </td>
                            <td class="text-right">Rs/-560</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Caramel cream Frappuccino</td>
                            <td>In stock</td>
                            <td><select class="form-control" id="items">
                                <option value="item-1">1</option>
                                <option value="item-2">2</option>
                                <option value="item-3">3</option>
                                <option value="item-4">4</option>
                                </select>
                            </td>
                            <td class="text-right">RS/-230</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Hazelnut Latte</td>
                            <td>In stock</td>
                            <td><select class="form-control" id="items">
                                <option value="item-1">1</option>
                                <option value="item-2">2</option>
                                <option value="item-3">3</option>
                                <option value="item-4">4</option>
                                </select>
                            </td>
                            <td class="text-right">Rs/-986</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">Rs/-1776</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">Rs/-25</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>Rs/-1801</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a class="nav-link" href="/"><button class="btn btn-block btn-light">Continue Shopping</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a class="nav-link" href="/invoice"><button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    In the year 2020, Our vouyage from the bean to the cup began. Our mission to give a genuinely global affair and bring a really international taste to our customers, drove us to make the brand "Cloud Beans". Leading the indian coffee culture "Cloud Beans" was a chance to find both the love for coffee and also the art of making it according to the preferred taste of our customers.
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i>Cloud Beans</li>
                    <li><i class="fa fa-envelope mr-2"></i> mahasweta08@gmail.com</li>
                    <li><i class="fa fa-phone mr-2"></i> +91 8017847819</li>
                    <li><i class="fa fa-print mr-2"></i> +91 7980668057</li>
                </ul>
            </div>
          
        </div>
    </div>
</footer>