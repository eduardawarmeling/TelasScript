function showImagePreview(event) {
  const input = event.target;
  const file = input.files[0];
  const reader = new FileReader();

  reader.onload = function(e) {
    const imagePreview = document.getElementById('image-preview');
    imagePreview.src = e.target.result;
  };

  reader.readAsDataURL(file);
}