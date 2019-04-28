<?php
pg_connect('host=localhost user=postgres password=digitalocean',PGSQL_CONNECT_ASYNC);
pg_select('postgres');
?>

    <form action="" method="post">
        <table width="50%">
            <tr>
                <td>User</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="text" name="password"></td>
            </tr>
        </table>
        <input type="submit" value="OK" name="s">
    </form>

<?php
if($_POST['s']){
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $re = pg_query("select * from actor a where a.first_name LIKE '$user%'");

    if(pg_num_rows($re) == 0){
        echo '0';
    }else{
        echo '1';
    }
}
?>