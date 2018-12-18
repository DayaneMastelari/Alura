<html>
    <header>
        <meta charset="UTF-8">
        <title>FizzBuzz</title>
        <link href="css/bootstrap.css" rel="stylesheet">
    </header>
    <body>
        <div class="container">
            <h1>Fizz Buzz</h1>
            
            <form action="usuario-post.php" method="post">            
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Range</label>
                            </div>
                            <div class="col-md-6">                            
                                <input type="number" name="numero" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md6">
                    <button class="btn btn-primary" type="submit">Fizz Buzz</button>
                </div>                                                
            </form>
        </div>        
    </body>
</html>