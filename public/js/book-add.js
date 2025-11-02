const addBookModal = document.getElementById('addBookModal');
const addOverlay = document.getElementById('modalOverlay');
const openAddBookModal = document.getElementById('openAddBookModal');
const closeAddBookModal = document.getElementById('closeAddBookModal');
const cancelAddBook = document.getElementById('cancelAddBook');
const addBookForm = document.getElementById('addBookForm');
const bookTableBody = document.querySelector('.book-table tbody');

openAddBookModal.addEventListener('click', () => {
  addBookModal.style.display = 'block';
  addOverlay.style.display = 'block';
});

function closeAddModal() {
  addBookModal.style.display = 'none';
  addOverlay.style.display = 'none';
  addBookForm.reset(); 
}
closeAddBookModal.onclick = closeAddModal;
cancelAddBook.onclick = closeAddModal;
addOverlay.onclick = closeAddModal;

document.querySelector('.btn-submit').addEventListener('click', (e) => {
  e.preventDefault(); 

  const ma = document.getElementById('addMa').value.trim();
  const ten = document.getElementById('addTen').value.trim();
  const tacGia = document.getElementById('addTacGia').value.trim();
  const theLoai = document.getElementById('addTheLoai').value.trim();
  const soLuong = document.getElementById('addSoLuong').value.trim();

  if (!ma || !ten || !tacGia || !theLoai || !soLuong) {
    alert("⚠ Vui lòng nhập đầy đủ thông tin.");
    return;
  }

  if (isNaN(soLuong) || Number(soLuong) <= 0) {
    alert("❌ Số lượng phải là số và lớn hơn 0.");
    return;
  }

  const existingRows = bookTableBody.querySelectorAll('tr');
  for (let row of existingRows) {
    const existingMa = row.querySelector('td').textContent.trim();
    if (existingMa.toLowerCase() === ma.toLowerCase()) {
      alert(`❌ Mã sách "${ma}" đã tồn tại. Vui lòng nhập mã khác.`);
      return;
    }
  }

  const newRow = document.createElement('tr');
  newRow.innerHTML = `
    <td>${ma}</td>
    <td>${ten}</td>
    <td>${tacGia}</td>
    <td>${theLoai}</td>
    <td>${soLuong}</td>
    <td class="actions">
      <svg xmlns="http://www.w3.org/2000/svg" class="edit-icon" viewBox="0 0 24 24" fill="currentColor">
        <path d="M4.5 2.25A2.25 2.25 0 002.25 4.5v15A2.25 2.25 0 004.5 21.75h15a2.25 2.25 0 002.25-2.25V12.75a.75.75 0 00-1.5 0V19.5a.75.75 0 01-.75.75h-15a.75.75 0 01-.75-.75v-15a.75.75 0 01.75-.75h7.5a.75.75 0 000-1.5h-7.5z" />
        <path d="M16.862 3.487a1.5 1.5 0 012.121 2.126l-.793.792-2.12-2.12.792-.793zM14.729 5.616l-6.45 6.45a.75.75 0 00-.19.33l-.75 3a.75.75 0 00.928.928l3-.75a.75.75 0 00.33-.19l6.45-6.45-2.318-2.318z" />
      </svg>

      <svg xmlns="http://www.w3.org/2000/svg" class="delete-icon" viewBox="0 0 24 24" fill="currentColor">
        <path fill-rule="evenodd" d="M9 3.75A1.5 1.5 0 0110.5 2.25h3A1.5 1.5 0 0115 3.75V4.5h4.5a.75.75 0 010 1.5H4.5a.75.75 0 010-1.5H9V3.75zm-3 4.5A.75.75 0 016.75 7.5h10.5a.75.75 0 01.75.75v10.5A2.25 2.25 0 0115.75 21h-7.5A2.25 2.25 0 016 18.75V8.25A.75.75 0 016.75 7.5zM10.5 10.5a.75.75 0 000 1.5v4.5a.75.75 0 001.5 0v-4.5a.75.75 0 00-1.5-1.5zm3 0a.75.75 0 000 1.5v4.5a.75.75 0 001.5 0v-4.5a.75.75 0 00-1.5-1.5z" clip-rule="evenodd" />
      </svg>  
    </td>
  `;

  bookTableBody.appendChild(newRow);
  closeAddModal();

  alert('✅ Đã thêm sách mới thành công.');

  initEditAndDeleteEvents(); 
});

function initEditAndDeleteEvents() {
  if (typeof initEditEvents === 'function') initEditEvents();
  if (typeof initDeleteEvents === 'function') initDeleteEvents();
}
