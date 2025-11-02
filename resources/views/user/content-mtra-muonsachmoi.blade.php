<!-- trangmuontra-muonsachmoi.blade.php -->
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />

    <link rel="stylesheet" href="{{ asset('css/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/header-homepage-user.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tranglichsumuontra.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/datchosach.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sachhot.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/trangmuontra(muonsachmoi).css') }}" />
  </head>

  <body>
    <div class="khoi-group3-4-14">
      <div class="group-2-choosen">
        <div class="div">
          <a class="group-6" href="{{ url('user/content-mtra-sachdangmuon') }}">
            <div class="rectangle-6">
              <div class="text-wrapper-5">Sách đang mượn</div>
              <div>
                <img class="iconstack-io-book-2" style="height: 30px; width: 30px;" src="{{ asset('images/iconstack.io - (Book) - purple.png') }}" alt="Icon sách đang mượn" />
              </div>
            </div>
          </a>
          <a class="group-7" href="{{ url('user/content-mtra-muonsachmoi') }}">
            <div class="rectangle-7">
              <div>
                <img class="iconstack-io" src="{{ asset('images/iconstack.io - (Bookmark) - white.png') }}" alt="Icon mượn sách mới" />
              </div>
              <div class="text-wrapper-6">Mượn sách mới</div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="rectangle">  
      <div class="can-giua-group-chon-lenh">
        <div class="group-chon-lenh">
          <h1 class="tieu-de">Mượn sách mới</h1>
          <p class="ghi-chu">Chọn những cuốn sách bạn muốn mượn</p>
        </div>
      </div>     

      <div class="group-ngoai-khoi-sach">
        <div class="group-khoi-sach">

          <!-- Sách 1 -->
          <div class="khung-chung-sach-lch">
            <div class="khung-anh-sach-lch">
              <img class="image" src="{{ asset('images/toi thay hoa vang tren co xanh.png') }}" alt="Tôi thấy hoa vàng trên cỏ xanh" />
            </div>
            <div class="khung-chu-sach-lch">
              <div class="danh-muc-sach">
                <div class="rectangle-8">
                  <div class="text-wrapper-12">Văn học</div>
                </div>
              </div>
              <div class="noi-dung-chi-tiet-sach">
                <div class="text-wrapper-8">Tôi thấy hoa vàng trên cỏ xanh</div>
                <div class="text-wrapper-9">Nguyễn Nhật Ánh</div>
                <div class="text-wrapper-mo-ta">Tác phẩm văn học về tuổi thơ đầy cảm xúc</div>
                <div class="group-chung-lenh-dat-cho">
                  <div class="rectangle-23">
                    <img class="icon-thoi-gian" src="{{ asset('images/iconstack.io - (Book) - white.png') }}" alt="Mượn ngay icon"/>
                    <div class="text-wrapper-23">
                      <p class="text-wrapper-dang-cho">Mượn ngay</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Sách 2 -->
          <div class="khung-chung-sach-lch">
            <div class="khung-anh-sach-lch">
              <img class="image" src="{{ asset('images/mat biec.png') }}" alt="Mắt biếc" />
            </div>
            <div class="khung-chu-sach-lch">
              <div class="danh-muc-sach">
                <div class="rectangle-8">
                  <div class="text-wrapper-12">Văn học</div>
                </div>
              </div>
              <div class="noi-dung-chi-tiet-sach">
                <div class="text-wrapper-8">Mắt biếc</div>
                <div class="text-wrapper-9">Nguyễn Nhật Ánh</div>
                <div class="text-wrapper-mo-ta">Câu chuyện tình yêu đầy cảm động</div>
                <div class="group-chung-lenh-dat-cho">
                  <div class="rectangle-23">
                    <img class="icon-thoi-gian" src="{{ asset('images/iconstack.io - (Book) - white.png') }}" alt="Mượn ngay icon"/>
                    <div class="text-wrapper-23">
                      <p class="text-wrapper-dang-cho">Mượn ngay</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Sách 3 -->
          <div class="khung-chung-sach-lch">
            <div class="khung-anh-sach-lch">
              <img class="image" src="{{ asset('images/muoi van cau hoi vi sao.png') }}" alt="Mười vạn câu hỏi vì sao" />
            </div>
            <div class="khung-chu-sach-lch">
              <div class="danh-muc-sach">
                <div class="rectangle-8">
                  <div class="text-wrapper-12">Khoa học</div>
                </div>
              </div>
              <div class="noi-dung-chi-tiet-sach">
                <div class="text-wrapper-8">Mười vạn câu hỏi vì sao?</div>
                <div class="text-wrapper-9">Nhiều tác giả</div>
                <div class="text-wrapper-mo-ta">Cuốn sách khái quát rộng rãi kiến thức xưa nay</div>
                <div class="group-chung-lenh-dat-cho">
                  <div class="rectangle-23">
                    <img class="icon-thoi-gian" src="{{ asset('images/iconstack.io - (Book) - white.png') }}" alt="Mượn ngay icon"/>
                    <div class="text-wrapper-23">
                      <p class="text-wrapper-dang-cho">Mượn ngay</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Xem thêm -->
          <div class="khoi-ngoai-chuyen-tiep">
            <div class="khoi-chuyen-tiep">
              <div class="chuyen-tiep-chu">Xem thêm sách khác</div>
              <img class="chuyen-tiep-icon" src="{{ asset('images/iconstack.io - (Arrow Narrow Right) - blue.png') }}" alt="Xem thêm" />
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
