const filterSelect = document.querySelector('.filter-dropdown select');
const tableRows = document.querySelectorAll('.book-table tbody tr');

filterSelect.addEventListener('change', function() {
  const selectedValue = this.value.trim();

  tableRows.forEach(row => {
    const categoryCell = row.cells[3].textContent.trim(); 

    if (selectedValue === "Tất cả thể loại" || selectedValue === "") {
      row.style.display = "";
    } else {
      if (categoryCell === selectedValue) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    }
  });
});

const searchInput = document.querySelector('.search-box input');

function filterBooks() {
  const selectedCategory = filterSelect.value.trim().toLowerCase();
  const keyword = searchInput.value.trim().toLowerCase();

  tableRows.forEach(row => {
    const maSach = row.cells[0].textContent.trim().toLowerCase();
    const tenSach = row.cells[1].textContent.trim().toLowerCase();
    const tacGia = row.cells[2].textContent.trim().toLowerCase();
    const theLoai = row.cells[3].textContent.trim().toLowerCase();

    const matchCategory = (selectedCategory === "tất cả thể loại".toLowerCase() || selectedCategory === "" || theLoai === selectedCategory);
    const matchKeyword = (maSach.includes(keyword) || tenSach.includes(keyword) || tacGia.includes(keyword));

    if (matchCategory && matchKeyword) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  });
}

filterSelect.addEventListener('change', filterBooks);
searchInput.addEventListener('input', filterBooks);

