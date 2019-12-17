<html>

<body>
    <p>Xin chào {{$data['name']}} !</p>
    <br>
    <div>Chúng tôi gửi Email này để thông báo cho bạn đơn hàng bạn đã mua</div>
    <ul>
        @foreach ($data['product'] as $item)
        <li>
            <b>Tên Sản Phẩm : </b>
            <i>{{$item->name}}</i>
            &nbsp;
            <b>Giá:</b>
            <i>{{$item->subtotal}} VND</i>

        </li>
        @endforeach
        <li>
        Chúng tôi sẽ gửi đến địa chỉ bạn đã nhập: {{$data['add']}}
        </li>
    </ul>
    <p>Mọi thông tin liên hệ: @gmail.com</p>
    <p>Cảm ơn bạn đã tin dùng sản phẩm của chúng tôi</p>
</body>


</html>