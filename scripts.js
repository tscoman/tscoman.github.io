function showTab(id) {
  document.querySelectorAll('.tab-content').forEach(div => div.classList.remove('active'));
  document.getElementById(id).classList.add('active');
}
window.onload = () => showTab('location');
