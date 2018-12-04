
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    
        @import url(https://fonts.googleapis.com/css?family=Inconsolata);
        html,
        body {
        background: rgb(22, 22, 22);
        font-family: 'Inconsolata', sans-serif;
        }
        .wrap {
        top: 50%;
        left: 50%;
        width: 400px;
        height: 200px;
        margin-left: -200px;
        margin-top: -100px;
        position: absolute;
        }
        code {
        color: white;
        }
        span.blue {
        color: #48beef;
        }
        span.comment {
        color: #7f8c8d;
        }
        span.load {
        color: #f39c12;
        }

    </style>

    <title>Erreur 404</title>
</head>
<body>

<!-- *This is a css translation of a 404 image of the site: http://retromodular.com/ -->

<div class="wrap">
<h1><a href="<?= home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
  <div class="404">
    <pre><code>
      (<span class="blue">function</span>( inDevelopment ) {
           <span class="blue">function</span> launch() {
              <span class="blue">if</span>( inDevelopment ) {
                  <span class="blue">return</span>;
              }
              <span class="comment">//TODO</span>
        }
      window.addEventListner( <span class="load">'load'</span>, launch );
      }( <span class="blue">true</span> ));
    </code></pre>
  </div>
</div>



    </body>
</html>
