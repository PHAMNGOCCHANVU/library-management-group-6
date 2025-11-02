<!-- content-mtra-sachdangmuon.blade.php -->

<div class="khoi-group3-4-14">
  <div class="group-2-choosen">
    <div class="div">
      <a class="group-6" href="{{ url('user/content-mtra-sachdangmuon') }}">
        <div class="rectangle-6">
          <div class="text-wrapper-5">Sách đang mượn</div>
          <div>
            <img class="iconstack-io-book-2" src="{{ asset('images/iconstack.io - (Book) - white.png') }}" alt="Icon sách đang mượn" />
          </div>
        </div>
      </a>
      <a class="group-7" href="{{ url('user/content-mtra-muonsachmoi') }}">
        <div class="rectangle-7">
          <div>
            <img class="iconstack-io" src="{{ asset('images/iconstack.io - (Bookmark) - Purple.png') }}" alt="Icon mượn sách mới" />
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
      <h1 class="tieu-de">Sách đang mượn (3)</h1>
      <p class="ghi-chu">Quản lý các cuốn sách bạn đang mượn và theo dõi hạn trả</p>
    </div>
  </div>   

  <div class="group-ngoai-khoi-sach">
    <div class="group-khoi-sach">

      <!-- Sách 1 -->
      <div class="khung-chung-sach-lch">
        <div class="khung-anh-sach-lch">
          <img class="image" src="{{ asset('images/dac-nhan-tam.jpg') }}" alt="Đắc nhân tâm" />
        </div>
        <div class="khung-chu-sach-lch">
          <div class="text-wrapper-8">Đắc nhân tâm</div>
          <div class="text-wrapper-9">Tác giả: Dale Carnegie</div>
          <div class="thoi-gian-sach">
            <div class="text-wrapper-7">Ngày mượn: 15/1/2025</div>
            <div class="text-wrapper-10">Hạn trả: 15/2/2025</div>
          </div>
          <div class="rectangle-10 rectangle-con-han"></div>
          <div class="text-wrapper-12 text-wrapper-con-han">Còn 5 ngày</div>

          <div class="group-chung-lenh-dat-cho">
            <div class="rectangle-23">
              <img class="icon-thoi-gian" src="{{ asset('images/iconstack.io - (Book) - white.png') }}" alt="Trả sách icon"/>
              <div class="text-wrapper-23">
                <p class="text-wrapper-dang-cho">Trả sách</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sách 2 -->
      <div class="khung-chung-sach-lch">
        <div class="khung-anh-sach-lch">
          <img class="image" src="{{ asset('images/atomic-habits.jpg') }}" alt="Atomic Habits" />
        </div>
        <div class="khung-chu-sach-lch">
          <div class="text-wrapper-8">Atomic Habits</div>
          <div class="text-wrapper-9">Tác giả: James Clear</div>
          <div class="thoi-gian-sach">
            <div class="text-wrapper-7">Ngày mượn: 15/1/2025</div>
            <div class="text-wrapper-10">Hạn trả: 15/2/2025</div>
          </div>
          <div class="rectangle-10 rectangle-con-han"></div>
          <div class="text-wrapper-12 text-wrapper-con-han">Còn 5 ngày</div>

          <div class="group-chung-lenh-dat-cho">
            <div class="rectangle-23">
              <img class="icon-thoi-gian" src="{{ asset('images/iconstack.io - (Book) - white.png') }}" alt="Trả sách icon"/>
              <div class="text-wrapper-23">
                <p class="text-wrapper-dang-cho">Trả sách</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sách 3 -->
      <div class="khung-chung-sach-lch">
        <div class="khung-anh-sach-lch">
          <img class="image" src="{{ asset('images/nha-gia-kim.jpg') }}" alt="Nhà giả kim" />
        </div>
        <div class="khung-chu-sach-lch">
          <div class="text-wrapper-8">Nhà giả kim</div>
          <div class="text-wrapper-9">Tác giả: Paulo Coelho</div>
          <div class="thoi-gian-sach">
            <div class="text-wrapper-7">Ngày mượn: 5/1/2025</div>
            <div class="text-wrapper-10">Hạn trả: 5/2/2025</div>
          </div>
          <div class="rectangle-8 rectangle-qua-han"></div>
          <div class="text-wrapper-12 text-wrapper-qua-han">Quá hạn 5 ngày</div>

          <div class="group-chung-lenh-dat-cho">
            <div class="rectangle-23">
              <img class="icon-thoi-gian" src="{{ asset('images/iconstack.io - (Book) - white.png') }}" alt="Trả sách icon"/>
              <div class="text-wrapper-23">
                <p class="text-wrapper-dang-cho">Trả sách</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
