<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- style --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Laravel</title>
</head>
<body style="background-color: rgb(65, 131, 230)">
    
        <div>
            <h1 class="title p-2 has-text-centered">Minimal Tweet Clone</h1>
        </div>

        <div class="container p-6">
        {{-- form to create a tweet --}}

        <div>
            <form class="mb-6" action="/tweets" method="POST">
                
            @csrf
                
                <input class="input is-medium mb-2" type="text" name="body" placeholder="Tweet Here">
                
                
                <button class="button is-link" type="submit">Tweet</button>
            
            
            </form>
        </div>

        {{-- list all yourt tweers --}}

        <div>
          @foreach ($tweets as $tweet)
          <article class="media">
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Eduardo Santiago</strong> <small>@Eduardo</small>
                  <br>
                    <div> <strong>{{$tweet->body}}</strong> {{$tweet->created_at}}</div>
                </p>
              </div>
          </article>
          @endforeach
        </div>
    </div>
</body>
</html>