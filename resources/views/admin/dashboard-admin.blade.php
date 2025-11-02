@include('admin.layouts.mold-dashboard-admin')

<section class="dashboard-content">
  <div class="dashboard-header">
    <h1 class="title">Dashboard</h1>
    <p class="update-date">
      <img src="{{ asset('images/iconstack.io - (Calendar)-grey.png') }}" alt="Update icon">Cập nhật: 9/10/2025
    </p>
  </div>

  <div class="cards">
    <div class="card">
      <div class="icon-box blue">
        <img src="{{ asset('images/iconstack.io - (Book 2).png') }}" alt="Book icon">
      </div>
      <div>
        <p class="label">Tổng số sách</p>
        <h2>50</h2>
      </div>
    </div>

    <div class="card">
      <div class="icon-box green">
        <img src="{{ asset('images/iconstack.io - (User)-white-admin.png') }}" alt="Readers icon">
      </div>
      <div>
        <p class="label">Độc giả đăng ký</p>
        <h2>5</h2>
      </div>
    </div>

    <div class="card">
      <div class="icon-box yellow">
        <img src="{{ asset('images/iconstack.io - (Bookmark)-thin-white.png') }}" alt="Borrow icon">
        </div>
      <div>
        <p class="label">Sách đang mượn</p>
        <h2>30</h2>
      </div>
    </div>
  </div>

  <div class="table-wrapper">
    <table class="user-table">
      <thead>
        <tr>
          <th>Tên độc giả</th>
          <th>Email</th>
          <th>Số điện thoại</th>
          <th>Số sách mượn</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nguyễn Văn A</td>
          <td>nguyenvana@email.com</td>
          <td>0321456998</td>
          <td class="highlight">5</td>
        </tr>
        <tr>
          <td>Trần Thị B</td>
          <td>tranthib@email.com</td>
          <td>0256987635</td>
          <td class="highlight">4</td>
        </tr>
        <tr>
          <td>Lê Văn C</td>
          <td>levanc@email.com</td>
          <td>0456829745</td>
          <td class="highlight">7</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
</main>
</div>  
</body>
</html>
