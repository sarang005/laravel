<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>

</head>

<body class="container">
<h1 class="text-center">Create New Projects</h1>


<form method="POST" action="/projects">

    {{csrf_field()}}
  
    <input type="text" name="title"  placeholder="Enter Project Title"><br/>
    
  
  
    <input type="text" name="description"  placeholder="Enter Project Descreption"><br/>
  
  
  <button type="submit" >Submit</button>
</form>







</body>

</html>
