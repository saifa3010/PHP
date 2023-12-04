<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <header style="margin: bottom 50px;">
    <?php include("headar.php");?>

    </header>

    <main style="margin-top: 50px;">
    <div id="content">
        <?php
        $page = isset($_GET['main']) ? $_GET['main'] : 'default';

        switch ($page) {
            case 'main1':
                include("main1.php");
                break;
            case 'main2':
                include("main2.php");
                break;
            default:
                include("main1.php");
                break;
        }
        ?>
    </div>
    </main>
    

    <footer style="margin-top: 50px;">
    <?php include("footer.php") ?>
    </footer>
</body>
</html>