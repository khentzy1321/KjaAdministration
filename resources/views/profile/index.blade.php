@extends('layouts.admin')
@section('content')


    <div class="card_background_img">
    <div class="edit">
        @foreach ($users as $user)
    @endforeach
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-secondary"><i class="fas fa-pen"></i></a>
    </div>
    </div>
        <div class="card_profile_img"></div>
            <div class="user_details">
            <h2 class="text-center">{{ $user->name }}</h2>
        </div>
        <div class="card_count">
            <div class="count">
                @include('profile.inc.info')
            </div>
    </div>
<style>
h2 {
    font-size: 30px;
    font-weight: 500;
    color: black;
}
.edit{
    margin-left: 96.5%;
    margin-top: 5px;
}

/* p{
    font-size: 15px;
    color: #868d9b;
} */

.card {
    width: auto;
    height: auto;
    background-color: #ffffff;
    margin: 0 auto;
    margin-top: 80px;
    box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.15);
}

.card_profile_img {
    width: 280px;
    height: 280px;
    background-color: #868d9b;
    background-image: url('/dist/img/boy1.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    border: 2px solid #ffffff;
    border-radius: 300px;
    margin: 0 auto;
    margin-top: -220px;

}

.card_background_img {
    width: 100%;
    height: 400px;
    background-color: #e1e7ed;
    background-image: url("dist/img/peakpx (4).jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.user_details p {
    margin-bottom: 20px;
    margin-top: -5px;

}

.user_details h2 {
    margin-top: 10px;
}

.card_count {
    padding: 30px;
    margin-top: -100px;
}

.count {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 28px;
}

.count p {
    margin-top: -10px;
}


</style>
@endsection

