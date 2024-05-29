<?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $newAction ="";
        }else{
            $newAction = "displayProductByBand";
        }
        
        ?>






<form method="post" action="<?php echo $newAction ?>">
<h1>Select Band</h1> 
    <div class="mb-3">
            <label for="" class="form-label">Select Band</label>
            <select
                class="form-select form-select-lg"
                name="selectBand"
                id=""
            >
                <option value="Ibuprofen">Ibuprofen</option>
                <option value="ALPRAZOLAM">ALPRAZOLAM</option>
                <option value="Acetaminophen">Acetaminophen</option>
                <option value="ibuprofen">ibuprofen</option>
            </select>
        </div>
        
        <button
            type="submit"
            class="btn btn-primary"
            name ="btSearch"
        >
            Submit
        </button>
        <?php if(isset($data["Products"])){
            echo "<table>";
            echo "<tbody>";
            echo "<thead>";
            echo "<tr>";
            $fieldNames = $data["Products"]->fetch_fields();
            foreach ($fieldNames as $field){
                echo "<th class =\"text-center\">".strtoupper($field->name)."</th>";
            }
            echo "</tr>";
            echo "</thead>";
            while ($row = mysqli_fetch_array($data["Products"])){
                echo "<tr>";
                echo "<td class=\"text-left\">".$row["id"]."</td>";
                echo "<td class=\"text-left\">".$row["pid"]."</td>";
                echo "<td class=\"text-left\">".$row["pname"]."</td>";
                echo "<td class=\"text-left\">".$row["company"]."</td>";
                echo "<td class=\"text-left\">".$row["year"]."</td>";
                echo "<td class=\"text-left\">".$row["band"]."</td>";
                echo "<td class=\"text-left\">" . '<img src="' . $row["pimage"] . '" alt = "Image">' . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
        ?>
        </form>
        

