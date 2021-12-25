<!DOCTYPE html>
<html>
<head>
  <title>Constructor</title>
  <link rel="stylesheet"  href="design.css">
</head>
<body style="background-image: url(constructorback.jpg);">
  <div class="constructorbord">
        <div class="constructorintro">
          <h1>INTRODUCE YOURSELF!</h1>
          <form action="pagegenerator.php">
          <div class="constructorintro2">
                <div class="left">
              <label for="greet">Greet:</label><br>
              <input type="text" name="greet"><br><br>
              <label for="description">Description:</label><br>
              <textarea name="description" rows="3" cols="50"></textarea>
            </div>
          <div class="right">
             <label for="instagram"><img src="instagram.png"></label>
            <input type="url" name="instagram"><br><br>
            <label class="facebook"><img src="facebook.png"></label>
            <input type="url" name="facebook"><br><br>
            <label for="twitter"><img src="twitter.png"></label>
            <input type="url" name="twitter">
          </div>  
          </div>
          <div class="themes">
            <select >
              <option >Choose the theme</option>
              <option value="basic">Basic theme</option>
              <option value="classical">Classical theme</option>
              <option value="dreamy">Dreamy theme</option>
            </select>
          </div>
         <div class="submittion">
          <input type="submit" name="submittion" value="→">
        </div>
            </form>
          
       </div>
  </div>

</body>
</html>
