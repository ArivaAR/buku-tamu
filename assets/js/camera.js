// Akses kamera dan tampilkan video
const video = document.getElementById('videoElement');
const canvas = document.getElementById('canvas');
const capturedImage = document.getElementById('capturedImage');
const fotoInput = document.getElementById('foto');

navigator.mediaDevices.getUserMedia({ video: true })
  .then(stream => {
    video.srcObject = stream;
  })
  .catch(err => {
    console.error("Error accessing the camera: ", err);
  });

document.getElementById('capture').addEventListener('click', () => {
  const context = canvas.getContext('2d');
  context.drawImage(video, 0, 0, canvas.width, canvas.height);

  // Dapatkan data URL dari canvas dan tampilkan gambar
  const dataURL = canvas.toDataURL('image/png');
  capturedImage.src = dataURL;
  capturedImage.style.display = 'block';

  // Set data URL ke input tersembunyi
  fotoInput.value = dataURL;
});