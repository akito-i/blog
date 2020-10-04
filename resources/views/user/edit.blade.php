<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <div class="container m-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">ユーザー登録内容の変更</div>
          <div class="card-body">
            <form method="POST" action="{{ action('UserController@update') }}">
              <div class="form-group">
                <label for="name">
                  名前
                </label>
                <div>
                  <input type="text" name="name" class="form-control" value="{{ $auth->name }}">
                </div>
              <div class="form-group">
                <label for="age">
                  年齢
                </label>
                <div>
                  <input type="text" name="age" class="form-control" value="{{ $auth->age }}">
                </div>
              <div class="form-group">
                <label for="email">
                  email
                </label>
                <div>
                  <input type="text" name="email" class="form-control" value="{{ $auth->email }}">
                </div>
              <div class="form-group">
                <label for="place">
                  住所（都道府県）
                </label>
                <div>
                  <input type="text" name="place" class="form-control" value="{{ $auth->place }}">
                </div>
              <div class="form-group">
                <label for="language">
                  言語
                </label>
                <div>
                  <input type="text" name="language" class="form-control" value="{{ $auth->language }}">
                </div>
              <div class="form-group">
                <label for="profile">
                  プロフィール
                </label>
                <div>
                  <input type="text" name="profile" class="form-control" value="{{ $auth->profile }}">
                </div>
                <button type="submit" class="user-btn mt-2">変更</button>
                {{ csrf_field() }}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

