<!DOCTYPE html>
<html>

<head>
  <title>Trang Admin</title>
  <link rel="stylesheet" type="text/css" href="./index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <section>
    <div class="sidebar">
      <h1 class="logo">Nice Face</h1>
      <ul class="nav">
        <li>
          <a href="#"><i class="fa fa-windows"></i> Bảng điều khiển</a>
        </li>
        <li class="active">
          <a href="#"><i class="fa fa-shopping-bag"></i> Đơn hàng</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-pie-chart"></i> Thống kê</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-cube"></i> Sản phẩm</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-database"></i> Loại hàng</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-tag"></i> Khách hàng</a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="head-section">
        <div class="col-6">
          <h2>Đơn hàng</h2>
          <p>30 đơn hàng hiện có</p>
        </div>

        <div class="col-6" style="text-align: right">
          <i class="fa fa-bell-o hicon"></i>
          <input type="text" class="search" />
          <i class="fa fa-search hicon sicon"></i>

          <img src="../image/nga.png" class="user" />

          <div class="profile-div">
            <p><i class="fa fa-user"></i> Thông tin</p>
            <p><i class="fa fa-cog"></i> Cài đặt</p>
            <p><i class="fa fa-power-off"></i> Đăng xuất</p>
          </div>

          <div class="notification-div">
            <p>Chúc mừng !! Bạn đã đăng nhập vào trang admin !!</p>
          </div>
        </div>

        <div class="clearfix"></div>
      </div>

      <br /><br />
      <div class="content">
        <p>Tất cả đơn hàng</p>
        <br /><br />

        <table>
          <thead>
            <tr>
              <th scope="col" width="50px">STT</th>
              <th scope="col" width="100px">Tên</th>
              <th scope="col" width="290px">Địa chỉ</th>
              <th scope="col">Ngày</th>
              <th scope="col">Tổng tiền</th>
              <th scope="col">Trạng thái</th>
              <th scope="col" width="70px">Hành động</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Account">#1</td>
              <td data-label="Due Date">
                <img src="../image/nga.png" class="tab-img" />Nga
              </td>
              <td data-label="Amount">FPT Polytechnic.</td>
              <td data-label="Period">08/11/2022</td>
              <td data-label="Due Date">500.000đ</td>
              <td data-label="Amount" style="position: relative">
                <span class="pe"></span>Đã giao
              </td>
              <td data-label="Period">
                <i class="fa fa-gear ticon"></i>

                <i class="fa fa-angle-down ticon"></i>
              </td>
            </tr>

            <tr class="active-tr">
              <td data-label="Account">#1</td>
              <td data-label="Due Date">
                <img src="../image/nga.png" class="tab-img" />Nga
              </td>
              <td data-label="Amount">FPT Polytechnic.</td>
              <td data-label="Period">08/11/2022</td>
              <td data-label="Due Date">500.000đ</td>
              <td data-label="Amount" style="position: relative">
                <span class="de"></span>Đã nhận
              </td>
              <td data-label="Period">
                <i class="fa fa-gear ticon"></i>

                <i class="fa fa-angle-down ticon"></i>
              </td>
            </tr>
            <tr>
              <td data-label="Account">#1</td>
              <td data-label="Due Date">
                <img src="../image/nga.png" class="tab-img" />Nga
              </td>
              <td data-label="Amount">FPT Polytechnic.</td>
              <td data-label="Period">08/11/2022</td>
              <td data-label="Due Date">500.000đ</td>
              <td data-label="Amount" style="position: relative">
                <span class="pe"></span>Đã giao
              </td>
              <td data-label="Period">
                <i class="fa fa-gear ticon"></i>

                <i class="fa fa-angle-down ticon"></i>
              </td>
            </tr>

            <tr>
              <td data-label="Account">#1</td>
              <td data-label="Due Date">
                <img src="../image/nga.png" class="tab-img" />Nga
              </td>
              <td data-label="Amount">FPT Polytechnic.</td>
              <td data-label="Period">08/11/2022</td>
              <td data-label="Due Date">500.000đ</td>
              <td data-label="Amount" style="position: relative">
                <span class="pe"></span>Đã giao
              </td>
              <td data-label="Period">
                <i class="fa fa-gear ticon"></i>

                <i class="fa fa-angle-down ticon"></i>
              </td>
            </tr>
            <tr>
              <td data-label="Account">#1</td>
              <td data-label="Due Date">
                <img src="../image/nga.png" class="tab-img" />Nga
              </td>
              <td data-label="Amount">FPT Polytechnic.</td>
              <td data-label="Period">08/11/2022</td>
              <td data-label="Due Date">500.000đ</td>
              <td data-label="Amount" style="position: relative">
                <span class="de"></span>Đã nhận
              </td>
              <td data-label="Period">
                <i class="fa fa-gear ticon"></i>

                <i class="fa fa-angle-down ticon"></i>
              </td>
            </tr>

            <tr>
              <td data-label="Account">#1</td>
              <td data-label="Due Date">
                <img src="../image/nga.png" class="tab-img" />Nga
              </td>
              <td data-label="Amount">FPT Polytechnic.</td>
              <td data-label="Period">08/11/2022</td>
              <td data-label="Due Date">500.000đ</td>
              <td data-label="Amount" style="position: relative">
                <span class="pe"></span>Đã giao
              </td>
              <td data-label="Period">
                <i class="fa fa-gear ticon"></i>

                <i class="fa fa-angle-down ticon"></i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
  $(document).ready(function() {
    $('.user').click(function() {
      $('.profile-div').toggle(1000);
    });
    $('.hicon:nth-child(1)').click(function() {
      $('.notification-div').toggle(1000);
    });
    $('.sicon').click(function() {
      $('.search').toggle(1000);
    });
  });
  </script>

  <script type="text/javascript">
  $('li').click(function() {
    $('li').removeClass('active');
    $(this).addClass('active');
  });
  </script>
</body>

</html>