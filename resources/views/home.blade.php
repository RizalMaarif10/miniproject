
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .sidebar {
            height: 100vh;
            background-color: #111;
        }
        .content {
            padding: 20px;
        }
        .card {
            background-color: #222;
        }
        .follow-list img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .follow-list .user {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    @include('nav')
        <div class="col-md-6 content">
            <div class="card mb-3">
                <div class="card-body">
                    <form action="{{ route('tweets.store') }}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <textarea 
                                name="body" 
                                id="body" 
                                class="form-control"
                                placeholder="What's on your mind"
                                required
                                autofocus
                            ></textarea>
                        </div>
                        <hr class="my-2"/>
                        <footer class="d-flex justify-content-between align-items-center">
                            <h5 class="ml-3 "><img src="profile.png" class="m-1 " style="width: 5%" alt=""></a>{{ $user->username }}</h5>
                            <div class="d-flex align-items-center">
                                <button 
                                    type="submit"
                                    class="btn btn-primary rounded-lg shadow py-1 px-2 text-white"
                                >Publish</button>
                            </div>
                        </footer>
                    </form>
                    @error('body')
                        <p class="mt-2 text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            @foreach($tweets as $tweet)
        
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <img src="profile.png" class="m-1 " style="width: 5%" alt="">
                        <h5 class="m-0">{{ $tweet->user->username }}</h5>
                    </div>
                    <p>{{ $tweet->body }}</p>
                    <small class="text-muted">{{ $tweet->created_at->diffForHumans() }}</small>
                </div>
            </div>
            @endforeach
        </div>
       
        @include('follow')
       
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
