@include('admin.layouts.mold-borrow-return-management-admin')

<section class="dashboard-content">
  <div class="dashboard-header">
    <h1 class="title">Quản lý mượn trả</h1>
  </div>

  <!-- Tìm kiếm -->
  <div class="borrow-return-filter-container">
    <div class="search-box">
      <img src="{{ asset('images/iconstack.io - (Search)-grey.png') }}">
      <input type="text" placeholder="Tìm kiếm theo mã yêu cầu, tên độc giả, tên sách, loại yêu cầu...">
    </div>
  </div>

  <!-- Bảng danh sách yêu cầu mượn trả -->
  <div class="table-wrapper">
    <div class="table-scroll">
      <table class="borrow-return-table">
        <thead>
          <tr>
            <th>Mã yêu cầu</th>
            <th>Tên độc giả</th>
            <th>Tên sách</th>
            <th>Loại yêu cầu</th>
            <th>Ngày yêu cầu</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>BR001</td>
            <td>Nguyễn Văn A</td>
            <td>Nhà Giả Kim</td>
            <td><span class="sta borrow">Mượn sách</span></td>              
            <td>15/01/2025</td>
            <td><span class="status pending">Chờ duyệt</span></td>
            <td class="actions">
              <svg class="icon-tick" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
              <svg class="icon-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </td>
          </tr>

          <tr>
              <td>BR002</td>
              <td>Trần Thị Bình</td>
              <td>Atomic Habits</td>
              <td>
                <span class="sta borrow">Mượn sách</span>
              </td>
              <td>14/01/2025</td>
              <td>
                <span class="status rejected">Từ chối</span>
              </td>
              <td class="actions">
                 <svg class="icon-tick" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>

                <svg class="icon-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="18" y1="6" x2="6" y2="18"></line>
                  <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
 
              </td>
            </tr>
            <tr>
              <td>FT001</td>
              <td>Võ Văn C</td>
              <td>Mắt Biếc</td>
              <td>
                <span class="sta return">Trả sách</span>
              </td>
              <td>13/01/2025</td>
              <td>
                <span class="status approved">Đã duyệt</span>
              </td>
                <td class="actions">
                  <svg class="icon-tick" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>

                <svg class="icon-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="18" y1="6" x2="6" y2="18"></line>
                  <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>

                </td>
            </tr>

        </tbody>
      </table>
    </div>
  </div>
</section>

{{-- Scripts riêng --}}
<script src="{{ asset('js/borrow-return-filter.js') }}"></script>
<script src="{{ asset('js/borrow-return-request.js') }}"></script>

</main>
</body>
</html>
