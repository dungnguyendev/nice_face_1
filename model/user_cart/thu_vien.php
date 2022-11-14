<?php require_once('../connect.php')
function showGioHang()
{
    $ttgh = "";
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        $sum = 0;
        if (sizeof($_SESSION['giohang']) > 0) {
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][2];
                $sum += $tt;
                $ttgh .= '<tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $_SESSION['giohang'][$i][1] . '</td>
                            <td><img class="image012" src="' . $_SESSION['giohang'][$i][0] . '" alt=""</td>
                            <td>' . number_format($_SESSION['giohang'][$i][2], 0, ",", ".") . '</td>
                            <td>' . $_SESSION['giohang'][$i][3] . '</td>
                            <td>' . number_format($tt, 0, ",", ".") . '</td>
                            <td><a class="delete_01" href="../user_giohang/giohang.php?delete_sp=' . $i . '">Xoá</td>
                        </tr>';
            }
            $ttgh .= '<tr>
                        <td colspan="5">Tổng tiền</td>
                        <td colspan="2">' . number_format($sum, 0, ",", ".") . '</td>
                    </tr>';
            // } else {
            //     $ttgh.= '<tr>
            //             <td colspan="7">Bạn hay mua sắm đi nào !</td>
            //         </tr>';
        }
    }
    return $ttgh;
}


?>
