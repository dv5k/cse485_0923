<!DOCTYPE html>
<style>
    table {
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
    }
</style>
<table>
    <tr>
        <th>Tên khoá học</th>
    </tr>
    <?php
        $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
        foreach ($arrs as $item){
            echo "<tr>";
            echo "<td>" . $item . "</td>";
            echo "</tr>";
        }
    ?>
</table>
</html>

