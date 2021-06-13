<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="container" style="padding-top: 30px">

            <div class="row">
                <div class="col-sm-4">
                    <form action="/search" method="GET" role="search">
                        <div class="input-group">
                            <input type="search" name="search" class="form-control">
                            <span class="input-group-prepend">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
                

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            @php
                                  $post_length = count($post);       
                            @endphp
                     
                            @for ($i = 0; $i < $post_length; $i++)
                                <p>{{ $post[$i]->description }}</p>

                                @php
                                   $comment_length =count($post[$i]->comment);       
                                @endphp
                               
                                @for ($j = 0; $j < $comment_length; $j++)
                                   <p style="padding-left:50px">{{ $post[$i]->comment[$j]->message }}</p>
                                @endfor
                                
                            @endfor
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>