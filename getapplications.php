<?php include 'authenticate.php';?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Applications</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/base.css" />
    <script>
        function deleteApplication(id) {
            var confirmed = confirm("Are you sure you want to delete this application?");
            if (confirmed == true) {
                $.post( "deleteApplication.php", {
                    id: id
                }, function( data ) {
                    $( "#" + id ).fadeOut();
                });
            }
        }
    </script>
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <?php include 'boilerplate.html';?>
        <div class="row"><div class="small-centered columns">
        <h1>Applications</h1>
        <p>Logged in as <?php echo $_SESSION['user_name']; ?>. <a href="getapplications.php?logout">Logout</a></p>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>R&eacute;sum&eacute;</th>
                <th>Cover Letter</th>
                <th>Stock Report</th>
                <th>Delete</th>
            </tr>

        <?php
        include 'config.php';
        include 'opendb.php';

        $query = "SELECT id, name, firstName, lastName, email, stockReportName, coverLetterName FROM applications";
        $result = mysql_query($query) or die('Error, query failed');
        if(mysql_num_rows($result) == 0)
        {
            echo "Database is empty <br>";
        }
        else
        {
            while(list($id, $name, $firstName, $lastName, $email, $stockReportName, $coverLetterName) = mysql_fetch_array($result))
            {
                ?>
                <tr id="<?=$id;?>">
                    <td>
                        <p><?=$firstName;?></p>
                    </td>
                    <td>
                        <p><?=$lastName;?></p>
                    </td>
                    <td>
                        <p><?=$email;?></p>
                    </td>
                    <td>
                        <a href="download.php?id=<?=$id;?>&amp;fileType=resume"><?=$name;?></a>
                    </td>
                    <td>
                        <a href="download.php?id=<?=$id;?>&amp;fileType=coverLetter"><?=$coverLetterName;?></a>
                    </td>
                    <td>
                        <a href="download.php?id=<?=$id;?>&amp;fileType=stockReport"><?=$stockReportName;?></a>
                    </td>
                    <td>
                        <div role="button" tabindex="0" class="button alert" onclick="deleteApplication(<?=$id;?>)">Delete</div>
                    </td>
                </tr>
            <?php
            }
        }
        include 'closedb.php';
        ?>

        </table>
            </div></div>
        <a class="exit-off-canvas"></a>
    </div>
</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>