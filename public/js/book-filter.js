// book-filter.js

// Lấy các phần tử
const filterSelect = document.querySelector('.filter-dropdown select');
const searchInput = document.querySelector('.search-box input');
let tableRows = document.querySelectorAll('.book-table tbody tr');

// Hàm lọc sách
function filterBooks() {
  const selectedCategory = filterSelect.value.trim(); // là idDanhMuc
  const keyword = searchInput.value.trim().toLowerCase();

  tableRows.forEach(row => {
    const cells = row.cells;
    if (!cells || cells.length < 5) return;

    const maSach = cells[0].textContent.trim().toLowerCase();
    const tenSach = cells[1].textContent.trim().toLowerCase();
    const tacGia = cells[2].textContent.trim().toLowerCase();
    const categoryId = cells[3].dataset.id ? cells[3].dataset.id.trim() : '';

    const matchCategory = (selectedCategory === "" || categoryId === selectedCategory);
    const matchKeyword = (maSach.includes(keyword) || tenSach.includes(keyword) || tacGia.includes(keyword));

    row.style.display = (matchCategory && matchKeyword) ? "" : "none";
  });
}

// Lắng nghe thay đổi dropdown và input search
if (filterSelect) filterSelect.addEventListener('change', filterBooks);
if (searchInput) searchInput.addEventListener('input', filterBooks);

// Hàm cập nhật tableRows khi thêm/sửa/xóa
function updateTableRows() {
  tableRows = document.querySelectorAll('.book-table tbody tr');
  filterBooks();
}

// Xuất ra để các file khác gọi nếu cần
window.updateTableRows = updateTableRows;

// Chạy lọc lần đầu khi load
filterBooks();
