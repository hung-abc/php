<!doctype html>
<?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $newAction ="";
        }else{
            $newAction = "./insertProduct";
        }
        
        ?>

<form method="post" enctype="multipart/form-data" action="<?php echo $newAction ?>">
<?php
if(isset($data["result"])){
    if($data["result"]){
        echo "Thêm mới thành công.";
    }
    else{
        echo "Thêm mới thất bại";
    }
} 
?>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
        </header>
        <main>
            <div class="mb-3">
                <label for="" class="form-label">ID product</label>
                <input
                    type="text"
                    class="form-control"
                    name="id"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Product Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="pname"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Company</label>
                <input
                    type="text"
                    class="form-control"
                    name="company"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Select Band</label>
                <select
                
                    class="form-select form-select-lg"
                    name="band"
                    id=""
                >
                    <option selected>Select one</option>
                    <option value="	Brucella Remedy">Brucella Remedy</option>
                    <option value="	Western Family">Western Family</option>
                    <option value="	Ibuprofen">Ibuprofen</option>
                </select>
            </div>
            <div class="mb-3">
            <label for="" class="form-label">Select Year</label>
            <select
                class="form-select form-select-lg"
                name="year"
                id=""
            >
            <?php
            for($year = 2010;$year<=2020;$year++){
                echo '<option value="'.$year.'">'.$year.'</option>';
            }
            ?>
            </select>
        </div>
        <div>
            <label for="" class="form-label">choose image:</label>
                <input type="file" name="image" class="form-control">
</div>
        
  <button
    type="submit"
    name="btnInsert"
    class="btn btn-primary"
  >
    Submit
  </button>
  
</form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
