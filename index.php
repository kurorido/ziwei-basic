<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        @page {
            margin: 1cm;
        }

        body {
            font-family: DFKai-sb;
            font-size: 16pt;
            padding: 1.3cm 0 0.3cm;
        }

        table {
            width: 100%;
            border: 2px solid black;
            border-spacing: 0;
            border-collapse: separate;
            height: 24cm;
            table-layout:fixed;
        }

        td {
            border: 1px solid black;
            padding: 0.8rem;
        }

        td > div {
            width: 100%;
            height: 100%;
            position: relative;
        }

        canvas {
            width: 100%;
            height: 100%;
        }

        .stars {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-start;
        }

        .star-td {
            width: 4cm;
            height: 4cm;
        }

        .star {
            writing-mode: vertical-lr;
            font-weight: bold;
            width: 28px;
        }

        .time {
            position: absolute;
            bottom: 0;
        }

        .game {
            position: absolute;
            bottom: 0;
        }

        .birthday {
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: space-between;
            align-items: baseline;
        }

        .birthday div {
            writing-mode: vertical-lr;
        }

        .name {
            writing-mode: vertical-lr;
        }

        .center-layout {
            display: flex;
            justify-content: space-between;
        }

        .fate {
            writing-mode: vertical-lr;
            /* align-self: flex-end; */
        }

    </style>
</head>
<body>

    <?php
        include './fate.php';
    ?>

    <table>
        <tbody>
            <tr>
                <td rowspan="1" colspan="4"></td>
            </tr>
            <tr>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '巳'); ?>
                </td>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '午'); ?>
                </td>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '未'); ?>
                </td>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '申'); ?>
                </td>
            </tr>
            <tr>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '辰'); ?>
                </td>
                <td rowspan="2" colspan="2">
                    <div class="center-layout">
                        <div class="fate">紫微在<?php echo $time_start; ?></div>
                        <div class="game">局</div>
                        <div class="name">
                            姓名：
                        </div>
                        <div class="birthday">
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;命</div>
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年</div>
                            <div>&nbsp;&nbsp;月</div>
                            <div>&nbsp;&nbsp;日</div>
                            <div>&nbsp;&nbsp;時</div>
                        </div>
                    </div>
                </td>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '酉'); ?>
                </td>
            </tr>
            <tr>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '卯'); ?>
                </td>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '戌'); ?>
                </td>
            </tr>
            <tr>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '寅'); ?>
                </td>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '丑'); ?>
                </td>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '子'); ?>
                </td>
                <td class="star-td" rowspan="1" colspan="1">
                    <?php print_cell($stars, '亥'); ?>
                </td>
            </tr>
            <tr>
                <td rowspan="1" colspan="4"></td>
            </tr>
        </tbody>
    </table>

</body>
</html>