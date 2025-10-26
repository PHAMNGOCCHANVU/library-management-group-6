document.addEventListener('DOMContentLoaded', () => {
  // --- DOM elements ---
  const editModal = document.getElementById('editModal');
  const editOverlay = document.getElementById('editOverlay');
  const closeEditModal = document.getElementById('closeEditModal');
  const cancelEditBtn = document.getElementById('cancelEditBtn');
  const editForm = document.getElementById('editForm');

  const editMa = document.getElementById('editMa');
  const editTen = document.getElementById('editTen');
  const editTacGia = document.getElementById('editTacGia');
  const editTheLoai = document.getElementById('editTheLoai');
  const editSoLuong = document.getElementById('editSoLuong');

  let currentRow = null;

  // --- Hàm mở popup và fill dữ liệu ---
  function openEditPopup(row) {
    currentRow = row;
    const cells = row.querySelectorAll('td');
    editMa.value = cells[0].textContent;
    editTen.value = cells[1].textContent;
    editTacGia.value = cells[2].textContent;
    editTheLoai.value = cells[3].dataset.id; // lấy idDanhMuc
    editSoLuong.value = cells[4].textContent;

    editModal.style.display = 'block';
    editOverlay.style.display = 'block';
  }

  // --- Hàm đóng popup ---
  function closeEditPopup() {
    editModal.style.display = 'none';
    editOverlay.style.display = 'none';
    editForm.reset();
    currentRow = null;
  }

  // --- Event click icon edit ---
  document.querySelectorAll('.edit-icon').forEach(icon => {
    icon.addEventListener('click', () => {
      const row = icon.closest('tr');
      openEditPopup(row);
    });
  });

  // --- Event đóng popup ---
  closeEditModal.addEventListener('click', closeEditPopup);
  cancelEditBtn.addEventListener('click', closeEditPopup);
  editOverlay.addEventListener('click', closeEditPopup);

  // --- Submit form AJAX ---
  editForm.addEventListener('submit', function(e) {
    e.preventDefault();
    if (!currentRow) return;

    const bookId = currentRow.dataset.id;
    const payload = {
      maSach: editMa.value.trim(),
      tenSach: editTen.value.trim(),
      tacGia: editTacGia.value.trim(),
      idDanhMuc: editTheLoai.value,
      soLuong: Number(editSoLuong.value)
    };

    fetch(`/admin/book-management-admin/${bookId}`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
        'Accept': 'application/json'
      },
      body: JSON.stringify(payload)
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        const cells = currentRow.querySelectorAll('td');
        cells[0].textContent = payload.maSach;
        cells[1].textContent = payload.tenSach;
        cells[2].textContent = payload.tacGia;
        cells[3].textContent = editTheLoai.options[editTheLoai.selectedIndex].textContent;
        cells[3].dataset.id = payload.idDanhMuc;
        cells[4].textContent = payload.soLuong;
        alert('✅ Đã cập nhật sách thành công!');
      } else {
        alert('❌ Cập nhật thất bại: ' + data.message);
      }
      closeEditPopup();
    })
    .catch(err => console.error(err));
  });

  // --- Cập nhật tableRows nếu cần ---
  function updateTableRows() {
    return document.querySelectorAll('.book-table tbody tr');
  }

  
});
