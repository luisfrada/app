<?php
//archivo de configuración global (composer)
define('__ID', 'ID');
?>
<?php
//archivo de consultas del modulo 
$conn = new PDO('mysql:host=localhost;dbname=temporal', 'root');
$resp = $conn->query('SELECT * FROM EMPLEADOS');
?>

<ul>
    <?php foreach ($resp as $row) { ?>
        <li>
            <a onclick="putCookie('<?= __ID ?>', '<?= $row['nro_emp'] ?>')" 
               href="//app-b.bdp.dev/detalle.php">Ver</a>
            <?= $row['nro_emp'] ?>: 
            <?= $row['nombres'] ?> <?= $row['apellidos'] ?>
        </li>
    <?php } ?>
    <ul>

        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <script>
                        function putCookie(name, value) {
                            console.log('putCookie(', name, '=', value, ')');
                            Cookies.set(name, value, {expires: 0.00009,
                                path: '',
                                domain: 'bdp.dev'});
                        }
        </script>


