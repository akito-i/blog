<html>
<body>
    



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </body>

   
    <body class = 'bg-light'>
    <div id="your_container">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class= "font-weight-bold">＜ {{$auth->name}}  </div>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
          </button>
                </div>
                </nav>
            </div>


            <div id="chat">
        

       

        <div v-for="m in messages">

            <!-- 登録された日時 -->
            <span>{{$auth->name}}</span>：&nbsp;

            <!-- メッセージ内容 -->
            <span v-text="m.body"></span>

        </div>
        <div class="input-group fixed-bottom bg-primary ">
        <input type="text" v-model="message" class="form-control"placeholder="" aria-label="" aria-describedby="basic-addon1">
        <br>
        <div class="input-group-append">
        <button class="btn btn-success" type="button" @click="send()">Send</button>
        </div>
        </div>
    </div>
    

    </div>

         
            
            




    <script src="/js/app.js"></script>
    <script>

        new Vue({
            el: '#chat',
            data: {
                message: '',
                messages: []
            },
            methods: {
                getMessages() {

                    const url = '/ajax/chat';
                    axios.get(url)
                        .then((response) => {
                            
                            this.messages = response.data;

                        });

                },
                send() {

                    const url = '/ajax/chat';
                    const params = { message: this.message };
                    axios.post(url, params)
                        .then((response) => {

                            // 成功したらメッセージをクリア
                            this.message = '';

                        });

                }
            },
            mounted() {

                this.getMessages();

                Echo.channel('chat')
                    .listen('MessageCreated', (e) => {

                        this.getMessages(); // メッセージを再読込

                    });

            }
        });

    </script>
</body>
</html>