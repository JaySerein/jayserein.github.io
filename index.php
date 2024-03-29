<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <title>JayAuto</title>
</head>

<body>

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="logo"> <span>Jay</span>Auto</a>
        <nav class="navbar">

            <a href="#home">Trang Chủ</a>
            <a class="click-menu">Xe Hơi</a>
            <ul class="sub-menu">
                <li><a href="asset/ferrari.html">Ferrari</a></li>
                <li><a href="asset/mclaren.html">MCLaren</a></li>
                <li><a href="asset/lamborghini.html">Lamborghini</a></li>
                <li><a href="asset/bugatti.html">Bugatti</a></li>
            </ul>
            <a href="#services">Dịch Vụ</a>
            <a href="#featured">Nổi Bật</a>
            <a href="#reviews">Đánh Giá</a>
            <a href="#contact">Liên Hệ</a>


        </nav>
        <div id="login-btn">
            <button class="btn">Đăng Nhập</button>
            <i class="far fa-user"></i>
        </div>
    </header>

    <div class="login-form-container">
        <span id="close-login-form" class="fas fa-times"></span>
        <form action="">
            <h3>Đăng Nhập</h3>
            <input type="email" placeholder="Địa chỉ Email" class="box">
            <input type="password" placeholder="Mật Khẩu" class="box">
            <p> Quên mật khẩu? <a href="#">Bấm vào đây!</a> </p>
            <input type="submit" value="login" class="btn">
            <p>Đăng nhập với</p>
            <div class="buttons">
                <a href="#" class="btn"> Google </a>
                <a href="#" class="btn"> Facebook </a>
            </div>
            <p>Bạn chưa có tài khoản? <a href="#">Tạo một cái mới!</a> </p>
        </form>
    </div>

    <section class="home" id="home">
        <h3 data-speed="-2" class="home-parallax">Lựa Chọn Xe Hơi</h3>
        <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">
        <a data-speed="7" href="#" class="btn home-parallax">Khám Phá</a>
    </section>

    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>5+</h3>
                <p>Chi Nhánh</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>199+</h3>
                <p>Xe hơi Đã Bán</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>185+</h3>
                <p>Khách Hàng Hài Lòng</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>55+</h3>
                <p>Xe Mới</p>
            </div>
        </div>
    </section>

    <section class="vehicles" id="vehicles">
        <h1 class="heading"> Phương Tiện <span>Phổ Biến</span> </h1>
        <div class="swiper vehicles-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-name="vehicles-1">
                    <img src="image/vehicle-1.png" alt="">
                    <div class="content">
                        <h3>mẫu mới</h3>
                        <div class="price"> <span>giá : </span> $62,000 </div>
                        <p>
                            mới
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> số tự động
                            <span class="fas fa-circle"></span> xăng dầu
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">Xem Thêm</a>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="vehicles-2">
                    <img src="image/vehicle-2.png" alt="">
                    <div class="content">
                        <h3>mẫu mới</h3>
                        <div class="price"> <span>giá : </span> $62,000 </div>
                        <p>
                            mới
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> số tự động
                            <span class="fas fa-circle"></span> xăng dầu
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">Xem Thêm</a>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="vehicles-3">
                    <img src="image/vehicle-3.png" alt="">
                    <div class="content">
                        <h3>mẫu mới</h3>
                        <div class="price"> <span>giá : </span> $62,000 </div>
                        <p>
                            mới
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> số tự động
                            <span class="fas fa-circle"></span> xăng dầu
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">Xem Thêm</a>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="vehicles-4">
                    <img src="image/vehicle-4.png" alt="">
                    <div class="content">
                        <h3>mẫu mới</h3>
                        <div class="price"> <span>giá : </span> $62,000 </div>
                        <p>
                            mới
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> số tự động
                            <span class="fas fa-circle"></span> xăng dầu
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">Xem Thêm</a>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="vehicles-5">
                    <img src="image/vehicle-5.png" alt="">
                    <div class="content">
                        <h3>mẫu mới</h3>
                        <div class="price"> <span>giá : </span> $62,000 </div>
                        <p>
                            mới
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> số tự động
                            <span class="fas fa-circle"></span> xăng dầu
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">Xem Thêm</a>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="vehicles-6">
                    <img src="image/vehicle-6.png" alt="">
                    <div class="content">
                        <h3>mẫu mới</h3>
                        <div class="price"> <span>giá : </span> $62,000 </div>
                        <p>
                            mới
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> số tự động
                            <span class="fas fa-circle"></span> xăng dầu
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">Xem Thêm</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="services" id="services">
        <h1 class="heading">Dịch Vụ <span>Của Chúng Tôi</span> </h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-car"></i>
                <h3>Bán Xe hơi</h3>
                <p></p>
                <a href="#" class="btn">Xem Thêm</a>
            </div>
            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>sửa chữa</h3>
                <p></p>
                <a href="#" class="btn">Xem Thêm</a>
            </div>
            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>bảo hiểm xe hơi</h3>
                <p></p>
                <a href="#" class="btn">Xem Thêm</a>
            </div>
            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>Thay thế pin</h3>
                <p></p>
                <a href="#" class="btn">Xem Thêm</a>
            </div>
            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>thay nhớt</h3>
                <p></p>
                <a href="#" class="btn">Xem Thêm</a>
            </div>
            <div class="box">
                <i class="fas fa-headset"></i>
                <h3> hỗ trợ 24/7</h3>
                <p></p>
                <a href="#" class="btn">Xem Thêm</a>
            </div>
        </div>
    </section>

    <section class="featured" id="featured">
        <h1 class="heading"> Xe hơi <span>nổi bật</span></h1>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-name="car-1">
                    <img src="image/lamborghini/car-1.jpg" alt="">
                    <div class="content">
                        <h3>Lamborghini Aventador SVJ</h3>
                        <p>
                            Động cơ V12 6.5L
                            <span class="fas fa-circle"></span> Công suất 770HP
                            <span class="fas fa-circle"></span> Tốc độ tối đa 350km/h
                            <span class="fas fa-circle"></span> 2 chỗ
                        </p>
                        <div class="price">$518,000</div>
                        <div class="info-btn">Xem thêm</div>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="car-2">
                    <img src="image/lamborghini/car-2.jpg" alt="">
                    <div class="content">
                        <h3>Lamborghini Aventador S</h3>
                        <p>
                            Động cơ V12 6.5L
                            <span class="fas fa-circle"></span> Công suất 740HP
                            <span class="fas fa-circle"></span> Tốc độ tối đa 350km/h
                            <span class="fas fa-circle"></span> 2 chỗ
                        </p>
                        <div class="price">$518,000</div>
                        <div class="info-btn">Xem thêm</div>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="car-3">
                    <img src="image/lamborghini/car-3.jpg" alt="">
                    <div class="content">
                        <h3>Lamborghini Aventador LP</h3>
                        <p>
                            Động cơ V12 6.5L
                            <span class="fas fa-circle"></span> Công suất 700HP
                            <span class="fas fa-circle"></span> Tốc độ tối đa 350km/h
                            <span class="fas fa-circle"></span> 2 chỗ
                        </p>
                        <div class="price">$518,000</div>
                        <div class="info-btn">Xem thêm</div>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="car-4">
                    <img src="image/lamborghini/car-4.jpg" alt="">
                    <div class="content">
                        <h3>Lamborghini Huracan</h3>
                        <p>
                            Động cơ V10 5.2L
                            <span class="fas fa-circle"></span> Công suất 631HP
                            <span class="fas fa-circle"></span> Tốc độ tối đa 320km/h
                            <span class="fas fa-circle"></span> 2 chỗ
                        </p>
                        <div class="price">$518,000</div>
                        <div class="info-btn">Xem thêm</div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-name="car-5">
                    <img src="image/lamborghini/car-5.jpg" alt="">
                    <div class="content">
                        <h3>Huracan Performante</h3>
                        <p>
                            Động cơ V10 5.2L
                            <span class="fas fa-circle"></span> Công suất 631HP
                            <span class="fas fa-circle"></span> Tốc độ tối đa 320km/h
                            <span class="fas fa-circle"></span> 2 chỗ
                        </p>
                        <div class="price">$518,000</div>
                        <div class="info-btn">Xem thêm</div>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="car-6">
                    <img src="image/lamborghini/car-6.jpg" alt="">
                    <div class="content">
                        <h3>Lamborghini Huracan STO</h3>
                        <p>
                            Động cơ V10 5.2L
                            <span class="fas fa-circle"></span> Công suất 631HP
                            <span class="fas fa-circle"></span> Tốc độ tối đa 310km/h
                            <span class="fas fa-circle"></span> 2 chỗ
                        </p>
                        <div class="price">$518,000</div>
                        <div class="info-btn">Xem thêm</div>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="car-7">
                    <img src="image/lamborghini/car-7.jpg" alt="">
                    <div class="content">
                        <h3>Lamborghini Sian SKP</h3>
                        <p>
                            Động cơ V12 6.5L
                            <span class="fas fa-circle"></span> Công suất 820HP
                            <span class="fas fa-circle"></span> Tốc độ tối đa 350km/h
                            <span class="fas fa-circle"></span> 2 chỗ
                        </p>
                        <div class="price">$518,000</div>
                        <div class="info-btn">Xem thêm</div>
                    </div>
                </div>
                <div class="swiper-slide box" data-name="car-8">
                    <img src="image/lamborghini/car-8.jpg" alt="">
                    <div class="content">
                        <h3>Lamborghini Urus</h3>
                        <p>
                            Động cơ V8 4L
                            <span class="fas fa-circle"></span> Công suất 770HP
                            <span class="fas fa-circle"></span> Tốc độ tối đa 320km/h
                            <span class="fas fa-circle"></span> 4 chỗ
                        </p>
                        <div class="price">$518,000</div>
                        <div class="info-btn">Xem thêm</div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="car-info-container">

        <div id="close-info" class="fas fa-times"></div>

        <div class="car-info" data-target="car-1">
            <img src="image/lamborghini/car-1.jpg" alt="">
            <div class="review">
                <h3>Lamborghini Aventador SVJ</h3>
                <p>Kích thước DxRxC (mm): 4943 x 2273 x 1136 <br>
                    Trọng lượng: 1525Kg - Động cơ V12 6.5L: hút khí tự nhiên <br>
                    Công suất: 770HP - Hộp số: ISR 7 cấp <br>
                    Vận tốc tối đa: 350 Km/h - Chế độ lái Strada, Sport, Corsa, Ego
                </p>
                <div class="order-btn">Đặt Xe</div>
            </div>
        </div>
        <div class="car-info" data-target="car-2">
            <img src="image/lamborghini/car-2.jpg" alt="">
            <div class="review">
                <h3>Lamborghini Aventador S</h3>
                <p>Kích thước DxRxC (mm): 4797 x 2265 x 1136 <br>
                    Trọng lượng: 1575Kg - Động cơ V12 6.5L <br>
                    Công suất: 740HP - Hộp số: Bán tự động 7 cấp <br>
                    Vận tốc tối đa: 350 Km/h - Chế độ lái: Strada, Sport, Corsa, Ego
                </p>
                <div class="order-btn">Đặt Xe</div>
            </div>
        </div>
        <div class="car-info" data-target="car-3">
            <img src="image/lamborghini/car-3.jpg" alt="">
            <div class="review">
                <h3>Lamborghini Aventador LP</h3>
                <p>Kích thước DxRxC (mm): 4780 x 2030 x 1136 <br>
                    Trọng lượng: 1575Kg - Động cơ V12 6.5L<br>
                    Công suất: 700HP - Hộp số: ISR 7 cấp <br>
                    Vận tốc tối đa: 350 Km/h - Chế độ lái Strada, Sport, Corsa, Ego
                </p>
                <div class="order-btn">Đặt Xe</div>
            </div>
        </div>
        <div class="car-info" data-target="car-4">
            <img src="image/lamborghini/car-4.jpg" alt="">
            <div class="review">
                <h3>Lamborghini Huracan</h3>
                <p>Kích thước DxRxC (mm): 4506 x 2236 x 1165 <br>
                    Trọng lượng: 1382Kg - Động cơ V10 5.2L<br>
                    Công suất: 631HP - Hộp số: 7 cấp <br>
                    Vận tốc tối đa: 320 Km/h - Chế độ lái Strada, Sport, Corsa, Ego
                </p>
                <div class="order-btn">Đặt Xe</div>
            </div>
        </div>
        <div class="car-info" data-target="car-5">
            <img src="image/lamborghini/car-5.jpg" alt="">
            <div class="review">
                <h3>Huracan Performante</h3>
                <p>Kích thước DxRxC (mm): 4506 x 2236 x 1165 <br>
                    Trọng lượng: 1382Kg - Động cơ V10 5.2L <br>
                    Công suất: 631HP - Hộp số: ISR 7 cấp <br>
                    Vận tốc tối đa: 320 Km/h - Chế độ lái Strada, Sport, Corsa, Ego
                </p>
                <div class="order-btn">Đặt Xe</div>
            </div>
        </div>
        <div class="car-info" data-target="car-6">
            <img src="image/lamborghini/car-6.jpg" alt="">
            <div class="review">
                <h3>Lamborghini Huracan STO</h3>
                <p>Kích thước DxRxC (mm): 4549x 1945x 1220 <br>
                    Trọng lượng: 1339Kg - Động cơ V10 5.2L<br>
                    Công suất: 631HP - Hộp số: 7 cấp <br>
                    Vận tốc tối đa: 310 Km/h - Chế độ lái Strada, Sport, Corsa, Ego
                </p>
                <div class="order-btn">Đặt Xe</div>
            </div>
        </div>
        <div class="car-info" data-target="car-7">
            <img src="image/lamborghini/car-7.jpg" alt="">
            <div class="review">
                <h3>Lamborghini Sian SKP</h3>
                <p>Kích thước DxRxC (mm): 4980 x 2101 x 1133 <br>
                    Trọng lượng: 1525Kg - Động cơ V12 6.5L<br>
                    Công suất: 820HP - Hộp số: AT <br>
                    Vận tốc tối đa: 350 Km/h - Chế độ lái Strada, Sport, Corsa, Ego
                </p>
                <div class="order-btn">Đặt Xe</div>
            </div>
        </div>
        <div class="car-info" data-target="car-8">
            <img src="image/lamborghini/car-8.jpg" alt="">
            <div class="review">
                <h3>Lamborghini Urus</h3>
                <p>Kích thước DxRxC (mm): 5112 x 2016 x 1638 <br>
                    Trọng lượng: 2200Kg - Động cơ V8 4L<br>
                    Công suất: 770HP - Hộp số: AT <br>
                    Vận tốc tối đa: 320 Km/h - Chế độ lái Strada, Sport, Corsa, Ego
                </p>
                <div class="order-btn">Đặt Xe</div>
            </div>
        </div>
    </section>

    <div class="order-container">
        <span id="close-order" class="fas fa-times"></span>
        <form action="">
            <h3>Đơn Đặt Xe</h3>
            <div class="order-info">
                <table>
                    <tbody>
                        <tr>
                            <td> demo </td>
                            <td> Năm:<select name="Năm Sản Xuất" id="year">
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2022">2021</option>
                                </select></td>
                            <td>Màu Xe:<select name="Màu sắc" id="color">
                                    <option value="red">Red</option>
                                    <option value="yellow">Yellow</option>
                                    <option value="blue">Blue</option>
                                    <option value="green">Green</option>
                                    <option value="white">White</option>
                                    <option value="black">Black</option>
                                </select> </td>
                            <td> Nhận Xe: <select name="Nhận Xe" id="shiping">
                                    <option value="1">Cửa Hàng</option>
                                    <option value="2">Tại Nhà</option>
                                    <option value="3">Vận Chuyển</option>
                                </select> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <input type="Text" placeholder="Họ Tên" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="text" placeholder="Địa chỉ" class="box">
            <input type="tel" placeholder="Số điện thoại" class="box">
            <div class="submit-btn">Đặt Xe</div>
        </form>
    </div>

    <div class="order-notify">
        <form action="">
            <h3>Đặt xe thành công! Sẽ có nhân viên gọi điện xác nhận!</h3>
            <div class="btn"><a href="">Trang Chủ</a></div>
        </form>
    </div>

    <section class="newsletter">
        <h3>đăng ký để cập nhật mới nhất</h3>
        <p></p>
        <form action="">
            <input type="email" placeholder="Nhập địa chỉ Email của bạn">
            <input type="submit" value="Đăng kí">
        </form>
    </section>

    <section class="reviews" id="reviews">
        <h1 class="heading"> Đánh Giá <span>Khách Hàng</span> </h1>
        <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <div class="content">
                        <p>Cửa hàng uy tín, chất lượng, dịch vụ tốt, bảo hiểm đầy đủ, hỗ trợ tư vấn nhiệt tình, mai tôi
                            qua mua thêm 10 chiếc nữa cho giúp việc chạy chơi.</p>
                        <h3>diễn viên 1</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <div class="content">
                        <p>Cửa hàng uy tín, chất lượng, dịch vụ tốt, bảo hiểm đầy đủ, hỗ trợ tư vấn nhiệt tình, mai tôi
                            qua mua thêm 10 chiếc nữa cho giúp việc chạy chơi.</p>
                        <h3>diễn viên 2</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <div class="content">
                        <p>Cửa hàng uy tín, chất lượng, dịch vụ tốt, bảo hiểm đầy đủ, hỗ trợ tư vấn nhiệt tình, mai tôi
                            qua mua thêm 10 chiếc nữa cho giúp việc chạy chơi.</p>
                        <h3>diễn viên 3</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-4.png" alt="">
                    <div class="content">
                        <p>Cửa hàng uy tín, chất lượng, dịch vụ tốt, bảo hiểm đầy đủ, hỗ trợ tư vấn nhiệt tình, mai tôi
                            qua mua thêm 10 chiếc nữa cho giúp việc chạy chơi.</p>
                        <h3>diễn viên 4</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-5.png" alt="">
                    <div class="content">
                        <p>Cửa hàng uy tín, chất lượng, dịch vụ tốt, bảo hiểm đầy đủ, hỗ trợ tư vấn nhiệt tình, mai tôi
                            qua mua thêm 10 chiếc nữa cho giúp việc chạy chơi.</p>
                        <h3>diễn viên 5</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-6.png" alt="">
                    <div class="content">
                        <p>Cửa hàng uy tín, chất lượng, dịch vụ tốt, bảo hiểm đầy đủ, hỗ trợ tư vấn nhiệt tình, mai tôi
                            qua mua thêm 10 chiếc nữa cho giúp việc chạy chơi.</p>
                        <h3>diễn viên 6</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading">Liên Hệ <span>với Chùng tôi</span></h1>
        <div class="row">
            <div class="map>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.9389472730986!2d108.01953384501135!3d12.652007790040303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31721de945b5bc67%3A0x99bb9ace54335d15!2zNTY3IEzDqiBEdeG6qW4sIEVhIFRhbSwgVGjDoG5oIHBo4buRIEJ1w7RuIE1hIFRodeG7mXQsIMSQ4bqvayBM4bqvaywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1704002600251!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <form action="">
                <h3>Liên lạc</h3>
                <input type="text" placeholder="Họ Tên" class="box">
                <input type="email" placeholder="Địa chỉ Email" class="box">
                <input type="tel" placeholder="SĐT" class="box">
                <textarea placeholder="Lời Nhắn" class="box" cols="30" rows="10"></textarea>
                <input type="submit" value="Gửi" class="btn">
            </form>
        </div>
    </section>

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>Chi Nhánh</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Buôn Ma Thuột </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Đà Nẵng </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Hà Nội </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Đà Lạt </a>
            </div>

            <div class="box">
                <h3>Liên Kết Nhanh</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> Trang Chủ </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Xe hơi </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Dịch Vụ </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Nổi Bật </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Đánh Giá </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Liên Hệ </a>
            </div>

            <div class="box">
                <h3>Thông Tin Liên Hệ</h3>
                <a href="#"> <i class="fas fa-phone"></i> 0915975198 </a>
                <a href="#"> <i class="fas fa-phone"></i> 0782588720 </a>
                <a href="#"> <i class="fas fa-envelope"></i> seanobita08@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> younext08@gmail.com </a>
            </div>

            <div class="box">
                <h3>Thông Tin Liên Hệ</h3>
                <a href="https://www.facebook.com/NT.Joker.08"> <i class="fab fa-facebook-f"></i> Tuấn Nguyễn </a>
                <a href="https://www.facebook.com/datlee032002"> <i class="fab fa-facebook-f"></i> Đạt Lê </a>
            </div>

        </div>


    </section>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
    </script>
</body>

</html>
