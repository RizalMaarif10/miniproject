<div class="col-md-3 p-3">
    <h5>Siapa yang harus diikuti</h5>
    <div class="follow-list">
        @foreach($usersToFollow as $followUser)
            <div class="d-flex justify-content-between align-items-center mb-2 user">
                <div>
                    <img src="profile.png" style="width: 10%,height:20%"{{ $followUser->id }} class="rounded-circle" alt="User">
                    <span>{{ $followUser->username }}</span>
                </div>
                <a href="#" class="btn btn-sm btn-primary">Follow</a>
            </div>
        @endforeach
    </div>
</div>