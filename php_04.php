<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <?php $start = null; $end = null;?>
            <h1>เลขคู่ - คี่, แบบระบุตัวเลขเริ่มต้น - สิ้นสุด</h1>
            <?php if(isset($_REQUEST['s-number'])){$start = $_REQUEST['s-number'];}?>
            <?php if(isset($_REQUEST['e-number'])){$end = $_REQUEST['e-number'];}?>
            <form method="post" action="" novalidate>
                <div class="mb-3 row">
                    <div class="col-3">
                        <label for="numberInput" class="form-label">ตัวเลขเริ่มต้น</label>
                        <input name="s-number" type="number" class="form-control" id="numberInput" placeholder="กรุณาระบุตัวเลขเริ่มต้น">
                    </div>
                    <div class="col-3">
                        <label for="numberInput" class="form-label">ตัวเลขสิ้นสุด</label>
                        <input name="e-number" type="number" class="form-control" id="numberInput" placeholder="กรุณาระบุตัวเลขสิ้นสุด">
                    </div>    
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            <?php
            if($start < $end){
            for($i=$start;$i<=$end;$i++){
                if($i%2==0){
                    $OddOrEven = "คู่";
                }else{
                    $OddOrEven = "คี่";
                }
            ?>
            <div class="row">
                <div class="h2 col text-end"><?php echo $i; ?></div>
                <div class="h2 col text-start">เป็นเลข <?php echo $OddOrEven; ?></div>
            </div>
            <?php
                }
            }
            ?>
            <?php
            if($start > $end){
            for($i=$start;$i>=$end;$i--){
                if($i%2==0){
                    $OddOrEven = "คู่";
                }else{
                    $OddOrEven = "คี่";
                }
            ?>
            <div class="row">
                <div class="h2 col text-end"><?php echo $i; ?></div>
                <div class="h2 col text-start">เป็นเลข <?php echo $OddOrEven; ?></div>
            </div>
            <?php
                }
            }
            ?>
            <?php
            if($start == $end && $start != null && $end != null){
                if($start%2==0){
                    $OddOrEven = "คู่";
                }else{
                    $OddOrEven = "คี่";
                }
            ?>
            <div class="row">
                <div class="h2 col text-end"><?php echo $start; ?></div>
                <div class="h2 col text-start">เป็นเลข <?php echo $OddOrEven; ?></div>
            </div>
            <?php
                }
            ?>
        </div>
    </body>
</html>