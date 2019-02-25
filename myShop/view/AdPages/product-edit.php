
    <style type="text/css">
        .pr{
            width: 100px;
            height: 100px;
        }
    </style>
    <table border="0" style="width: 100%; margin: 0 auto; text-align: center;" class="table-bordered table-striped">
        <thead>
        <tr bgcolor="#CC3300" style="color:#FFFFFF; font-weight:bold; ">           
            <td>Mã sản phẩm</td>
            <td>Tên sản phẩm</td>
            <td>Giá bán</td>
            <td>Size</td>
            <td>Số lượng</td>
            <td>Kho hàng</td>
            <td>Giới tính</td>
            <td>Tình trạng</td>
            <td>Ảnh</td>
            <td>Action</td>
        </tr>
        </thead>
        <?php 

            error_reporting(1); 
            $productlist = "SELECT * FROM products"; 
            $result = mysqli_query($connect,$productlist);
            if ($result) {       
                while($row = mysqli_fetch_assoc($result))
                {
                    $str = "<tr>";
                    $str .= "<td>".$row['id']."</td>";
                    $str .= "<td>".$row['pname']."</td>";
                    $str .= "<td>".number_format($row['price'])."đ</td>";
                    $str .= "<td>".$row['description']."</td>";
                    $str .= "<td>".$row['quantity']."</td>";
                    $str .= "<td>".$row['category_id']."</td>";
                    $str .= "<td>".$row['gender']."</td>";
                    $str .= "<td>".$row['status']."- sale ".$row['sale']."%</td>";
                    $str .= "<td><img class='pr' src=".$row['img']."></td>";
                    $str .= "<td><a href='update.php?id=". $row["id"] . "'><span class='glyphicon glyphicon-pencil'>&nbsp;</span></a>
                    <a href='deleteProd.php?id=". $row["id"] . "'><span class='glyphicon glyphicon-trash'>&nbsp;</span</a></td>";
                    $str .= "</tr>";
                    echo $str;
                }
            }
        ?>        
    </table>



