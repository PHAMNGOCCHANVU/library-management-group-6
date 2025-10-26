console.log('JS is running');

document.addEventListener('DOMContentLoaded', () => {
    const addCategoryModal = document.getElementById('addCategoryModal');
    const addOverlay = document.getElementById('modalOverlay');
    const openAddCategoryModalBtn = document.getElementById('openAddCategoryModal');
    const closeAddCategoryModalBtn = document.getElementById('closeAddCategoryModal');
    const cancelAddCategoryBtn = document.getElementById('cancelAddCategory');
    const addCategoryForm = document.getElementById('addCategoryForm');
    const categoryTableBody = document.querySelector('.category-table tbody');

    function closeAddModal() {
        addCategoryModal.style.display = 'none';
        addOverlay.style.display = 'none';
        addCategoryForm.reset();
    }

    openAddCategoryModalBtn.addEventListener('click', () => {
        addCategoryModal.style.display = 'block';
        addOverlay.style.display = 'block';
    });

    closeAddCategoryModalBtn.addEventListener('click', closeAddModal);
    cancelAddCategoryBtn.addEventListener('click', closeAddModal);
    addOverlay.addEventListener('click', closeAddModal);

    addCategoryForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(addCategoryForm);

        fetch('/admin/category-management-admin', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
            .then(res => res.json()) // chuyển sang json
            .then(data => {
                if (data.success) {
                    console.log('Thêm thành công:', data.category);
                    // thêm vào table ở đây
                } else {
                    alert(data.message);
                }
            })
            .catch(err => console.error('Fetch error:', err));

    });

    function initEditAndDeleteEvents() {
        if (typeof initEditCategoryEvents === 'function') initEditCategoryEvents();
        if (typeof initDeleteCategoryEvents === 'function') initDeleteCategoryEvents();
    }
});
