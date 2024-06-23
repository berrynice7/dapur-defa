<!-- nampilin carousel -->
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="bg-1">
        <div class="carousel-caption text-left">
            <h1 class="display-2">Hungry?!</h1>
            <h3>Good, we are here to serve you</h3>
            <a href="<?php echo base_url() . 'paket' ?>" class="btn btn-primary btn-lg">Lihat Paket</a>
        </div>
    </div>
</div>
</div>
<div class="container-fluid padding">
    <div class="row text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Easy 3 Steps To Follow</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">The easiest way to your food. Food Ordering System provides fresh delivery
                with in the 30 minutes and provide free food if order is not on time. So don't wait and start ordering
                right now!</p>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-utensils"></i>
            <h3>Choose Your Package</h3>
            <p>Browse through the available catering packages and select the one that best suits your event.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bullseye"></i>
            <h3>Fill Out the Order Form</h3>
            <p>Complete the order form with the necessary details!</p>
        </div>
        <div class="col-sm-12 col-md-4">
            <i class="fas fa-clipboard-check"></i>
            <h3>Confirm and Pay</h3>
            <p>Review your order details to ensure everything is correct. Once confirmed, proceed to the payment section to complete your order.</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<section id="contact-us" class="container shadow my-4 p-4">
    <!--Section heading-->
    <?php if ($this->session->flashdata('msg') != ""): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    <?php endif ?>
    <h2 class="text-center my-2 font-weight-bold">Contact Us</h2>
    <div class="text-center">
        <a class="text-center" href="whatsapp://send?text=Hello&phone=+628********1">Hubungi Saya</a>
    </div>


</section>


</script>