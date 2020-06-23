<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datepicker</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/my.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <style>
        div#out{width:80%;margin:200px 400px;padding:50px 50px;}
        div#in{width:60%;padding:20px 20px;background:lightgrey;}
    </style>
    <script>
        $(document).ready(function(){
            var minDate=new Date();
            $("#depart").datepicker({
                showAnim: 'drop',
                numberOfMonth: 1,
                minDate: 'minDate',
                dateFormat: 'yy/mm/dd',
                onClose: function(selectDate){
                    $('#return').datepicker("option","minDate",selectDate)
                }
            });
            $("#return").datepicker({
                showAnim: 'drop',
                numberOfMonth: 1,
                minDate: 'minDate',
                dateFormat: 'yy/mm/dd',
                onClose: function(selectDate){
                    $('#return').datepicker("option","minDate",selectDate)
                }
            });
        });
    </script>
</head>
<body>
    <div id="out">
    <div id="in">
    <form id="myForm">
        <input type="text" name="" id="origin" placeholder="Honnan?">
        <input type="text" name="" id="destination" placeholder="Hova?">
        <input type="text" name="" id="depart" placeholder="Indulás">
        <input type="text" name="" id="return" placeholder="Érkezés">
        <input type="text" name="" id="email" placeholder="E-mail">
        <select id="seat">
            <option>Személy</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
        </select>
        <input type="submit" value="Keresés">
    </form>
    </div>
    </div>
</body>
</html>