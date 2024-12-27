<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>multiplication_table</title>
    <style>
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">multiplication_table</h2>

<table>
    <tr>
        <th>*</th>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <th><?php echo $i; ?></th>
        <?php endfor; ?>
    </tr>
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <tr>
            <th><?php echo $i; ?></th>
            <?php for ($j = 1; $j <= 10; $j++): ?>
                <td><?php echo $i * $j; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>
