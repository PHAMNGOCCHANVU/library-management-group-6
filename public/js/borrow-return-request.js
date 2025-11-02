const tickIcons = document.querySelectorAll('.icon-tick');
const xIcons = document.querySelectorAll('.icon-x');

function changeStatus(row, newStatusText, newStatusClass) {
  const statusSpan = row.querySelector('.status'); 

  statusSpan.classList.remove('pending', 'approved', 'rejected');

  statusSpan.classList.add(newStatusClass);

  statusSpan.textContent = newStatusText;
}

tickIcons.forEach(icon => {
  icon.addEventListener('click', function () {
    const row = this.closest('tr'); 
    changeStatus(row, 'Đã duyệt', 'approved');
  });
});

xIcons.forEach(icon => {
  icon.addEventListener('click', function () {
    const row = this.closest('tr');
    changeStatus(row, 'Từ chối', 'rejected');
  });
});
