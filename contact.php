<?php 
    include('include/header.php');
    include('include/sendmail.php');
?>
    <section data-bs-version="5.1" class="contacts2 cid-tDjpr5VdMc" id="contacts2-13">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Contact Us</strong>
                </h3>

            </div>
            <div class="row justify-content-center mt-4">
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Phone</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="tel:9102025559200" class="text-primary">91 020 25559200</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Email</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="mailto:principal@gppune.ac.in" class="text-primary">principal@gppune.ac.in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="form5 cid-tDjraNpFtx" id="form5-14">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Get in Touch</strong></h3>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                        <div class="row">
                            <?php if(isset($_SESSION['response_msg']) && isset($_SESSION['response_msg_type'])){ ?>
                                <div class="col-12">
                                    <div class="alert alert-<?php echo $_SESSION['response_msg_type']; ?>">
                                        <?php echo $_SESSION['response_msg']; ?>
                                    </div>
                                </div>
                            <?php 
                                unset($_SESSION['response_msg']);
                                unset($_SESSION['response_msg_type']);
                            } ?>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                                <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-14">
                            </div>
                            <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                                <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-14">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="subject">
                                <input type="text" name="subject" placeholder="Subject" data-form-field="subject" class="form-control" value="" id="url-form5-14">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="textarea">
                                <textarea name="message" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-14"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                <button type="submit" name="send" class="btn btn-primary display-4">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php 
    include('include/footer.php');
?>