<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../app/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../app/dist/css/adminlte.min.css">

  <style>
    .content-wrapper {
    overflow-y: auto; /* Scroll diaktifkan hanya kalau perlu */
    height: calc(100vh - 56px); /* Sesuaikan dengan tinggi navbar kalau ada */
    margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
    }

    .user-panel img{
      height: 2rem;
    }

    .profile-user-img{
      height: 100px;
    }

.chat-box {
    background-color: #fff;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    max-height: 400px;
    overflow-y: auto;
}

.chat-message {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.chat-message.bot {
    justify-content: flex-start;
}

.chat-message.user {
    justify-content: flex-end;
}

.chat-icon {
    width: 40px;
    height: 40px;
    background-color: #28a745;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin-right: 10px;
    font-size: 18px;
}

.chat-message.user .chat-icon {
    margin-left: 10px;
    margin-right: 0;
}

.chat-icon img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.chat-bubble {
    max-width: 70%;
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    border-radius: 15px;
}

.chat-message.user .chat-bubble {
    background-color: #007bff;
}

.chat-input {
    display: flex;
    margin-top: 15px;
}

.chat-input input {
    flex: 1;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 10px;
}

.chat-input button {
    margin-left: 10px;
    border-radius: 5px;
}


  </style>