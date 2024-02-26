<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact me</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/styles.css">
        <script src="script/script.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contact me</h2>
            </div>
            <form id="contact-form" method="post" action="" role="form">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="firstname" class="form-label">First name <span class="blue">*</span></label>
                        <input id="firstname" type="text" name="firstname" class="form-control" placeholder="your First name" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="name" class="form-label">Name <span class="blue">*</span></label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Your name " value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-label">Email <span class="blue">*</span></label>
                        <input id="email" type="text" name="email" class="form-control" placeholder="Your Email" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input id="phone" type="tel" name="phone" class="form-control" placeholder="Your phone number" value="">
                        <p class="comments"></p>
                    </div>
                    <div>
                        <label for="message" class="form-label">Message <span class="blue">*</span></label>
                        <textarea id="message" class="form-control" name="message" placeholder="Votre Message" style="height: 100px" ></textarea>
                        <p class="comments"></p>
                    </div>
                    <div>
                        <p class="blue"><strong>* This informations are required.</strong></p>
                    </div>
                    <div>
                        <input type="submit" class="button1" value="Send">
                    </div>    
                </div>
            </form>
        </div>
    </body>
</html>