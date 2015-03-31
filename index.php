<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title>Seattle Grace In Your Face</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <?php
    /**
     * Created by PhpStorm.
     * User: Lori DK
     * Date: 3/24/2015
     * Time: 9:11 PM
     */

    require_once('person.php');

    ?>
    <script>
    $(document).ready(function(){
        $("p").hide();

        $("#RW").click(function(){
            $("#RW-show").toggle();
        });

        $("#DS").click(function(){
            $("#DS-show").toggle();
        });

        $("#MB").click(function(){
            $("#MB-show").toggle();
        });
    });
    </script>

</head>
<body>

<?php
// these ages are crazy. Dr Weber 161!? He's wise enough but looks fantastic! Derek and Miranda are for sure older than that. Have you seen Derek lately?

$employee1 = new manager("Richard Webber", 161);
$employee2 = new supervisor("Derek Shepherd", 32);
$employee3 = new supervisor("Miranda Bailey", 32);
$employee4 = new generalLabourer("Meredith Grey", 30);
$employee5 = new generalLabourer("Christina Yang", 29);
$employee6 = new generalLabourer("Alex Karev", 30);
$employee7 = new generalLabourer("Lexie Grey", 24);

// Dr Weber is THE boss!
$employee1->manageEmployee($employee2);
$employee1->manageEmployee($employee3);

$employee3->superviseEmployee($employee5);
$employee3->superviseEmployee($employee7);

$employee2->superviseEmployee($employee4);
$employee2->superviseEmployee($employee6);
?>
<header>
    <h2>Click image to see info</h2>
</header>


<div class="container-fluid">
    <section>
    <div class="col-sm-4">
        <img src="images/Richard-Webber.jpg" id="RW" alt="Richard Webber"/>
        <p id="RW-show">
        <?php
        $employee1->getEmployeesManaged();
        ?>
        </p>
    </div>

    <div class="col-sm-4">
        <img src="images/Derek-Shepherd.jpg" id="DS" alt="Derek Shepherd">
        <p id="DS-show">
        <?php
        $employee2->getEmployeesSupervised();
        ?>
        </p>
    </div>
    <div class="col-sm-4">
        <img src="images/miranda-bailey.jpg" id="MB" alt="Miranda Bailey">
        <p id="MB-show">
        <?php
        $employee3->getEmployeesSupervised();
        ?>
        </p>
    </div>
    </section>
</div>

</body>
</html>