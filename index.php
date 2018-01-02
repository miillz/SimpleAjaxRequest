<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script>
        function showSuggestion(str){
            console.log(str);
            if(str.length == 0){
                document.getElementById('output').innerHTML = '';
            }else{
                //Ajax Request
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("output").innerHTML = this.responseText;
                  }
                };
                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();  
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
             Search User: <input type="text" class= "form-control" onkeyup= "showSuggestion(this.value)">
        </form>
        <p> Suggestions: <span id="output" style="font-weight:bold"></span></p>
        
    </div>
    
    
</body>

</html>