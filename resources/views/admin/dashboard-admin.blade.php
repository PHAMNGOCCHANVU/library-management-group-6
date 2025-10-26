{{-- resources/views/admin/dashboard-admin.blade.php --}}

@include('admin.layouts.mold-dashboard-admin')

<section class="dashboard-content">
    <div class="dashboard-header">
        <h1 class="title">Dashboard</h1>
        <p class="update-date">
            <img src="{{ asset('images/iconstack.io - (Calendar)-grey.png') }}" alt="Update icon">
            Cập nhật: {{ \Carbon\Carbon::now()->format('d/m/Y') }}
        </p>
    </div>

    <div class="cards">
        <div class="card">
            <div class="icon-box blue">
                <img src="{{ asset('images/iconstack.io - (Book 2).png') }}" alt="Book icon">
            </div>
            <div>
                <p class="label">Tổng số sách</p>
                <h2 id="totalBooks">{{ $totalBooks ?? 0 }}</h2>
            </div>
        </div>

        <div class="card">
            <div class="icon-box green">
                <img src="{{ asset('images/iconstack.io - (User)-white-admin.png') }}" alt="Readers icon">
            </div>
            <div>
                <p class="label">Độc giả đăng ký</p>
                <h2 id="totalReaders">{{ $totalReaders ?? 0 }}</h2>
            </div>
        </div>

        <div class="card">
            <div class="icon-box yellow">
                <img src="{{ asset('images/iconstack.io - (Bookmark)-thin-white.png') }}" alt="Borrow icon">
            </div>
            <div>
                <p class="label">Sách đang mượn</p>
                <h2 id="booksBorrowed">{{ $booksBorrowed ?? 0 }}</h2>
            </div>
        </div>
    </div>

    {{-- 🔹 Bảng độc giả --}}
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
                @forelse($readers as $reader)
                    <tr>
                        <td>{{ $reader->hoTen }}</td>
                        <td>{{ $reader->email }}</td>
                        <td>{{ $reader->soDienThoai }}</td>
                        <td class="highlight">{{ $reader->soSachDangMuon ?? 0 }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align:center;">Không có độc giả nào</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

</main>
</div>
</body>
</html>

<script src="{{ asset('js/dashboard-admin.js') }}"></script>
