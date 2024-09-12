<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>
<style>
     td {
            width: 40px;
            height: 40px;
        }
        table {
            border: 1px solid black;
            border-spacing: 0;
        }
        .black{
            background-color: black;
        }
</style>
<body>
    <table>
    <script>
        const table = document.getElementsByTagName('table') [0];
        let content = '' ;
        for (let i = 0; i < 8; i++) {
            content += '<tr>';
        for (let j = 0; j < 8; j++) {
            if ((i+j) % 2 == 0) {
            content += '<td class="black">"></td>';
        }
        else content += '<td></td>'
    }
        content += '</tr>';
        
    }
        table.innerHTML=content;
    </script>
    </table>
</body>
</html>