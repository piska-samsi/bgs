var dropArea = document.getElementById('drop-area');

// Обработка события dragover
dropArea.addEventListener('dragover', function(e) {
  e.preventDefault();
  dropArea.classList.add('dragover');
});

// Обработка события dragleave
dropArea.addEventListener('dragleave', function(e) {
  e.preventDefault();
  dropArea.classList.remove('dragover');
});

// Обработка события drop
dropArea.addEventListener('drop', function(e) {
  e.preventDefault();
  dropArea.classList.remove('dragover');
  
  var file = e.dataTransfer.files[0];
  var reader = new FileReader();
  
  reader.onload = function(e) {
    var formData = new FormData();
    formData.append('file', file);
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload.php', true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        console.log(xhr.responseText);
      }
    };
    xhr.send(formData);
  };
  
  reader.readAsDataURL(file);
});
