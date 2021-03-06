<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url(); ?>static/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>static/css/sidebar.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<?php
$this->load_fragment('navbar');
?>
<body style="padding: 50px;">
<div id="wrapper" class="toggled">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">

            <li>
                <a href="<?php echo base_url(); ?>missing/">
                    Missing People
                </a>
            </li>

            <li>
                <a href="<?php echo base_url(); ?>organisations/">
                    Organisations
                </a>
            </li>

            <li>
                <a href="<?php echo base_url(); ?>camp/">
                    Camps
                </a>
            </li>

            <li>
                <a href="<?php echo base_url(); ?>assets/">
                    Assets
                </a>
            </li>

            <li>
                <a href="<?php echo base_url(); ?>requests/">
                    Requests
                </a>
            </li>

        </ul>
    </div>

    <div id="page-content-wrapper" style="background-color: #ffffff; padding-left: 20%; padding-right: -10%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="page-header">
                        <h1 style="text-align: center;">
                            Search a Missing Person<br/>
                        </h1>
                        <br />
                        <form action="" method="POST">
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Common details about the person</b>
                                        <div class="btn btn-info" id="show1" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody1">
                                        <label for="fname">First name<sup style="color: #FF0000; font-size: medium">*<sup> </label>
                                        <input id="fname" type="text" class="form-control" name="person[fname]" placeholder="Enter the First Name" required /><br>
                                        <label for="lname">Last name </label>
                                        <input type="text" class="form-control" placeholder="Enter the Last Name" id="lname" name="person[lname]" /><br>
                                        <label for="dob">Date of birth </label>
                                        <input type="text" placeholder="Enter the DOB (yyyy-mm-dd)" class="form-control" id="dob" name="person[dob]" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" /><br>
                                        <label class="sr-only" for="gender">Gender<sup style="color: #FF0000; font-size: medium">*<sup> </label>
                                        <div class="dropdown">
                                            <select class="dropdown-header col-lg-12" id="gender" name="person[gender]" required>
                                                <option class="dropdown-toggle" value="" disabled selected>Select gender</option>
                                                <option class="dropdown-header" value="F">Female</option>
                                                <option class="dropdown-header" value="M">Male</option>
                                                <option class="dropdown-header" value="O">Other</option>
                                            </select><br>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Contact details of missing person</b>
                                        <div class="btn btn-info" id="show2" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody2">
                                        <label for="phone_no">Phone number </label>
                                        <input placeholder="Enter the Phone Number" class="form-control" id="phone_no" name="person_contact[phone_no]" /><br>
                                        <label for="email">Email </label>
                                        <input class="form-control" type="email" placeholder="Enter the Email" id="email" type="email" name="person_contact[email]" /><br>
                                    </div>
                                </div>
                            </fieldset>
                            <!--TODO: search based on following properties too-->
                            <!--fieldset>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: large; padding-bottom: 15px">
                                        <b>Additional information about missing person</b>
                                        <div class="btn btn-info" id="show3" style="float: right">Hide</div>
                                    </div>
                                    <div class="panel-body" id="panelBody3">
                                        <label class="sr-only" for="body_marks">Body marks: </label><br>
                                        <textarea id="body_marks" class="form-control" placeholder="Enter Body Marks" name="person_detail[body_marks]"></textarea><br>
                                        <label class="sr-only" for="height">Height: </label>
                                        <input id="height" placeholder="Enter Height" class="form-control" name="person_detail[height]" /><br>
                                        <label class="sr-only" for="weight">Weight: </label>
                                        <input class="form-control" placeholder="Enter Weight" id="weight" name="person_detail[weight]" /><br>
                                        <label class="sr-only" for="hair">Hair: </label>
                                        <input id="hair" placeholder="Enter Hair Type/Color" class="form-control" name="person_detail[hair]" /><br>
                                        <label class="sr-only" for="eye_color">Eye color: </label>
                                        <input id="eye_color" class="form-control" placeholder="Enter Eye color" name="person_detail[eye_color]" /><br>
                                        <label class="sr-only" for="last_seen">Last seen (When, where, condition): </label><br>
                                        <textarea id="last_seen" placeholder="Enter Last Seen Location" class="form-control" name="person_detail[last_seen]"></textarea><br>
                                    </div>
                                </div>
                            </fieldset-->
                            <div class="col-xs-8 col-sm-4">
                            </div>
                            <div class="col-xs-8 col-sm-4" style="padding-top: 12px">
                                <input class="btn btn-lg btn-success btn-block" style="width: auto" type="submit" name="search" value="Search for this person" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted" style="text-align: center">
            Developed By Team Saathi <br/>
            Powered By <a href="https://github.com/nisargjhaveri/saathi">Saathi</a>
        </p>
    </div>
</footer>

<!-- Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $("#show1").click(function(e) {
        e.preventDefault();
        $("#panelBody1").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });

    $("#show2").click(function(e) {
        e.preventDefault();
        $("#panelBody2").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });

    $("#show3").click(function(e) {
        e.preventDefault();
        $("#panelBody3").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });

    $("#show4").click(function(e) {
        e.preventDefault();
        $("#panelBody4").toggle("display");
        $(this).text(($(this).text() == 'Hide') ? 'Show More' : 'Hide');
    });

    $(function() {
        $( "#dob" ).datepicker({
            dateFormat: "yy-mm-dd"
        });
    });

</script>

</body>
</html>
