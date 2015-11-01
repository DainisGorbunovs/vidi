
  <p class="greeting">Find out how you can best help your local authority!</p>
  <form action="index.php" method="post">
	  <input name="name" type="text" onkeyup="showHint(this.value)" placeholder="Your county" required autofocus>
	  <input type="submit" class="btn-login">
  </form>
  <p class="hint">Suggestions: <span id="txtHint"></span></p>