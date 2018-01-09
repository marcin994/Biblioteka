<?php include("head.php"); ?>
<body>  
      <div id="wrapper"> 
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-8">
                    <div class="jumbotron">
                        <h1>Biblioteka</h1>
                        <p>Zaloz swoje konto</p>
                      <p><a class="btn btn-primary btn-lg" role="button"disabled="disabled">Zamknieta Beta</a></p>
                    </div>
      
                  </div>
          
                 <div class="col-xs-6 col-md-4">
                      <div class="jumbotron">
                          
                             <h4> Zaloguj sie</h4> 
                        
                       <form method="post"action="login.php" class="form">
                 
                          <input type="text" name="login" placeholder="login" class="form-control" />
                          <input type="password" name="password" placeholder="hasło" class="form-control"/><p></p>
                          <input type="sumbit" class="btn btn-primary" value="Zaloguj się" name="login"/><p></p>
                          <input type="sumbit" class="btn btn-primary" value="Zarejestruj się" name="register"/>
                        </form> 
                     </div>
          </div>
      </div>
</body>
</html>