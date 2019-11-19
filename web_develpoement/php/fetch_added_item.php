<?php
if (isset($_SESSION["uid"])) {

    $id = $_SESSION['uid'];
    include('./connect.php');
    $query = "SELECT `brand_name`, `Item_name`, `item_img`, `original_price`, 
        `Item_price` FROM `items` WHERE `s_id` = '$id'";
    $run = mysqli_query($conn, $query);
    $count = mysqli_num_rows($run);
    $data = mysqli_fetch_assoc($run);
    $img_name = $data['item_img'];
    $brand = $data['brand_name'];
    $item_name = $data['Item_name'];
    $original_price = $data['original_price'];
    $set_price = $data['Item_price'];
    ?>
    <html>

    <body>

        <script>
            var selectedRow = null;

            function onFormSubmit() {
                resetForm();
                /* if (validate()) {
                    var formData = readFormData();
                    if (selectedRow == null) insertNewRecord(formData);
                    else updateRecord(formData);
                    
                }*/
            }

            function readFormData() {
                var formData = {};
                formData["item_img"] = <?php echo $img_name; ?>;
                formData["brand"] = <?php echo $brand; ?>;
                formData["ad_title"] = <?php echo $item_name; ?>;
                formData["original_price"] = <?php echo $original_price; ?>;
                formData["set_price"] = <?php echo $set_price; ?>;
                return formData;
            }

            function insertNewRecord(data) {
                var table = document
                    .getElementById("product_List")
                    .getElementsByTagName("tbody")[0];
                var newRow = table.insertRow(<?php echo $count; ?>);
                cell1 = newRow.insertCell(0);
                cell1.innerHTML = data.item_img;
                cell2 = newRow.insertCell(1);
                cell2.innerHTML = data.brand;
                cell3 = newRow.insertCell(2);
                cell3.innerHTML = data.ad_title;
                cell4 = newRow.insertCell(3);
                cell4.innerHTML = data.original_price;
                cell5 = newRow.insertCell(4);
                cell5.innerHTML = data.set_price;
                cell5 = newRow.insertCell(5)
                cell5.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
            }

            function resetForm() {
                document.getElementById("img1").value = "";
                document.getElementById("brand").value = "";
                document.getElementById("ad_title").value = "";
                document.getElementById("original_price").value = "";
                document.getElementById("set_price").value = "";
                selectedRow = null;
            }

            /*function onEdit(td) {
                selectedRow = td.parentElement.parentElement;
                document.getElementById("fullName").value = selectedRow.cells[0].innerHTML;
                document.getElementById("empCode").value = selectedRow.cells[1].innerHTML;
                document.getElementById("salary").value = selectedRow.cells[2].innerHTML;
                document.getElementById("city").value = selectedRow.cells[3].innerHTML;
            }

            function updateRecord(formData) {
                selectedRow.cells[0].innerHTML = formData.fullName;
                selectedRow.cells[1].innerHTML = formData.empCode;
                selectedRow.cells[2].innerHTML = formData.salary;
                selectedRow.cells[3].innerHTML = formData.city;
            }

            function onDelete(td) {
                if (confirm("Are you sure to delete this record ?")) {
                    row = td.parentElement.parentElement;
                    document.getElementById("employeeList").deleteRow(row.rowIndex);
                    resetForm();
                }
            }

            function validate() {
                isValid = true;
                if (document.getElementById("fullName").value == "") {
                    isValid = false;
                    document.getElementById("fullNameValidationError").classList.remove("hide");
                } else {
                    isValid = true;
                    if (
                        !document
                        .getElementById("fullNameValidationError")
                        .classList.contains("hide")
                    )
                        document.getElementById("fullNameValidationError").classList.add("hide");
                }
                return isValid;
            }*/
        </script>
    </body>

    </html>
<?php
} else {
    header("location:loginf.php");
} ?>