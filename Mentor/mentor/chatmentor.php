<div class="content-wrapper">
  <section class="content">
    <div class="container">
      <h2 class="mb-4"><i class="fas fa-comments" style="padding: 1rem;"></i> Chat dengan Mentor</h2>

      <div class="card">
        <div class="card-body chat-box" style="height: 280px; overflow-y: auto; border: 1px solid #ddd; padding: 10px;">
          <div class="chat-message">
            <strong><?=$_GET["id"]?> : </strong> Halo! Ada yang bisa saya bantu?
          </div>
        </div>
        <div class="card-footer">
          <form id="chatForm">
            <input type="text" class="form-control" id="chatInput" placeholder="Ketik pesan..." required>
            <button type="submit" class="btn btn-primary mt-2"><i class="fas fa-paper-plane"></i> Kirim</button>
          </form>
        </div>
      </div>

    </div>
  </section>
</div>

<script>
  document.getElementById("chatForm").addEventListener("submit", function (e) {
    e.preventDefault();
    let input = document.getElementById("chatInput");
    let messageBox = document.querySelector(".chat-box");

    if (input.value.trim() !== "") {
      let newMessage = `<div class="chat-message"><strong>Anda:</strong> ${input.value}</div>`;
      messageBox.innerHTML += newMessage;
      input.value = "";
      messageBox.scrollTop = messageBox.scrollHeight;
    }
  });
</script>
