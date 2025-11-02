{{-- ========================= --}}
{{-- 📄 File: content-sachhot.blade.php --}}
{{-- Mục đích: Hiển thị trang "Sách hot" --}}
{{-- Giữ nguyên cấu trúc gốc của file HTML, chỉ sửa đường dẫn -> {{ asset() }} --}}
{{-- ========================= --}}

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    
    {{-- ✅ ĐÃ CHỈNH: dùng asset() để Laravel trỏ đúng thư mục public --}}
    <link rel="stylesheet" href="{{ asset('css/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header-homepage-user.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tranglichsumuontra.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/datchosach.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sachhot.css') }}" />
  </head>

  <body>
    {{-- ========================= --}}
    {{-- BẮT ĐẦU NỘI DUNG TRANG --}}
    {{-- ========================= --}}

    <div class="khoi-group3-4-14">
      <div class="group-2-choosen">
        <div class="div">
          <a class="group-6" href="{{ url('user/content-datchosach') }}">
            <div class="rectangle-6">
              <div class="text-wrapper-5">Đặt chỗ của tôi</div>
              <div class="">
                <img class="iconstack-io-book-2" src="{{ asset('images/iconstack.io - (Bookmark) - Purple.png') }}" />
              </div>
            </div>
          </a>
          <a class="group-7" href="{{ url('user/content-sachhot') }}">
            <div class="rectangle-7">
              <div class="">
                <img class="iconstack-io" src="{{ asset('images/iconstack.io - (Ic Fluent Fire 24 Regular) - white.png') }}" />
              </div>
              <div class="text-wrapper-6">Sách hot</div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="rectangle">  
      <div class="can-giua-group-chon-lenh">
        <div class="group-chon-lenh">
          <h1 class="tieu-de">Sách được đặt chỗ nhiều nhất</h1>
          <p class="ghi-chu">Những cuốn sách hot nhất hiện tại đang có nhiều người chờ đợi</p>
        </div>
      </div>  
      
      <div class="group-ngoai-khoi-sach">
        <div class="group-khoi-sach">
          
          {{-- 🔹 Sách 1 --}}
          <div class="khung-chung-sach-lch">
            <div class="khung-anh-sach-lch">
              <img class="image" src="{{ asset('images/ta ba lo tren dat a.png') }}" />
            </div>
            <div class="khung-chu-sach-lch">
              <div class="danh-muc-sach">
                <div class="rectangle-8">
                  <div class="text-wrapper-12">Văn học</div>
                </div>
                <div class="rectangle-25">
                  <img class="icon-hot" src="{{ asset('images/iconstack.io - (Fire).png') }}" />
                  <div class="text-wrapper-12">Hot</div>
                </div>
              </div>
              <div class="noi-dung-chi-tiet-sach">
                <div class="text-wrapper-8">Ta ba lô trên đất Á</div>
                <div class="text-wrapper-9">Rosie Nguyễn</div>
                <div class="thoi-gian-sach">
                  <div class="thoi-gian-cho">
                    <div class="text-wrapper-7">Đang chờ:</div>
                    <div class="text-wrapper-so-nguoi">5 người</div>
                  </div>
                  <div class="thoi-gian-cho-2">
                    <div class="text-wrapper-7">Thời gian chờ:</div>
                    <div class="text-wrapper-so-nguoi">3-4 tuần</div>
                  </div>
                </div>
                <div class="group-chung-lenh-dat-cho">
                  <div class="rectangle-23">
                    <img class="icon-thoi-gian" src="{{ asset('images/iconstack.io - (Bookmark) - white.png') }}"/>
                    <div class="text-wrapper-23">
                      <p class="text-wrapper-dang-cho">Đặt chỗ ngay</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- 🔹 Sách 2 --}}
          <div class="khung-chung-sach-lch">
            <div class="khung-anh-sach-lch">
              <img class="image" src="{{ asset('images/chua te cua nhung chiec nhan.png') }}" />
            </div>
            <div class="khung-chu-sach-lch">
              <div class="danh-muc-sach">
                <div class="rectangle-8">
                  <div class="text-wrapper-12">Văn học</div>
                </div>
                <div class="rectangle-25">
                  <img class="icon-hot" src="{{ asset('images/iconstack.io - (Fire).png') }}" />
                  <div class="text-wrapper-12">Hot</div>
                </div>
              </div>
              <div class="noi-dung-chi-tiet-sach">
                <div class="text-wrapper-8">Chúa tể của những chiếc nhẫn</div>
                <div class="text-wrapper-9">J.R.R. Tolkien</div>
                <div class="thoi-gian-sach">
                  <div class="thoi-gian-cho">
                    <div class="text-wrapper-7">Đang chờ:</div>
                    <div class="text-wrapper-so-nguoi">7 người</div>
                  </div>
                  <div class="thoi-gian-cho-2">
                    <div class="text-wrapper-7">Thời gian chờ:</div>
                    <div class="text-wrapper-so-nguoi">4-5 tuần</div>
                  </div>
                </div>
                <div class="group-chung-lenh-dat-cho">
                  <div class="rectangle-23">
                    <img class="icon-thoi-gian" src="{{ asset('images/iconstack.io - (Bookmark) - white.png') }}"/>
                    <div class="text-wrapper-23">
                      <p class="text-wrapper-dang-cho">Đặt chỗ ngay</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- 🔹 Sách 3 --}}
          <div class="khung-chung-sach-lch">
            <div class="khung-anh-sach-lch">
              <img class="image" src="{{ asset('images/phu thuy xu oz.png') }}" />
            </div>
            <div class="khung-chu-sach-lch">
              <div class="danh-muc-sach">
                <div class="rectangle-8">
                  <div class="text-wrapper-12">Văn học</div>
                </div>
                <div class="rectangle-25">
                  <img class="icon-hot" src="{{ asset('images/iconstack.io - (Fire).png') }}" />
                  <div class="text-wrapper-12">Hot</div>
                </div>
              </div>
              <div class="noi-dung-chi-tiet-sach">
                <div class="text-wrapper-8">Phù thủy xứ Oz</div>
                <div class="text-wrapper-9">Rosie Dickins, Võ Hứa Vạn Mỹ (dịch)</div>
                <div class="thoi-gian-sach">
                  <div class="thoi-gian-cho">
                    <div class="text-wrapper-7">Đang chờ:</div>
                    <div class="text-wrapper-so-nguoi">11 người</div>
                  </div>
                  <div class="thoi-gian-cho-2">
                    <div class="text-wrapper-7">Thời gian chờ:</div>
                    <div class="text-wrapper-so-nguoi">4-5 tuần</div>
                  </div>
                </div>
                <div class="group-chung-lenh-dat-cho">
                  <div class="rectangle-23">
                    <img class="icon-thoi-gian" src="{{ asset('images/iconstack.io - (Bookmark) - white.png') }}"/>
                    <div class="text-wrapper-23">
                      <p class="text-wrapper-dang-cho">Đặt chỗ ngay</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- 🔹 Nút chuyển tiếp --}}
          <div class="khoi-ngoai-chuyen-tiep">
            <div class="khoi-chuyen-tiep">
              <div class="chuyen-tiep-chu">Tìm thêm sách khác</div>
              <img class="chuyen-tiep-icon" src="{{ asset('images/iconstack.io - (Arrow Narrow Right) - blue.png') }}" />
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
