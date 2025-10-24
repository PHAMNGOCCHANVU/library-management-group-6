{{-- resources/views/user/tranglichsudatcho.blade.php --}}
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />

    {{-- ✅ Sửa đường dẫn tĩnh sang asset() --}}
    <link rel="stylesheet" href="{{ asset('css/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header-homepage-user.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tranglichsumuontra.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tranglichsudatcho.css') }}" />

    <title>Lịch sử đặt chỗ</title>
  </head>
  <body>
    <div class="rectangle"> 
      <div class="group-2-choosen">
        <div class="div">
          {{-- ✅ Đổi liên kết sang route Blade (nếu có) --}}
          <a class="group-6" href="{{ url('user/content-all-lsmn') }}">
            <div class="rectangle-6">
              <div class="text-wrapper-5">Lịch sử mượn trả</div>
              <div>
                <img class="iconstack-io-book-2" src="{{ asset('images/iconstack.io - (Book) - purple.png') }}" alt="Book icon"/>
              </div>
            </div>
          </a>

          <a class="group-7" href="{{ url('user/content-datcho') }}">
            <div class="rectangle-7">
              <div>
                <img class="iconstack-io" src="{{ asset('images/iconstack.io - (Bookmark) - white.png') }}" alt="Bookmark icon"/>
              </div>
              <div class="text-wrapper-6">Lịch sử đặt chỗ</div>
            </div>
          </a>
        </div>
      </div>     

      <div class="group-ngoai-khoi-sach">
        <div class="group-khoi-sach">
          {{-- ✅ Có thể lặp qua danh sách đặt chỗ trong controller sau này --}}
          <div class="khung-chung-sach-lch">
            <div class="khung-anh-sach-lch">
              <img class="image" src="{{ asset('images/thinking, fast and slow.jpg') }}" alt="Thinking, Fast and Slow" />
            </div>
            <div class="khung-chu-sach-lch">
              <div class="text-wrapper-7">Ngày đặt: 25/1/2024</div>
              <div class="text-wrapper-8">Thinking, Fast and Slow</div>
              <div class="text-wrapper-9">Tác giả: Daniel Kahneman</div>
              <div class="text-wrapper-10">Có sách: 1/2/2024</div>
              <div class="text-wrapper-11">Đã mượn: 1/2/2024</div>
              <div class="rectangle-10 rectangle-dang-muon"></div>
              <div class="text-wrapper-12 dang-muon">Đang mượn</div>
            </div>
          </div>

          <div class="khung-chung-sach-lch">
            <div class="khung-anh-sach-lch">
              <img class="image" src="{{ asset('images/the power of now.jpg') }}" alt="The Power of Now" />
            </div>
            <div class="khung-chu-sach-lch">
              <div class="text-wrapper-7">Ngày đặt: 18/1/2024</div>
              <div class="text-wrapper-8">The Power of Now</div>
              <div class="text-wrapper-9">Tác giả: Eckhart Tolle</div>
              <div class="rectangle-12 rectangle-dang-cho"></div>
              <div class="text-wrapper-12 dang-cho">Đang chờ</div>
            </div>
          </div>

          <div class="khung-chung-sach-lch">
            <div class="khung-anh-sach-lch">
              <img class="image" src="{{ asset('images/clean code.jpg') }}" alt="Clean Code" />
            </div>
            <div class="khung-chu-sach-lch">
              <div class="text-wrapper-7">Ngày đặt: 10/12/2023</div>
              <p class="text-wrapper-8">Clean Code</p>
              <p class="text-wrapper-9">Tác giả: Robert C. Martin</p>
              <div class="text-wrapper-10">Có sách: 20/12/2025</div>
              <div class="rectangle-8 rectangle-het-han"></div>
              <div class="text-wrapper-12 het-han">Hết hạn</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
