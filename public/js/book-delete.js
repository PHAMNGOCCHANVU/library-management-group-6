document.addEventListener('DOMContentLoaded', () => {
  // --- DOM elements ---
  const deleteModal = document.getElementById('deleteModal');
  const deleteCancelBtn = document.getElementById('deleteCancelBtn');
  const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
  const deleteMessage = document.getElementById('deleteMessage');

  let rowToDelete = null;

  // --- Hàm mở popup xóa ---
  function openDeleteModal(row) {
    rowToDelete = row;
    const bookName = row.querySelectorAll('td')[1].textContent; // lấy tên sách
    deleteMessage.textContent = `Bạn có chắc muốn xóa sách "${bookName}"?`;
    deleteModal.style.display = 'block';
  }

  // --- Hàm đóng popup xóa ---
  function closeDeleteModal() {
    deleteModal.style.display = 'none';
    rowToDelete = null;
  }

  // --- Event click icon delete ---
  function initDeleteEvents() {
    document.querySelectorAll('.delete-icon').forEach(icon => {
      icon.removeEventListener('click', () => {}); // tránh bind trùng
      icon.addEventListener('click', () => {
        const row = icon.closest('tr');
        openDeleteModal(row);
      });
    });
  }

  initDeleteEvents();

  // --- Event đóng popup ---
  deleteCancelBtn.addEventListener('click', closeDeleteModal);

  // --- Xóa sách ---
  confirmDeleteBtn.addEventListener('click', () => {
    if (!rowToDelete) return;

    const bookId = rowToDelete.dataset.id;

    fetch(`/admin/book-management-admin/${bookId}`, { // URL RESTful đúng
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
        'Accept': 'application/json'
      }
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        rowToDelete.remove();
        alert('✅ ' + data.message);
      } else {
        alert('❌ ' + data.message); // sẽ báo "Không thể xóa sách vì vẫn còn người mượn"
      }
      closeDeleteModal();
    })
    .catch(err => console.error(err));
  });

  // --- Nếu table thay đổi, cập nhật event delete ---
  function updateTableRows() {
    return document.querySelectorAll('.book-table tbody tr');
  }

  if (typeof updateDashboardStats === 'function') {
      updateDashboardStats();
  }
  
});
