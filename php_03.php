<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <?php $multiply = 0; ?>
            <h1>สูตรคูณแม่ <?php if(isset($_REQUEST['number'])){echo $_REQUEST['number']; $multiply = $_REQUEST['number'];}?></h1>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="numberInput" class="form-label">แม่สูตรคูณ</label>
                    <input name="number" type="number" class="form-control" id="numberInput" placeholder="กรุณาระบุแม่สูตรคูณ">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            <?php
            if($multiply != null){
            for($i=1;$i<=12;$i++){
            ?>
            <div class="row">
                <div class="h2 col text-end"><?php echo $multiply." x ".$i; ?></div>
                <div class="h2 col text-start">= <?php echo $multiply * $i; ?></div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </body>
</html>