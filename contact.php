<?php include ('includes/header.php'); ?>
<link rel="stylesheet" href="assets/css/contact.css">

<!-- formulaire de contact -->

<div class="container-fluid">
    <div class="row-fluid">


        <div class="col-md-offset-4 col-md-4" id="box">
            <h2>Contactez nous!</h2>
            <p>Yo Man ! Communique ici avec nous si tu as des questions ou des suggestions, on te répond au plus vite.</p>

            <hr>

            <form class="form-horizontal" action=" " method="" id="contact_form">
                <fieldset>
                    <!-- Form Name -->

                    <!-- Text input-->

                    <div class="form-group">

                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="first_name" placeholder="Rasta Name" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">

                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="Rasta Mail" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">

                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="phone" placeholder="Rasta Phone number" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">

                        <div class="col-md-12 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="comment" placeholder="Ton message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-warning pull-right">Let's go<span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include ('includes/footer.php'); ?>
