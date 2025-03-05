<!-- jQuery -->
<script src="../app/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../app/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../app/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../app/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../app/dist/js/pages/dashboard3.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var ctx = document.getElementById('nilaiChart').getContext('2d');
  var nilaiChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
      datasets: [{
        label: 'Nilai Rata-rata',
        data: [75, 80, 85, 90],
        borderColor: 'rgba(60,141,188,1)',
        backgroundColor: 'rgba(60,141,188,0.2)',
        fill: true
      }]
    }
  });
</script>


<script>
document.getElementById('searchProject').addEventListener('keyup', function() {
    let searchText = this.value.toLowerCase();
    let projects = document.querySelectorAll('.project-card');

    projects.forEach(project => {
        let title = project.getAttribute('data-title').toLowerCase();
        if (title.includes(searchText)) {
            project.style.display = 'block';
        } else {
            project.style.display = 'none';
        }
    });
});

// Preview gambar sebelum upload
document.getElementById('projectImage').addEventListener('change', function(event) {
    let file = event.target.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = function(e) {
            let imgPreview = document.createElement('img');
            imgPreview.src = e.target.result;
            imgPreview.classList.add('img-thumbnail', 'mt-2');
            document.getElementById('uploadProjectForm').appendChild(imgPreview);
        };
        reader.readAsDataURL(file);
    }
});
</script>

<script>
  let currentChat = ""; // Bisa private chat atau grup

// Buka chat private
function openChat(userName) {
    currentChat = userName;
    document.getElementById("chatUserName").innerHTML = `💬 Chat dengan ${userName}`;
    document.getElementById("chatBox").innerHTML = `<p class="text-muted text-center">Sedang ngobrol dengan ${userName}...</p>`;
    document.getElementById("chatInput").disabled = false;
    document.getElementById("sendMessage").disabled = false;
}

// Buka grup chat
function openGroupChat(groupName) {
    currentChat = groupName;
    document.getElementById("chatUserName").innerHTML = `👥 Grup: ${groupName}`;
    document.getElementById("chatBox").innerHTML = `<p class="text-muted text-center">Sedang ngobrol di grup ${groupName}...</p>`;
    document.getElementById("chatInput").disabled = false;
    document.getElementById("sendMessage").disabled = false;
}

// Kirim pesan
document.getElementById("sendMessage").addEventListener("click", function() {
    let chatInput = document.getElementById("chatInput");
    let chatBox = document.getElementById("chatBox");

    if (chatInput.value.trim() !== "") {
        let newMessage = `<div class="mb-2"><strong>Anda:</strong> ${chatInput.value}</div>`;
        chatBox.innerHTML += newMessage;
        chatInput.value = "";
        chatBox.scrollTop = chatBox.scrollHeight; // Auto scroll ke bawah
    }
});

// Dummy pesan masuk di grup
setTimeout(() => {
    let chatBox = document.getElementById("chatBox");
    if (currentChat === "Kelas Pemrograman") {
        chatBox.innerHTML += `<div class="mb-2 text-info"><strong>Mentor:</strong> Jangan lupa tugas minggu ini ya!</div>`;
    }
}, 5000); // Simulasi pesan masuk setelah 5 detik

</script>